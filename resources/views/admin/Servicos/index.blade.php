@extends('admin.Layouts.dashboard')

@section('content')

    <div class="row">
        @if(Auth::user()->can('view-servico', 'robo_pld'))
        <div class="col-6">
            <a href="{{route('servico.pld')}}" class="card-hover">
                <div class="card">
                    <div class="card-header text-center">
                        <i class="fa-solid fa-robot"></i>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center flex-column text-sicoob">
                            <h3>Robô PLD/FT automáticas</h3>
                            <span>Acompanhamento da rotina</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endif
        @if(Auth::user()->can('view-servico', 'robo_seguros'))
        <div class="col-6">
            <a href="{{route('servico.seguros')}}" class="card-hover">
                <div class="card">
                    <div class="card-header text-center">
                        <i class="fa-solid fa-robot"></i>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center flex-column text-sicoob">
                            <h3>Robô Renovação de Seguros</h3>
                            <span>Acompanhamento da rotina</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endif
    </div>

@endsection
