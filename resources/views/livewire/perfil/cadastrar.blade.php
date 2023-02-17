<div>
    <div class="form-floating mb-3">
        <input
            type="text"
            class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}"
            id="exampleFormControlnome"
            placeholder="Administrator"
            wire:model.defer='nome'
        >
        <label for="exampleFormControlnome">Nome</label>
        @if($errors->has('nome'))
        <div class="invalid-feedback">
            {{$errors->first('nome')}}
        </div>
        @endif
      </div>
      <div class="form-floating mb-3">
        <input
            type="text"
            class="form-control {{$errors->has('descricao') ? 'is-invalid' : ''}}"
            id="exampleFormControlnome"
            placeholder="Perfil de administrador..."
            wire:model.defer='descricao'
        >
        <label for="exampleFormControlnome">Descrição</label>
        @if($errors->has('descricao'))
        <div class="invalid-feedback">
            {{$errors->first('descricao')}}
        </div>
        @endif
      </div>
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
