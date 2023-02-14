<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SERVIÇOS - BOT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
</head>
<body style="
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url({{asset('imgs/fundo.png')}});
    ">


    <div class="my-5">
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

    <script src="{{ asset('js/servico.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    @livewireScripts
</body>
</html>
