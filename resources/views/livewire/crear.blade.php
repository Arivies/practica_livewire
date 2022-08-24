<form>
    <label for="">Descripcion</label>
    <input type="text" id="descripcion" wire:model="descripcion">
    <label for="">Cantidad</label>
    <input type="text" id="cantidad" wire:model="cantidad">
    <button wire:click.prevent="guardar()" type="button">GUARDAR</button>
</form>
