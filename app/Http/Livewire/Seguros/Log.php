<?php

namespace App\Http\Livewire\Seguros;

use App\Models\Log as ModelsLog;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Log extends Component
{
    use WithPagination;

    public $count = 0;

    protected $listeners = ['render_novo_log_seguros' => 'render'];

    protected $paginationTheme = 'simple-bootstrap';

    public function render()
    {
        $logs = ModelsLog::where('bot', 2)->whereDate('created_at', Carbon::now()->format('Y-m-d'))->orderByDesc('id')->paginate(4);

        return view('livewire.seguros.log', [
            'logs' => $logs
        ]);
    }
}
