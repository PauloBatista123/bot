<?php

namespace App\Http\Livewire\Seguros;

use App\Models\Log;
use App\Models\Servico;
use Carbon\Carbon;
use Livewire\Component;

class Contador extends Component
{
    protected $listeners = ['render_novo_servico_seguros' => 'render', 'render_novo_log_seguros' => 'render'];

    public function render()
    {
        $numberOfServices = Servico::
        where('robo_id', 2)
        ->whereDate('created_at', Carbon::now()->format('Y-m-d'))
        ->count();

        $numberOfErrors = Log::
        where('bot', 2)
        ->whereDate('created_at', Carbon::now()->format('Y-m-d'))
        ->count();


        return view('livewire.seguros.contador', [
            'numberOfServices' => $numberOfServices,
            'numberOfErrors' => $numberOfErrors
        ]);
    }
}
