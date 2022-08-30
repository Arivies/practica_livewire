<form class="d-flex gap-2">
    <label>Descripcion</label>
    <input class="form-control form-control-sm" type="text" id="descripcion" wire:model="descripcion">
    <label>Cantidad</label>
    <input class="form-control form-control-sm" type="text" id="cantidad" wire:model="cantidad">
    <button class="btn btn-sm btn-primary" wire:click.prevent="guardar()" type="button">GUARDAR</button>
</form>
