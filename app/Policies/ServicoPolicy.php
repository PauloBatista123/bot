<?php

namespace App\Policies;

use App\Models\Permissao;
use App\Models\Servico;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @param string $permissao
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user, string $permissao)
    {
        return $user->existePermissao(Permissao::where('nome', $permissao)->first(), $user->perfis[0]) || $user->existeAdmin();
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param string $permissao
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, string $permissao)
    {
        return $user->existePermissao(Permissao::where('nome', $permissao)->first(), $user->perfis[0]) || $user->existeAdmin();
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Servico  $servico
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Servico $servico)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Servico  $servico
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Servico $servico)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Servico  $servico
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Servico $servico)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Servico  $servico
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Servico $servico)
    {
        //
    }
}
