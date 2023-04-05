<?php

namespace App\Http\Livewire\Seguros;

use App\Models\Servico;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $listeners = ['render_novo_servico_seguros' => 'render'];

    protected $paginationTheme = 'simple-bootstrap';

    public function render()
    {
        $servicos = Servico::
        where('robo_id', 2)
        ->whereDate('created_at', Carbon::now()->format('Y-m-d'))
        ->orderBy('id', 'desc')->paginate(4);

        return view('livewire.seguros.index', [
            'servicos' => $servicos
        ]);
    }
}
