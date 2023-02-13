<?php

namespace App\Http\Livewire\Log;

use App\Models\Log;
use Carbon\Carbon;
use Livewire\Component;

class Index extends Component
{
    public $count = 0;
    public $logs;

    protected $listeners = ['render_novo_log' => 'render'];

    public function render()
    {
        $this->logs = Log::whereDate('created_at', Carbon::now()->format('Y-m-d'))->orderByDesc('id')->limit(10)->get();

        return view('livewire.log.index');
    }
}
