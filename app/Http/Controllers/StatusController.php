<?php

namespace App\Http\Controllers;

use App\Events\NovoStatusEvent;
use App\Models\Status;
use Exception;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function status(Request $request)
    {

        try {
            $status = $request->get('status');
            $robo_id = $request->get('robo_id');

            if(Status::where('robo_id', $robo_id)->count()){
                Status::where('robo_id', $robo_id)->update(['status' => $status]);
            }else{
                Status::create([
                    'status' => $status,
                    'robo_id' => $robo_id
                ]);
            }

            event(new NovoStatusEvent($status));

            return response()->json([
                'error' => false,
                'mensagem' => 'Ok!'
            ], 200);

        }catch(Exception $e){

            return response()->json([
                'error' => true,
                'mensagem' => $e->getMessage()
            ], 404);

        }

    }
}
