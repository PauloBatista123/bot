<?php

namespace App\Policies;

use App\Models\Gerente;
use App\Models\Permissao;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GerentePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user, string $permissao)
    {
        return $user->existePermissao($permissao, $user->papeis) || $user->existeAdmin();
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gerente  $gerente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Gerente $gerente)
    {

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @param  string  $permissao
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user, string $permissao)
    {
        return $user->existePermissao($permissao, $user->papeis) || $user->existeAdmin();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  string  $permissao
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, string $permissao)
    {
        return $user->existePermissao($permissao, $user->papeis) || $user->existeAdmin();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  string  $permissao
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, string  $permissao)
    {
        return $user->existePermissao($permissao, $user->papeis) || $user->existeAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gerente  $gerente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Gerente $gerente)
    {

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gerente  $gerente
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Gerente $gerente)
    {
        //
    }

    public function getPermissoes()
    {
        return Permissao::with('perfis')->get();
    }
}
