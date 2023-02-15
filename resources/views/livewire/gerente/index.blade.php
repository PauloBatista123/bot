<div>
    @forelse ($gerentes as $item)
    <div class="row mt-2">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between">
                    <div class="text-sicoob">
                        <h3>{{$item->nome}}</h3>
                        <span>Celular: {{$item->celular}}</span>
                        <span>PA {{$item->pa}}</span>
                    </div>
                    <div class="text-sicoob">
                        <button class="btn btn-sm btn-outline-success" wire:click='confirmDelete({{$item->id}})'>
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-primary" wire:click="$emit('editar', {{$item->id}})" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightEdit" aria-controls="offcanvasRightEdit">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </button>
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
