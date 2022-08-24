<div>
        @include('livewire.crear')
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>DESCRIPCION</th>
                <th>CANTIDAD</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>
                        <button type="button" wire:click="editar({{ $producto->id }})">EDITAR</button> |
                        <button type="button" wire:click="borrar({{ $producto->id }})">ELIMINAR</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
