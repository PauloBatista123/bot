<div>

    @livewire('servico.contador', key('servico.contador'))
    @forelse ($servicos as $servico)
    <div style="
        background: linear-gradient(90deg, rgba(0,94,98,1) 0%, rgba(0,94,98,1) 40%, rgba(0,94,98,1) 100%);
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        color: white;
    " class="alert text-center rounded shadow-lg p-2 mb-2" role="alert">
        <p class="fs-4 fw-bold">{{$servico->mensagem}}</p>
        <hr>
        <span class="fs-5">{{\Carbon\Carbon::parse($servico->created_at)->format('d/m/Y H:i')}}</span>
    </div>
    @empty
        <div class="row hw-100 m-auto">
            <div
            style="
                background: linear-gradient(90deg, rgba(4,78,89,1) 0%, rgba(4,78,89,1) 40%, rgba(4,78,89,1) 100%);
                box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
                color: white;
            "
            class="alert d-flex align-items-center justify-content-center" role="alert">
                <div class="">
                    <h2>Não existem serviços...</h2>
                </div>
                </div>
        </div>
    @endforelse

    {{$servicos->links()}}
</div>
