<?php
// app/Http/Controllers/ProductoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function formulario()
    {
        return view('producto');
    }

    public function guardar(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'producto' => 'required',
            'precio' => 'required',
            'codigo_barras' => 'required',
        ]);

        // Crear un nuevo objeto del modelo Producto
        $nuevoProducto = new Producto([
            'nombre' => $request->input('producto'),
            'precio' => $request->input('precio'),
            'codigo_barras' => $request->input('codigo_barras'),
        ]);

        // Guardar el nuevo producto en la base de datos
        $nuevoProducto->save();

        // Puedes redirigir a alguna página después de insertar el producto
        return redirect('nuevo-producto');
    }
}
