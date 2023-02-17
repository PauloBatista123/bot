<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        return view('admin.Perfil.index');
    }

    public function adicionar()
    {

        return view('admin.cadastro.papel.adicionar');
    }

    public function permissao($id)
    {
        return view('admin.Perfil.permissao', [
            'id' => $id,
        ]);
    }
}
