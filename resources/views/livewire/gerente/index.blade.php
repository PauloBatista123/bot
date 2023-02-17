<div>
    <div class="collapse" id="collapseFiltro">
        <div class="row">
            <div class="col-md">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control input-filtro" id="floatingNome" placeholder="Nome" wire:model.lazy='filtro_nome'>
                    <label for="floatingPassword">Nome</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control input-filtro" id="floatingCelular" placeholder="Celular" wire:model.lazy='filtro_celular'>
                    <label for="floatingPassword">Celular</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control input-filtro" id="floatingPA" placeholder="PA" wire:model.lazy='filtro_pa'>
                    <label for="floatingPassword">PA</label>
                </div>
            </div>
            <div class="col-md text-end">
                <button class="btn btn-outline-warning" type="button" wire:click='resetar_filtro'><i class="fa-solid fa-filter-circle-xmark"></i> Limpar</button>
            </div>
        </div>
    </div>
    @forelse ($gerentes as $item)
    <div class="row mt-2">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between">
                    <div class="text-sicoob d-flex flex-column">
                        <h3>{{$item->nome}}</h3>
                        <span>Celular: {{$item->celular}}</span>
                        <span>PA {{$item->pa}}</span>
                    </div>
                    <div class="text-sicoob">
                        @if(Auth::user()->can('delete-gerente', 'deletar_gerente'))
                        <button class="btn btn-sm btn-outline-success" wire:click='confirmDelete({{$item->id}})'>
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                        @endif
                        @if(Auth::user()->can('update-gerente', 'alterar_gerente'))
                        <button class="btn btn-sm btn-outline-primary" wire:click="$emit('editar', {{$item->id}})" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightEdit" aria-controls="offcanvasRightEdit">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
   </div>
    @empty
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between">
                    <h2>Não existem registros...</h2>
                </div>
            </div>
        </div>
   </div>
    @endforelse
   {{$gerentes->links()}}
</div>
