<div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInputcpf" wire:model.lazy='cpf' placeholder="12345678999">
        <label for="floatingInputcpf">CPF</label>
      </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" wire:model.defer='nome'>
        <label for="floatingInput">Nome</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Password" wire:model.defer='celular'>
        <label for="floatingPassword">Celular</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Password" wire:model.defer='pa'>
        <label for="floatingPassword">PA</label>
      </div>

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
