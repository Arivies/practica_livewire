<div>
    {{-- Stop trying to control. --}}
    <label>Busqueda
        <input  type="search" wire:model="search">
    </label>
    {{ $users->count() }}

    <button wire:click="agregar">Agregar nuevo usuario</button>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>


</div>
