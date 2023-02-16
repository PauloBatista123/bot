<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Gerente;
use App\Models\Permissao;
use App\Models\Servico;
use App\Policies\GerentePolicy;
use App\Policies\ServicoPolicy;
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
        Gate::define('show-servico', [ServicoPolicy::class, 'show']);
    }


}
