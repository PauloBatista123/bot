<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{asset('imgs/favicon.png')}}" />
    <title>Bot logs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    @livewireStyles
</head>
<body class="container" style="background: linear-gradient(90deg, rgba(3,60,69,1) 0%, rgba(3,60,69,1) 40%, rgba(3,60,69,1) 100%);">

    <div class="row my-5">
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="text-white text-uppercase">Registro de Logs</h1>
        </div>
        <div class="text-center">
            <img src="{{asset('imgs/SicoobLogo.png')}}" height="110" width="110" class="rounded img-fluid" alt="...">
        </div>
    </div>
    <div class="row m-3">
        <div class="col-md-12">
            {{-- livewire --}}
            @livewire('log.index', ,key('log.index'))
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    @livewireScripts
</body>
</html>
