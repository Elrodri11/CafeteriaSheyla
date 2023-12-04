@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registrar Nuevo Producto</h2>

    <form action="{{ route('guardar.producto') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="producto" class="form-label">Nombre del Producto</label>
            <input type="text" class="form-control" id="producto" name="producto" required>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" required>
        </div>

        <div class="mb-3">
            <label for="codigo_barras" class="form-label">Código de Barras</label>
            <input type="text" class="form-control" id="codigo_barras" name="codigo_barras" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Producto</button>
    </form>
</div>
@endsection
