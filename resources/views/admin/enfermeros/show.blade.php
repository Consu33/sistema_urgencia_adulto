@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Enfermero/a: {{ $enfermero->nombre . ' ' . $enfermero->apellido }}</h1>
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
                                <input type="text" value="{{ $enfermero->nombre }}" name="nombre" class="form-control"
                                    required>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <label for="">Apellido</label>
                                <input type="text" value="{{ $enfermero->apellido }}" name="apellido"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <label for="">Rut</label>
                                <input type="text" value="{{ $enfermero->rut }}" name="rut" class="form-control"
                                    required>
                                @error('rut')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <label for="">Cargo</label> <b>*</b>
                                <select name="es_medico" id="" class="form-control">
                                    <option value="">-</option>
                                    <option value="enfermero">Enfermero</option>
                                    <option value="medico">Medico</option>
                                </select>
                                @error('es_medico')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <a href="{{ url('admin/enfermeros') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
