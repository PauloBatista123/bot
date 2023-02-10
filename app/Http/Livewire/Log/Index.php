<?php

namespace App\Http\Livewire\Log;

use App\Models\Log;
use Livewire\Component;

class Index extends Component
{
    public $count = 0;
    public $logs;

    public function render()
    {
        $this->dispatchBrowserEvent('dispatch-sound');
        $this->logs = Log::orderByDesc('created_at')->get();
        
        return view('livewire.log.index');
    }
    
    public function mount()
    {
    }
}
