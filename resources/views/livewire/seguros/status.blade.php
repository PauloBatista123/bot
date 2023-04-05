<div>
    <div class="d-flex flex-column justify-content-center align-items-center">
        @if($this->status === 'active')
        <img src="{{asset('imgs/success_obo.gif')}}" alt="" class="img-robo">
        <p class="text-white text-center" style="font-size: 1.5rem;">Estou trabalhando na velocidade da luz...</p>
        @elseif($this->status === 'inactive')
        <img src="{{asset('imgs/obo.gif')}}" alt="" class="img-robo">
        <p class="text-white text-center" style="font-size: 1.5rem;">Recuperando as forças...</p>
        @elseif($this->status === 'error')
        <img src="{{asset('imgs/obo_error.gif')}}" alt="" class="img-robo">
        <p class="text-white text-center" style="font-size: 1.5rem;">Ahhh!! Erro... Chamando socorro...</p>
        @endif
    </div>
</div>
