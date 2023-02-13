<div>
    @forelse ($this->logs as $log)
    @if ($loop->index === 0)
    <div style="
        background: linear-gradient(90deg, rgba(3,64,77,1) 0%, rgba(2,77,92,1) 35%, rgba(2,56,68,1) 100%);
        color: white;
    " class="alert text-center rounded shadow-lg p-3 mb-5" role="alert">
        <div class="d-flex flex-row justify-content-center align-items-center">
            <i class="fa-regular fa-bell fa-2xl fa-bell fa-shake"></i>
            <h2 class="alert-heading p-2">Atenção!</h2>
        </div>
        <hr>
        <p class="fs-2 fw-bold">{{$log->mensagem}}</p>
        <hr>
        <span class="fs-4">{{\Carbon\Carbon::parse($log->created_at)->format('d/m/Y H:i')}}</span>
        <p class="mb-0">BOT: {{$log->bot}}</p>
    </div>
    @else
    <div style="
        background: linear-gradient(90deg, rgba(155,162,2,1) 0%, rgba(162,170,1,1) 40%, rgba(153,159,2,1) 100%);

        color: white;
    " class="alert text-center" role="alert">
        <div class="d-flex flex-row justify-content-center align-items-center">
            <i class="fa-regular fa-bell fa-2xl fa-bell fa-shake"></i>
            <h2 class="alert-heading p-2">Atenção!</h2>
        </div>
        <hr>
        <p class="fs-2 fw-bold">{{$log->mensagem}}</p>
        <hr>
        <span class="fs-4">{{\Carbon\Carbon::parse($log->created_at)->format('d/m/Y H:i')}}</span>
        <p class="mb-0">BOT: {{$log->bot}}</p>
    </div>
    @endif
    @empty
        <div class="row hw-100 m-auto">
            <div class="col-12">
                <div class="alert alert-primary d-flex align-items-center justify-content-center" role="alert">
                    <div class="">
                      <h2>Não existem logs...</h2>
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
