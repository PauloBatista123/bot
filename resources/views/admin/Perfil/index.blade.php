@extends('admin.Layouts.dashboard')

@section('content')

    <div class="row">
        <div class="card bg-card-green">
            <div class="card-body text-white d-flex align-items-center justify-content-between ">
                <div class="d-flex align-items-center gap-3">
                    <i class="fa-solid fa-users" style="font-size: 2rem"></i>
                    <h3>Perfil de Acesso</h3>
                </div>
                <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-plus"></i> Adiconar</button>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        @livewire('perfil.index', key('perfil.index'))
    </div>


    <div class="offcanvas offcanvas-end" data-bs-backdrop="static"  tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Adicionar Novo Perfil</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            @livewire('perfil.cadastrar', 'perfil.cadastrar')
        </div>
    </div>

    @push('scripts')
    <script>
        let bsOffcanvas = new bootstrap.Offcanvas('#offcanvasRightEdit');

        window.addEventListener('close-modal-editar', event => {
            bsOffcanvas.hide();
        })
    </script>
    @endpush

@endsection
