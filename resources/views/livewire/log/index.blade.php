<div>
    @forelse ($logs as $log)
    @if ($loop->index === 0)
    <div style="
        background: #49479d;
        box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
        color: white;
    " class="alert text-center rounded shadow-lg" role="alert">
        <i class="fa-regular fa-bell fa-2xl fa-bell fa-shake"></i>
        <span class="fs-4 fw-bold">{{$log->mensagem}}</span>
        <hr>
        <span class="fs-5">{{\Carbon\Carbon::parse($log->created_at)->format('d/m/Y H:i')}}</span>
        <p class="mb-0">BOT: {{$log->bot}}</p>
    </div>
    @else
    <div style="
       background: #49479d;
       color: white;
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

    {{$logs->links()}}
</div>
