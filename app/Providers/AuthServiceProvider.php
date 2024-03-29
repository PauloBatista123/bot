<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Gerente;
use App\Models\Perfil;
use App\Models\Permissao;
use App\Models\Servico;
use App\Models\User;
use App\Policies\GerentePolicy;
use App\Policies\PerfilPolicy;
use App\Policies\ServicoPolicy;
use App\Policies\UsuarioPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Gerente::class => GerentePolicy::class,
        Servico::class => ServicoPolicy::class,
        User::class => UsuarioPolicy::class,
        Perfil::class => Perfil::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('view-gerente', [GerentePolicy::class, 'viewAny']);
        Gate::define('create-gerente', [GerentePolicy::class, 'create']);
        Gate::define('update-gerente', [GerentePolicy::class, 'update']);
        Gate::define('delete-gerente', [GerentePolicy::class, 'delete']);

        Gate::define('view-servico', [ServicoPolicy::class, 'viewAny']);
        Gate::define('show-servico', [ServicoPolicy::class, 'view']);

        Gate::define('view-usuario', [UsuarioPolicy::class, 'viewAny']);
        Gate::define('delete-usuario', [UsuarioPolicy::class, 'delete']);
        Gate::define('create-usuario', [UsuarioPolicy::class, 'create']);
        Gate::define('update-usuario', [UsuarioPolicy::class, 'update']);

        Gate::define('view-perfil', [PerfilPolicy::class, 'viewAny']);
        Gate::define('create-perfil', [PerfilPolicy::class, 'create']);
        Gate::define('delete-perfil', [PerfilPolicy::class, 'delete']);
    }


}
