@extends('layouts.app')

@section('content')

<!-- AQUI VA TODO EL CONTENIDO DE LAS TABLAS Y LO QUE SE VA A CAMBIAR -->
<div class="container-fluid">
    <p class="text-muted fs-5" >Consulta el registro de usuarios</p>
    <div class="mt-5">
        <div class="col">      
            <div class="d-md-block d-grid text-end buttons-section">
                <button class="btn btn-primary fs-5 text-start border rounded-3 px-4 py-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#static-modal">
                    <i class="fa-solid fa-user-plus me-2"></i>
                        Añadir nuevo usuario
                </button>
            </div>
            
            <div class="card my-3 rounded-3 ">
                <div class="card-body">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="table_users_wrapper">
                        {{-- TODAS LAS TABLAS LLEVAN EL id TABLA --}}
                        <table class="table" id="tabla">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Fecha de registro</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="align-middle">
                                    <td>Carlos Perez Garcia</td>
                                    <td>Carlos@gmail.com</td>
                                    <td>12/12/2021</td>
                                    <td class="text-center">
                                        <div>
                                            <button class="btn btn-warning btn-sm">Editar</button>
                                            <button class="btn btn-danger btn-sm">Eliminar</button>
                                        </div>
                                    </td>

                                </tr>
                                <td>Cesar Zavala Lopez</td>
                                <td>cesar@gmail.com</td>
                                <td>12/12/2021</td>
                                <td class="text-center">
                                    <div>
                                        <button class="btn btn-warning btn-sm">Editar</button>
                                        <button class="btn btn-danger btn-sm">Eliminar</button>
                                    </div>
                                </td>
                                

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- AQUI TERMINA TODO EL CONTENIDO DE LAS TABLAS Y LO QUE SE VA A CAMBIAR -->



@endsection
