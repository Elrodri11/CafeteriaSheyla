
@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="card">

                {{-- alinear card header verticalmente --}}
                <div class="card-header d-flex align-middle">
                    <button class="btn btn-primary mb-2">Categoría 1</button>
                    <button class="btn btn-primary mb-2">Categoría 2</button>
                    <button class="btn btn-primary mb-2">Categoría 3</button>
                    <button class="btn btn-primary mb-2">Categoría 4</button>
                    <button class="btn btn-primary mb-2">Categoría 5</button>
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Producto 1</h5>
                                    <p class="card-text">Descripción del producto 1</p>
                                    <p class="card-text"><strong>Precio: $10.00</strong></p>
                                    <p class="card-text"><strong>Cantidad disponible: 5</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Producto 2</h5>
                                    <p class="card-text">Descripción del producto 2</p>
                                    <p class="card-text"><strong>Precio: $20.00</strong></p>
                                    <p class="card-text"><strong>Cantidad disponible: 10</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Producto 3</h5>
                                    <p class="card-text">Descripción del producto 3</p>
                                    <p class="card-text"><strong>Precio: $30.00</strong></p>
                                    <p class="card-text"><strong>Cantidad disponible: 15</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Producto 4</h5>
                                    <p class="card-text">Descripción del producto 4</p>
                                    <p class="card-text"><strong>Precio: $40.00</strong></p>
                                    <p class="card-text"><strong>Cantidad disponible: 20</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Producto 5</h5>
                                    <p class="card-text">Descripción del producto 5</p>
                                    <p class="card-text"><strong>Precio: $50.00</strong></p>
                                    <p class="card-text"><strong>Cantidad disponible: 25</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
