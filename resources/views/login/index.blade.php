<html class="loading" lang="pt-br" data-textdirection="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Administração - Login</title>

        <link rel="icon" href="{{asset('imgs/favicon .png')}}" />
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @livewireStyles
    </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="bg-gradient-primary sidebar-toggled">

    <div class="container h-100">

        <!-- Outer Row -->
        <div class="row d-flex justify-content-center align-content-center h-100">

            <div class="col-xl-10 col-lg-12 col-md-9 mx-auto">

                <div class="card o-hidden border-0 shadow-lg my-5 rounded-3">
                    <div class="card-body p-0 bg-white text-center rounded-3">
                        <img src="{{asset('imgs/ARABOT.png')}}" alt="logo" class="pt-4">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="small text-gray-900 mb-4 text-sicoob">Autenticação</h1>
                                    </div>
                                    <form class="form form-vertical" action="{{route('login.logar')}}" method="post">
                                      {{ csrf_field() }}
                                      <div class="form-floating mb-3">
                                        <input type="email" class="form-control" name="email"  id="email" placeholder="Digite seu email">
                                        <label for="email">Email</label>
                                      </div>
                                      <div class="form-floating mb-3">
                                        <input type="password" class="form-control" name="password"  id="password" placeholder="Digite sua senha">
                                        <label for="password">Senha</label>
                                      </div>
                                        <button type="submit" class="btn btn-success glow w-100 position-relative">Login <i
                                                class="bx bx-right-arrow-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Custom scripts for all pages-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f4c455378e.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- END: Theme JS-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script src="{{ asset('js/sb-admin-2.js') }}"></script>

    @if(Session::has('mensagem'))
    <script type="text/javascript">
     $(document).ready(function() {
        swal({
          title: "{{ Session::get('mensagem')['title'] }}",
          text: "{{ Session::get('mensagem')['msg'] }}",
          icon: "{{ Session::get('mensagem')['icon'] }}",
          button: "Confirmar",
        });
     });
    </script>
    @endif

  </body>
  <!-- END: Body-->
</html>
