<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credenciais extends Model
{
    use HasFactory;
    protected $table = 'credenciais';
    protected $fillable = [
        'outlookUser', 'outlookPass', 'intraUser', 'intraPass', 'sicoobUser', 'sicoobPass'
    ];
}
