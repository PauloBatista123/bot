<?php

namespace App\Http\Livewire\Gerente;

use App\Models\Gerente;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $deletarId;

    protected $paginationTheme = 'simple-bootstrap';

    protected $listeners = ['render_gerente' => 'render', 'deletar'];

    public function render()
    {
        $gerentes = Gerente::paginate(10);

        return view('livewire.gerente.index', [
            'gerentes' => $gerentes
        ]);
    }

    public function deletar()
    {
        try{

            $gerente = Gerente::find($this->deletarId)->delete();

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
