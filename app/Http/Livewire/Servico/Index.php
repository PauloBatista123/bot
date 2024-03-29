<?php

namespace App\Http\Livewire\Servico;

use App\Models\Servico;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $robo;

    protected $listeners = ['render_novo_servico' => 'render'];

    protected $paginationTheme = 'simple-bootstrap';

    public function render()
    {
        $servicos = Servico::
        where('robo_id', 1)
        ->whereDate('created_at', Carbon::now()->format('Y-m-d'))
        ->orderBy('id', 'desc')
        ->paginate(4);

        return view('livewire.servico.index', [
            'servicos' => $servicos
        ]);
    }
}
