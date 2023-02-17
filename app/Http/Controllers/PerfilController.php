<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index(Request $request)
    {
        if($request->user()->cannot('view-perfil', 'listar_perfil')) {
            abort(403);
        }

        return view('admin.Perfil.index');
    }

    public function adicionar(Request $request)
    {
        if($request->user()->cannot('create-perfil', 'listar_perfil')) {
            abort(403);
        }

        return view('admin.cadastro.papel.adicionar');
    }

    public function permissao(Request $request, $id)
    {
        if($request->user()->cannot('view-perfil', 'listar_permissao')) {
            abort(403);
        }

        return view('admin.Perfil.permissao', [
            'id' => $id,
        ]);
    }
}
