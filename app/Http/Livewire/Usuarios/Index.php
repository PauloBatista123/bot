<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\User;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $deletarId;

    protected $paginationTheme = 'simple-bootstrap';

    protected $listeners = ['render_usuarios' => 'render', 'deletar'];

    public function render()
    {
        $usuarios = User::paginate(10);

        return view('livewire.usuarios.index', [
            'usuarios' => $usuarios
        ]);
    }

    public function deletar()
    {
        try{

            $usuario = User::find($this->deletarId)->delete();

            $this->alert('success', 'Gerente deletado com sucesso!', [
                'position' => 'top-start'
            ]);

            $this->emit('render_gerente');

        }catch(Exception $e){

            $this->alert('warning', 'Erro ao realizar operação.');

        }
    }

    public function confirmDelete($id)
    {
        $this->deletarId = $id;

        $this->alert('warning', 'Atenção', [
            'position' => 'center',
            'timer' => false,
            'toast' => false,
            'text' => 'Deseja realmente deletar?',
            'showConfirmButton' => true,
            'onConfirmed' => 'deletar',
            'showCancelButton' => true,
            'onDismissed' => '',
            'cancelButtonText' => 'Cancelar',
            'confirmButtonText' => 'Deletar',
        ]);

    }
}
