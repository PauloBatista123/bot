<?php

namespace App\Http\Livewire\Gerente;

use App\Models\Gerente;
use Exception;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Auth;

class Adicionar extends Component
{
    use LivewireAlert;

    public $cpf;
    public $nome;
    public $pa;
    public $celular;

    public function render()
    {
        return view('livewire.gerente.adicionar');
    }

    public function updatedCpf($cpf)
    {
        if($cpf){
            $response = Http::connectTimeout(3)->get('http://10.54.56.236:3000/cooperado/'.$cpf)->throw(function (Response $response, Exception $e) {
                $this->alert('warning', $e->getMessage());
                return $e;
            })->json();

            if(isset($response['error'])){
                $this->alert('warning', 'Servidor não encontrou cpf informado na base...');
            }else{
                $this->nome = $response['nome'];
                $this->celular = str_replace(' ', '', $response['telefone']);
                $this->pa = substr($response['pa'], 3, 2);
            }

        }
    }

    public function salvar()
    {
        try{

            Gerente::create([
                'nome' => $this->nome,
                'celular' => $this->celular,
                'pa' => $this->pa,
            ]);


            $this->alert('success', 'Gerente cadastrado com sucesso!', [
                'position' => 'top-start'
            ]);

            $this->emit('render_gerente');
            $this->resetar();

        }catch(Exception $e){

            $this->alert('warning', 'Erro ao realizar operação.');

        }
    }

    public function resetar()
    {
        $this->reset(['nome', 'cpf', 'celular', 'pa']);
    }
}
