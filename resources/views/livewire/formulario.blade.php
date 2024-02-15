<div>
    <input wire:model.live="busqueda">

    <table>
        <thead>
            <th>Etiqueta</th>
        </thead>
        <tbody>
            @foreach ($etiquetas as $etiqueta)
                <tr>
                    <td>{{ $etiqueta->etiqueta }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <form wire:submit="insertar">
        <input type="text" id="campo" wire:model="campo">
        <button type="submit">Añadir</button>
    </form>
</div>
