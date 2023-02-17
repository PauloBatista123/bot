<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function logar(Request $request)
    {
        $dados = $request->all();


        if (Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['password']])) {

            if(!Auth::user()->perfis()->count()){
                session()->flash('mensagem', ['msg'=>'O usuário não possui perfil. Entre em contato com administrador', 'class'=>'red white-text',  'title' => 'Erro!!', 'icon' => 'info']);

                return redirect()->route('login.index');
            }
            return redirect()->route('gerente.index');
        }else{

            session()->flash('mensagem', ['msg'=>'Email ou senha inválidos. Tente novamente', 'class'=>'red white-text',  'title' => 'Erro!!', 'icon' => 'info']);

            return redirect()->route('login.index');
        }
    }

    public function login()
    {
        return view('login.index');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.index');
    }

    public function index()
    {
        return view('admin.Usuarios.index');
    }
}
