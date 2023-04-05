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
<body style="
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #013239;
    ">

    <div class="text-white relative top-0 mr-1 pr-1">
        <img src="{{asset('imgs/SicoobLogo.png')}}" height="100" width="100" class="rounded img-fluid" alt="...">
    </div>
    <div class="mt-2 mb-5">

        <div class="d-flex justify-content-center align-items-center">
            @livewire('seguros.status', key('seguros.status'))
        </div>
        <div class="m-0">
            <div class="font-weight-bolder text-sm-center text-white">
                <p class="text-bold">{{"<>UTI 2023</>"}}</p>
            </div>
        </div>

    </div>
    <div class="row m-3">
        <div class="col-md-12">
            {{-- livewire --}}
            @livewire('seguros.index', key('seguros.index'))
        </div>
    </div>


    <script src="{{asset('js/servico.js') }}"></script>
    @livewireScripts
</body>
</html>
