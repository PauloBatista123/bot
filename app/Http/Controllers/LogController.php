<?php

namespace App\Http\Controllers;

use App\Events\NovoLogEvent;
use App\Events\NovoStatusEvent;
use App\Models\Log;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class LogController extends Controller
{
    public $log;

    public function __construct(Log $log)
    {
        $this->log = $log;
    }

    public function salvar(Request $request)
    {
        try{
            $log = $this->log->create([
                'mensagem' => $request->get('mensagem'),
                'bot' => $request->get('bot')
            ]);

            event(new NovoLogEvent($log));

            return response()->json([
                'mensagem' => 'Ok!'
            ], 200);
        }catch(Exception $e) {
            return response()->json([
                'Erro' => $e->getMessage()
            ], 404);
        }

    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
