<!DOCTYPE html>
<html>
<head>
    <title>Detalle del producto</title>
</head>
<body>

<h1>Detalle del producto</h1>

<p><strong>Nombre:</strong> {{ $product->nombre }}</p>
<p><strong>Precio:</strong> {{ $product->precio }} €</p>
<p><strong>Stock:</strong> {{ $product->stock }}</p>

<a href="{{ route('products.edit', $product->id) }}">Editar</a>
<a href="{{ route('products.index') }}">Volver al listado</a>

<form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
</form>

</body>
</html>
