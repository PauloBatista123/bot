<?php

namespace App\Http\Livewire\Perfil;

use App\Models\Perfil;
use Livewire\Component;
use App\Models\Permissao as ModelPermissao;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Permissao extends Component
{
    public $perfil;
    use LivewireAlert;

    public function render()
    {
        $permissao = ModelPermissao::all();

        return view('livewire.perfil.permissao', [
            'permissao' => $permissao,
        ]);
    }

    public function mount($perfil_id)
    {
        $this->perfil = Perfil::find($perfil_id);
    }

    public function adicionar($id)
    {
        try{
            $permissao = ModelPermissao::find($id);

            $this->perfil->adicionarPermissao($permissao);

            $this->alert('success', $permissao->nome.' adicionada!');

        }catch(Exception $e){
            $this->alert('warning', 'Erro Interno:'.$e->getMessage());
        }

    }

    public function remover($id)
    {
        try{
            $permissao = ModelPermissao::find($id);

            $this->perfil->removerPermissao($permissao);

            $this->alert('success', $permissao->nome.' removida!');

        }catch(Exception $e){
            $this->alert('warning', 'Erro Interno:'.$e->getMessage());
        }

    }
}
