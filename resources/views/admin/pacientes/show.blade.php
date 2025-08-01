@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Paciente: {{ $paciente->nombre . ' ' . $paciente->apellido }}</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos registrados</h3>
                    <div class="card-tools">

                    </div>
                </div>
                <div class="card-body" style="display: block;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <label for="">Nombre</label>
                                <p>{{ $paciente->nombre }}</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <label for="">Apellido</label>
                                <p>{{ $paciente->apellido }}</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <label for="">Rut</label>
                                <p>{{  $paciente->rut  }}</p>
                            </div>
                        </div>
                    </div>                    
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <a href="{{ url('admin/pacientes') }}" class="btn btn-secondary cancel-btn">
                                    <i class="bi bi-arrow-left"></i> Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
