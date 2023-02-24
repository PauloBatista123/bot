<?php

namespace App\Http\Livewire;

use App\Models\Status as ModelsStatus;
use Livewire\Component;

class Status extends Component
{
    public $status;

    protected $listeners = ['status' => 'render'];

    public function render()
    {
        $this->status = ModelsStatus::where('robo_id', '1')->first()->status;

        return view('livewire.status');
    }
}
