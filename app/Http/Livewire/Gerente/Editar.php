<?php

namespace App\Http\Livewire\Gerente;

use App\Models\Gerente;
use Exception;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Editar extends Component
{
    use LivewireAlert;

    protected $listeners = ['editar'];

    public $nome;
    public $celular;
    public $pa;
    public $gerente;

    public function render()
    {
        return view('livewire.gerente.editar');
    }

    public function editar($id)
    {
        try{

            $this->gerente = Gerente::findOrFail($id);

            $this->nome = $this->gerente->nome;
            $this->celular = $this->gerente->celular;
            $this->pa = $this->gerente->pa;

        }catch(Exception $e){



        }
    }

    public function salvar()
    {
        try{

            $this->gerente->update([
                'celular' => $this->celular,
                'pa' => $this->pa,
            ]);


            $this->alert('success', 'Gerente atualizado com sucesso!', [
                'position' => 'top-start'
            ]);

            $this->emit('render_gerente');
            $this->dispatchBrowserEvent('close-modal-editar');

        }catch(Exception $e){

            $this->alert('warning', 'Erro ao realizar operação:'.$e->getMessage(), [
                'time' => 6000
            ]);

        }
    }
}
