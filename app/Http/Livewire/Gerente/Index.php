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
    public $filtro_nome;
    public $filtro_celular;
    public $filtro_pa;

    protected $paginationTheme = 'simple-bootstrap';

    protected $listeners = ['render_gerente' => 'render', 'deletar'];

    public function render()
    {

        $gerentes = Gerente::
                            when($this->filtro_nome, function ($query) {
                                $query->where('nome', 'like', '%'.$this->filtro_nome.'%');
                            })
                            ->when($this->filtro_celular, function ($query) {
                                $query->where('celular', 'like', '%'.$this->filtro_celular.'%');
                            })
                            ->when($this->filtro_pa, function ($query) {
                                $query->where('pa', 'like', '%'.$this->filtro_pa.'%');
                            })
                            ->orderBy('nome')
                            ->paginate(10);

        return view('livewire.gerente.index', [
            'gerentes' => $gerentes
        ]);
    }

    public function updatingFiltroNome()
    {
        $this->resetPage();
    }

    public function updatingFiltroPa()
    {
        $this->resetPage();
    }

    public function updatingFiltroCelular()
    {
        $this->resetPage();
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

    public function resetar_filtro()
    {
        $this->reset(['filtro_nome', 'filtro_celular', 'filtro_pa']);
    }
}
