<div>
    <div class="d-flex flex-column justify-content-center align-items-center">
        @if($this->status === 'active')
        <img src="{{asset('imgs/success_obo.gif')}}" alt="" width="120" height="120">
        <p class="text-white text-center" style="font-size: 9px;">Estou trabalhando na velocidade da luz...</p>
        @elseif($this->status === 'inactive')
        <img src="{{asset('imgs/obo.gif')}}" alt="" width="120" height="120">
        <p class="text-white text-center" style="font-size: 9px;">Recuperando as forças...</p>
        @elseif($this->status === 'error')
        <img src="{{asset('imgs/obo_error.gif')}}" alt="" width="120" height="120">
        <p class="text-white text-center" style="font-size: 9px;">Ahhh!! Erro... Chamando socorro...</p>
        @endif
    </div>
</div>
