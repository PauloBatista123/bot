@extends('admin.Layouts.dashboard')

@section('content')

    <div class="row">
        <div class="card bg-card-green">
            <div class="card-body text-white d-flex align-items-center justify-content-between ">
                <div class="d-flex align-items-center gap-3">
                    <i class="fa-solid fa-users" style="font-size: 2rem"></i>
                    <h3>Controle de Usuários</h3>
                </div>
                <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-plus"></i> Adiconar</button>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        @livewire('usuarios.index', key('usuarios.index'))
    </div>


    @if(Auth::user()->can('create-usuario', 'criar_usuarios'))
    <div class="offcanvas offcanvas-end" data-bs-backdrop="static"  tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Adicionar Novo Usuário</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            @livewire('usuarios.adicionar', 'usuarios.adicionar')
        </div>
    </div>
    @endif

    @if(Auth::user()->can('update-usuario', 'alterar_usuarios'))
    <div class="offcanvas offcanvas-end" data-bs-backdrop="static"  tabindex="-1" id="offcanvasRightEdit" aria-labelledby="offcanvasRightEditLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightEdit">Editar Usuário</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            @livewire('usuarios.editar', 'usuarios.editar')
        </div>
    </div>
    @endif

    @push('scripts')
    <script>
        let bsOffcanvas = new bootstrap.Offcanvas('#offcanvasRightEdit');

        window.addEventListener('close-modal-editar', event => {
            bsOffcanvas.hide();
        })
    </script>
    @endpush

@endsection
