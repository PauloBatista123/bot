<?php

namespace App\Http\Livewire\Seguros;

use App\Models\Status as ModelsStatus;
use Livewire\Component;

class Status extends Component
{
    public $status;

    protected $listeners = ['status_seguros' => 'render'];

    public function render()
    {

        $this->status = ModelsStatus::where('robo_id', '2')->first()->status;

        return view('livewire.seguros.status');
    }
}
