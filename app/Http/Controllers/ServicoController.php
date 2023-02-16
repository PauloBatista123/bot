<?php

namespace App\Http\Controllers;

use App\Events\NovoServicoEvent;
use App\Events\NovoServicoEventimplements;
use App\Models\Servico;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicoController extends Controller
{
    public function index(Request $request)
    {
        if($request->user()->cannot('view-servico', 'robo_pld')) {
            abort(403);
        }

        return view('admin.Servicos.index');
    }

    public function salvar(Request $request)
    {
        try{
            DB::beginTransaction();

            $servico = Servico::create([
                'mensagem' => $request->get('mensagem'),
                'robo_id' => $request->get('robo_id'),
                'protocolo' => $request->get('protocolo'),
            ]);

            event(new NovoServicoEvent($servico));

            DB::commit();

            return response()->json([
                'error' => false,
                'mensagem' => 'Registro enviado com sucesso!',
            ], 200);

        }catch(Exception $e){

            return response()->json([
                'error' => true,
                'mensagem' => $e->getMessage(),
            ], 400);

            DB::rollBack();
        }
    }

    public function pld(Request $request)
    {
        if($request->user()->cannot('show-servico', 'listar_servico')) {
            abort(403);
        }

        return view('admin.Servicos.pld');
    }
}
