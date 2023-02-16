<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administração - @yield('title')</title>

    <link rel="icon" href="{{asset('imgs/favicon .png')}}" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
</head>
<body>
    <div class="">
        @include('admin.Layouts.nav')
    </div>

    <div class="container">
        <div class="row">
            <div class="fs-1 text-white d-flex flex-column justify-content-center align-items-center gap-3">
                <i class="fa-solid fa-skull-crossbones fa-fade" style="font-size: 12rem;"></i>
                @yield('message')
            </div>
        </div>
    </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    </body>
</html>

