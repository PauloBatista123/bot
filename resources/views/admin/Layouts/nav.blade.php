@inject('request','Illuminate\Http\Request')
<nav class="navbar bg-transparent text-white align-items-center justify-content-center font-bold px-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('servico.index')}}">
        <img src="{{asset('imgs/SicoobLogo.png')}}" alt="Logo" width="100" height="40" class="d-inline-block align-text-top">
      </a>

      <div class="d-flex gap-5">
        <a class="nav-item">
            <i class="fa-solid fa-house"></i>
            <span>Início</span>
        </a>
        @if(Auth::user()->can('view-usuario', 'listar_usuario'))
        <a class="nav-item @if($request->route()->getName() == 'usuarios.index') active  @endif" href="{{route('usuarios.index')}}">
            <i class="fa-solid fa-users"></i>
            <span>Usuários</span>
        </a>
        @endif

        @if(Auth::user()->can('view-servico', 'listar_servico'))
        <a class="nav-item @if($request->route()->getName() == 'servico.index') active  @endif " href="{{route('servico.index')}}">
            <i class="fa-solid fa-robot"></i>
            <span>Serviços</span>
        </a>
        @endif

        @if(Auth::user()->can('view-gerente', 'listar_gerente'))
        <a class="nav-item @if($request->route()->getName() == 'gerente.index') active  @endif" href="{{route('gerente.index')}}">
            <i class="fa-solid fa-id-badge"></i>
            <span>Gerentes</span>
        </a>
        @endif

        @if(Auth::user()->can('view-perfil', 'listar_perfil'))
        <a class="nav-item @if($request->route()->getName() == 'perfil.index') active  @endif" href="{{route('perfil.index')}}">
            <i class="fa-solid fa-user-lock"></i>
            <span>Perfil</span>
        </a>
        @endif

        <div class="dropdown dropstart">
            <a class="nav-item nav-auth dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >
                <i class="fa-regular fa-circle-user"></i>
                {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{route('login.logout')}}" >Sair</a></li>
            </ul>
        </div>
      </div>
    </div>
</nav>
