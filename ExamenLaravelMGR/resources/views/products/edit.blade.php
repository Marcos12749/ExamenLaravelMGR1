<!DOCTYPE html>
<html>
<head>
    <title>Editar producto</title>
</head>
<body>

<h1>Editar producto</h1>

@if($errors->any())
    <ul style="color:red">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="{{ $product->nombre }}" required><br><br>

    <label>Precio:</label><br>
    <input type="number" name="precio" step="0.01" min="0.01" value="{{ $product->precio }}" required><br><br>

    <label>Stock:</label><br>
    <input type="number" name="stock" min="0" value="{{ $product->stock }}" required><br><br>

    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('products.index') }}">Volver</a>

</body>
</html>
