<!DOCTYPE html>
<html>
<head>
    <title>Listado de productos</title>
</head>
<body>

<h1>Productos</h1>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<a href="{{ route('products.create') }}">Crear nuevo producto</a>

<table border="1" cellpadding="5">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product->nombre }}</td>
        <td>{{ $product->precio }} €</td>
        <td>{{ $product->stock }}</td>
        <td>
            <a href="{{ route('products.edit', $product->id) }}">Editar</a>

            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>
