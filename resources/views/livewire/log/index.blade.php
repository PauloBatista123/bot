<div>
    @forelse ($this->logs as $log)
    @if ($loop->index === 0)
    <div style="
        background: linear-gradient(90deg, rgba(4,78,89,1) 0%, rgba(4,78,89,1) 40%, rgba(4,78,89,1) 100%);
        box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
        color: white;
    " class="alert text-center rounded shadow-lg p-3 mb-5" role="alert">
        <div class="d-flex flex-row justify-content-center align-items-center">
            <i class="fa-regular fa-bell fa-2xl fa-bell fa-shake"></i>
            <h2 class="alert-heading p-2">Atenção!</h2>
        </div>
        <hr>
        <p class="fs-2 fw-bold">{{$log->mensagem}}</p>
        <hr>
        <span class="fs-5">{{\Carbon\Carbon::parse($log->created_at)->format('d/m/Y H:i')}}</span>
        <p class="mb-0">BOT: {{$log->bot}}</p>
    </div>
    @else
    <div style="
       background: #005E62;
       color: #F1F1E6;
    " class="alert text-center" role="alert">
        <p class="fs-3 font-weight-light">{{$log->mensagem}}</p>
        <hr>
        <span class="text-sm">{{\Carbon\Carbon::parse($log->created_at)->format('d/m/Y H:i')}}</span>
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
</div>
