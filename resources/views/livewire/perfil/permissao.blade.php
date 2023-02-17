<div>
    <div class="row">
        <div class="card bg-card-green">
            <div class="card-body text-white d-flex align-items-center justify-content-between ">
                <div class="d-flex align-items-center gap-3">
                    <i class="fa-solid fa-unlock" style="font-size: 2rem"></i>
                    <h3>Permissões do Perfil {{$perfil->nome}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        @foreach($permissao as $p)
        <div class="col-md-3 col-sm-1 mb-4" wire:key="registro-id-{{$p->id}}">
            <div class="card border-left-primary shadow h-100 ">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
                                {{$p->id}} - {{$p->nome}}
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-uppercase">{{$p->descricao}}</div>
                        </div>
                        <div class="col-auto">
                            @if(!\App\Models\User::existePermissao($p->id, $perfil->id))
                            <button
                                class="btn btn-outline-success mr-1 mb-1"
                                type="button"
                                wire:click="adicionar({{$p->id}})"
                            >
                            <i class="fa-solid fa-check"></i>
                        </button>
                            @else
                            <button
                                class="btn btn-outline-danger mr-1 mb-1"
                                type="button"
                                wire:click="remover({{$p->id}})"
                            >
                            <i class="fa-solid fa-trash"></i>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
