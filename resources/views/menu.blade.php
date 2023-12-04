@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <p class="text-muted fs-5">Consulta y personaliza el menú</p>
    <div class="mt-5">
        <div class="col">      
            <div class="d-md-block d-grid text-end buttons-section">
                <button class="btn btn-primary fs-5 text-start border rounded-3 px-4 py-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#static-modal">
                    <i class="fa-solid fa-user-plus me-2"></i>
                        Añadir nuevo item al menú
                </button>
            </div>

            <!-- Modal para agregar nuevo item -->
            <div class="modal fade" id="nuevoItemModal" tabindex="-1" aria-labelledby="nuevoItemModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="nuevoItemModalLabel">Añadir Nuevo Item al Menú</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @include('nuevo-item')
                        </div>
                    </div>
                </div>
            </div>






            {{-- menu de comida de antojitos mexicanos para una cafeteria --}}
            
            <div class="card my-3 rounded-3 ">
                <div class="card-body">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="table_users_wrapper">
                        {{-- TODAS LAS TABLAS LLEVAN EL id TABLA --}}
                        <table class="table" id="tabla">
                            <thead>
                                <tr>
                                    {{-- imagen --}}
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>

                                <tbody>
                                    <tr class="align-middle">
                                        {{-- imagen generica --}}
                                        <td><img src="{{ asset('img/antojitos.jpg') }}" alt="chilaquiles" width="45" height="45" class="rounded-circle"></td>
                                        <td>Chilaquiles</td>
                                        <td>Chilaquiles con pollo</td>
                                        <td>150 gr</td>
                                        <td>$30</td>
                                        <td class="text-center">
                                            <div>
                                                <button class="btn btn-warning btn-sm">Editar</button>
                                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        {{-- imagen generica --}}
                                        <td><img src="{{ asset('img/antojitos.jpg') }}" alt="chilaquiles" width="45" height="45" class="rounded-circle"></td>
                                        <td>Flautas</td>
                                        <td>Flautas de pollo</td>
                                        <td>3 piezas</td>
                                        <td>$30</td>
                                        <td class="text-center">
                                            <div>
                                                <button class="btn btn-warning btn-sm">Editar</button>
                                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        {{-- imagen generica --}}
                                        <td><img src="{{ asset('img/antojitos.jpg') }}" alt="chilaquiles" width="45" height="45" class="rounded-circle"></td>
                                        <td>Tacos</td>
                                        <td>Tacos de pastor</td>
                                        <td>3 piezas</td>
                                        <td>$30</td>
                                        <td class="text-center">
                                            <div>
                                                <button class="btn btn-warning btn-sm">Editar</button>
                                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        {{-- imagen generica --}}
                                        <td><img src="{{ asset('img/antojitos.jpg') }}" alt="chilaquiles" width="45" height="45" class="rounded-circle"></td>
                                        <td>Enchiladas</td>
                                        <td>Enchiladas verdes</td>
                                        <td>3 piezas</td>
                                        <td>$30</td>
                                        <td class="text-center">
                                            <div>
                                                <button class="btn btn-warning btn-sm">Editar</button>
                                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="align-middle">
                                        {{-- imagen generica --}}
                                        <td><img src="{{ asset('img/antojitos.jpg') }}" alt="chilaquiles" width="45" height="45" class="rounded-circle"></td>
                                        <td>Quesadillas</td>
                                        <td>Quesadillas de queso</td>
                                        <td>3 piezas</td>
                                        <td>$30</td>
                                        <td class="text-center">
                                            <div>
                                                <button class="btn btn-warning btn-sm">Editar</button>
                                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>

                                    


                                </tbody>

                                
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- AQUI TERMINA TODO EL CONTENIDO DE LAS TABLAS Y LO QUE SE VA A CAMBIAR -->



@endsection
