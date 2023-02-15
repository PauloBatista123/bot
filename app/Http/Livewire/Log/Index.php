<?php

namespace App\Http\Livewire\Log;

use App\Models\Log;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{
    use WithPagination;

    public $count = 0;

    protected $listeners = ['render_novo_log' => 'render'];

    protected $paginationTheme = 'simple-bootstrap';

    public function render()
    {
        $logs = Log::whereDate('created_at', Carbon::now()->format('Y-m-d'))->orderByDesc('id')->paginate(4);

        return view('livewire.log.index', [
            'logs' => $logs
        ]);
    }
}
