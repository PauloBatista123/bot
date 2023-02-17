<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function perfis(){

        return $this->belongsToMany(Perfil::class);
    }

    public function permissoes(){

        return $this->belongsToMany(Permissao::class);
    }

    public function adicionaPerfil($perfil){

        if (is_string($perfil)) {
            return $this->perfis()->save(
                Perfil::where('nome', '=', $perfil)->firstOrFail()

            );
        }
        return $this->perfis()->save(
            Perfil::where('nome', '=', $perfil->nome)->firstOrFail()

        );
    }

    public function removePerfil($perfil){
        if (is_string($perfil)) {
            return $this->perfis()->detach(
                Perfil::where('nome', '=', $perfil)->firstOrFail()

            );
        }
        return $this->perfis()->detach(
            Perfil::where('nome', '=', $perfil->nome)->firstOrFail()

        );
    }

    public function existePerfil($perfil){

        if (is_string($perfil)) {
            return $this->perfis->contains('nome', $perfil);
        }

        return $perfil->intersect($this->perfis)->count();

    }

    public function existePermissao($permissao, $perfil): bool {

        $verify = DB::table('perfil_permissao')->where([['permissao_id', '=', $permissao->id],['perfil_id', '=', $perfil->id]])->get();

        if ($verify->count()) {

            return true;

        }else{

            return false;

        }

    }

    public function existeAdmin(){

        return $this->existePerfil('admin');

    }


}
