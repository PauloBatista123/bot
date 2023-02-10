<div wire:poll.1s>
    @forelse ($this->logs as $log)
    <div class="row my-2">
        <div class="card">
            <div class="card-body d-flex justify-content-start flex-column">
                {{$log->bot}}
                {{$log->mensagem}}
                <small>Criado em {{\Carbon\Carbon::parse($log->created_at)->format('d/m/Y H:i:s')}}</small>
            </div>
        </div>
    </div>
    @empty
        <div class="row">
            <div class="col-12">
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                    <div>
                      Não existem logs...
                    </div>
                  </div>
            </div>
        </div>
    @endforelse

    <script>
        window.addEventListener('dispatch-sound', event => {
            alert('teste');
            var audio = new Audio("{{asset('alert.mp3')}}");
            audio.play();
        });
    </script>
</div>
