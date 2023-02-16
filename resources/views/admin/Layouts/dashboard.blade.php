<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administração</title>

    <link rel="icon" href="{{asset('imgs/favicon .png')}}" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
</head>
<body>
    <div class="">
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
                <a class="nav-item">
                    <i class="fa-solid fa-users"></i>
                    <span>Usuários</span>
                </a>
                <a class="nav-item" href="{{route('servico.index')}}">
                    <i class="fa-solid fa-robot"></i>
                    <span>Serviços</span>
                </a>
                <a class="nav-item active" href="{{route('gerente.index')}}">
                    <i class="fa-solid fa-id-badge"></i>
                    <span>Gerentes</span>
                </a>
                <a class="nav-item">
                    <i class="fa-solid fa-user-lock"></i>
                    <span>Perfil</span>
                </a>
              </div>
            </div>
        </nav>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    @livewireScripts

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>

    {{-- instancia do modal off canvas e listeners--}}
    <script>
        let bsOffcanvas = new bootstrap.Offcanvas('#offcanvasRightEdit');

        window.addEventListener('close-modal-editar', event => {
            bsOffcanvas.hide();
        })
    </script>

</body>
</html>
