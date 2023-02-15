<?php

namespace App\Http\Livewire\Servico;

use App\Models\Servico;
use App\Models\Log;
use Carbon\Carbon;
use Livewire\Component;

class Contador extends Component
{
    public $robo;

    protected $listeners = ['render_novo_servico' => 'render', 'render_novo_log' => 'render'];

    public function render()
    {
        $numberOfServices = Servico::
        when($this->robo, function ($query){
            $query->where('robo_id', $this->robo);
        })
        ->whereDate('created_at', Carbon::now()->format('Y-m-d'))
        ->count();

        $numberOfErrors = Log::
        when($this->robo, function ($query){
            $query->where('robo_id', $this->robo);
        })
        ->whereDate('created_at', Carbon::now()->format('Y-m-d'))
        ->count();


        return view('livewire.servico.contador', [
            'numberOfServices' => $numberOfServices,
            'numberOfErrors' => $numberOfErrors
        ]);
    }
}
