<div wire:key='modal-cadastrar'>
        {{-- Form modal cadastrar --}}
    <form>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                    <input
                        type="text"
                        class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                        id="exampleFormControlInput1"
                        placeholder="Administrator"
                        wire:model.defer='name'

                    >
                    @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{$errors->first('name')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email:</label>
                    <input
                        type="email"
                        class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}"
                        id="exampleFormControlInput1"
                        placeholder="user@dominio.com"
                        wire:model.defer='email'
                    >
                    @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{$errors->first('email')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Senha:</label>
                    <input
                        type="password"
                        class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}"
                        id="exampleFormControlInput1"
                        placeholder="*************"
                        wire:model.defer='password'
                    >
                    @if($errors->has('password'))
                    <div class="invalid-feedback">
                        {{$errors->first('password')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Confirme a Senha:</label>
                    <input
                        type="password"
                        class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}"
                        id="exampleFormControlInput1"
                        placeholder="************"
                        wire:model.defer='password_confirmation'
                    >
                    @if($errors->has('password_confirmation'))
                    <div class="invalid-feedback">
                        {{$errors->first('password_confirmation')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Perfil de acesso:</label>
                    <select class="form-select form-select mb-3 {{$errors->has('perfil') ? 'is-invalid' : ''}}" aria-label=".form-select-lg" wire:model.defer='perfil'>
                        <option value="" selected>Selecione</option>
                        @foreach($perfis as $key => $p)
                            <option value="{{$p->id}}">{{$p->nome}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('perfil'))
                    <div class="invalid-feedback">
                        {{$errors->first('perfil')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </form>
    {{-- Form modal cadastrar --}}
    <div class="position-absolute bottom-0 p-3" style="width: -webkit-fill-available;">
        <div class="d-grid gap-2">
            <div wire:loading>
                <div class="d-flex justify-content-center">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>

            <button class="btn btn-success" type="button" wire:click='salvar' wire:loading.attr='disabled'>Salvar</button>
            <button class="btn btn-secondary" type="button" wire:click='resetar'>Cancelar</button>
        </div>
        </div>

</div>
