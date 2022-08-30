<div>
    @include('livewire.crear')
    <table class="table table-sm table-bordered table-responsive table-striped mt-2">
        <thead class="bg-dark text-white-50 text-center">
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
                    <td class="col-sm-1">{{ $producto->id }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td class="col-sm-1">{{ $producto->cantidad }}</td>
                    <td class="col-sm-2">
                        <button class="btn btn-sm btn-warning" type="button" wire:click="editar({{ $producto->id }})">EDITAR</button> |
                        <button class="btn btn-sm btn-danger" type="button" wire:click="borrar({{ $producto->id }})">ELIMINAR</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
