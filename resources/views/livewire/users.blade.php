<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-1"><label>Busqueda</label></div>
            <div class="col-sm-8">
                    <input class="form-control form-control-sm" type="search" wire:model="search" />
            </div>
            <div class="col-sm-1"><label>{{ $users->count() }}</label></div>
            <div class="col-sm-2">
                    <button class="btn btn-sm btn-success" wire:click="agregar">Agregar nuevo usuario</button>
            </div>
        </div>
    </div>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
