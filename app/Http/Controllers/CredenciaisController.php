<?php

namespace App\Http\Controllers;
use App\Models\Credenciais;
use Illuminate\Http\Request;

class CredenciaisController extends Controller
{
    public function getCredenciais($plataforma) {
        if (Credenciais::where('id', $plataforma)->exists()) {
            $Credenciais = Credenciais::where('id', $plataforma)->get()->toJson(JSON_PRETTY_PRINT);
            return response($Credenciais, 200);
        } else {
          return response()->json([
            "message" => "Credencias não encontradas"
        ], 404);
        }

    }

    public function createCredenciais(Request $request) {
            $credencial = new Credenciais;
            $credencial->outlookUser = $request->get("outlookUser");
            $credencial->outlookpass = $request->get("outlookPass");
            $credencial->intraUser = $request->get("intraUser");
            $credencial->intraPass = $request->get("intraPass");
            $credencial->sicoobUser = $request->get("sicoobUser");
            $credencial->sicoobPass = $request->get("sicoobPass");
            $credencial->save();
        
            return response()->json([
                "message" => "Novas credenciais criadas"
            ], 201);
    }
}
