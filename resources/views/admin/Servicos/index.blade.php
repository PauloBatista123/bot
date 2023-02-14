<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chamados Aberto - BOT</title>
    <link rel="icon" href="{{asset('imgs/favicon .png')}}" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
</head>
<body class="container vw-100"
    style="background: linear-gradient(90deg, rgba(0,54,66,1) 0%, rgba(0,54,66,1) 40%, rgba(0,54,66,1) 100%);">

    <div class="row my-5">
        <div class="d-flex justify-content-center align-items-center">
            <i class="fa-solid fa-robot" style="font-size: 3rem; color: white;"></i>
        </div>
        <div class="text-center">
            <img src="{{asset('imgs/SicoobLogo.png')}}" height="110" width="110" class="rounded img-fluid" alt="...">
        </div>
    </div>
    <div class="row m-3">
        <div class="col-md-12">
            {{-- livewire --}}
            @livewire('servico.index', ,key('servico.index'))
        </div>
    </div>
    <div class="m-0">
        <div class="font-weight-bolder text-sm-center text-white">
            <p class="text-bold">{{"<>UTI 2023</>"}}</p>
        </div>
    </div>

    <script src="{{asset('js/servico.js') }}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    @livewireScripts
</body>
</html>
