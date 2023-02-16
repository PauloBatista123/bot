<?php

namespace App\Http\Controllers;

use App\Models\Gerente;
use Exception;
use Illuminate\Http\Request;

class GerenteController extends Controller
{
    public function index(Request $request)
    {
        if($request->user()->cannot('view-gerente', 'listar_gerente')) {
            abort(403);
        }

        return view('admin.Gerentes.index');
    }

    public function show(Request $request, $pa, $nome)
    {

        try{
            $gerente = Gerente::where([
                ['pa', '=', $pa],
                ['nome', '=', $nome]
            ])->firstOrFail();

            return response()->json([
                'error' => false,
                'mensagem' => $gerente
            ], 200);

        }catch(Exception $e){
            return response()->json([
                'error' => true,
                'mensagem' => $e->getMessage()
            ], 404);
        }

    }
}
