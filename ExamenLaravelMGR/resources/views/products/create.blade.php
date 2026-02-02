<!DOCTYPE html>
<html>
<head>
    <title>Crear producto</title>
</head>
<body>

<h1>Crear producto</h1>

@if($errors->any())
    <ul style="color:red">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Precio:</label><br>
    <input type="number" name="precio" step="0.01" min="0.01" required><br><br>

    <label>Stock:</label><br>
    <input type="number" name="stock" min="0" required><br><br>

    <button type="submit">Guardar</button>
</form>

<a href="{{ route('products.index') }}">Volver</a>

</body>
</html>
