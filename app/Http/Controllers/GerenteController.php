<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerenteController extends Controller
{
    public function index()
    {
        return view('admin.Gerentes.index');
    }
}
