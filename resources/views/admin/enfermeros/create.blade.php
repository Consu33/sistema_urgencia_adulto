@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Registro de enfermeros Urgencia Adulto</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Completar los datos</h3>
                    <div class="card-tools">

                    </div>
                </div>
                <div class="card-body" style="display: block;">
                    <form action="{{ URL('/admin/enfermeros/create') }}" method="POST" data-spinner-color="primary">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Nombre</label> <b>*</b>
                                    <input type="text" value="{{ old('nombre') }}" name="nombre" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Apellido</label> <b>*</b>
                                    <input type="text" value="{{ old('apellido') }}" name="apellido" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Rut</label> <b>*</b>
                                    <input type="text" value="{{ old('rut') }}" name="rut" class="form-control" required>
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
                                    <label for="">Contraseña</label> <b>*</b>
                                    <input type="password" name="password" class="form-control" required>
                                    @error('password')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Verificación Contraseña</label> <b>*</b>
                                    <input type="password" name="password_confirmation" class="form-control" required>
                                    @error('password_confirmation')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <a href="{{ url('admin/enfermeros') }}" class="btn btn-secondary cancel-btn">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">
                                         <i class="bi bi-floppy"></i> Guardar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
