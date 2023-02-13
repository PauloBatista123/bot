<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = [
        'mensagem', 'robo_id', 'protocolo'
    ];

    protected $with = ['robo'];

    public function robo()
    {
        return $this->belongsTo(Robo::class, 'robo_id', 'id');
    }
}
