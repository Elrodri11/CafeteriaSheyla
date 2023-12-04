@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <p class="text-muted fs-5" >Consulta el registro de alumnos</p>
    <div class="mt-5">
        <div class="col">      
            <div class="d-md-block d-grid text-end buttons-section">
                <button class="btn btn-primary fs-5 text-start border rounded-3 px-4 py-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#static-modal">
                    <i class="fa-solid fa-user-plus me-2"></i>
                        Añadir nuevo alumno
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
                                    <th>Matrícula</th>
                                    <th>UUID</th>
                                    <th>Fecha de registro</th>
                                    <th>Acciones</th>
                                </tr>
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
