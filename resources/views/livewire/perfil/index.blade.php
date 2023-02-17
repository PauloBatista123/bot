<div>
    @forelse ($registros as $item)
    <div class="row mt-2">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between">
                    <div class="text-sicoob">
                        <h3>{{$item->nome}}</h3>
                        <span>descrição: {{$item->descricao}}</span>
                    </div>
                    <div class="text-sicoob">
                        @if(Auth::user()->can('delete-usuario', 'deletar_usuario'))
                        <button class="btn btn-sm btn-outline-danger" wire:click='confirmDelete({{$item->id}})'>
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                        @endif
                        @if(Auth::user()->can('update-usuario', 'alterar_usuario'))
                        <a class="btn btn-sm btn-outline-success" href="{{ route('perfil.permissao', $item->id) }}" ><i class="fas fa-user-check"></i></a>
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
