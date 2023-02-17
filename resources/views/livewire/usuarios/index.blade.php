<div>
    @forelse ($usuarios as $item)
    <div class="row mt-2">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between">
                    <div class="text-sicoob">
                        <h3>{{$item->name}}</h3>
                        <span>Email: {{$item->email}}</span>
                    </div>
                    <div class="text-sicoob">
                        @if(Auth::user()->can('delete-usuario', 'deletar_usuario'))
                        <button class="btn btn-sm btn-outline-success" wire:click='confirmDelete({{$item->id}})'>
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                        @endif
                        @if(Auth::user()->can('update-usuario', 'alterar_usuario'))
                        <button class="btn btn-sm btn-outline-primary" wire:click="$emit('editar_user', {{$item->id}})" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightEdit" aria-controls="offcanvasRightEdit">
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

</div>
