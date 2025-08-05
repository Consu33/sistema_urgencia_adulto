@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Edición de Usuario: {{ $usuario->name . ' ' . $usuario->apellido }}</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Edita los datos</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <div class="card-body" style="display: block;">
                    <form action="{{ URL('/admin/usuarios', $usuario->id) }}" method="POST" data-spinner-color="success">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Nombre</label>
                                    <input type="text" value="{{ $usuario->name }}" name="name" class="form-control"
                                        required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Apellido</label> 
                                    <input type="text" value="{{ $usuario->apellido }}" name="apellido" class="form-control"
                                        required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Rut</label>
                                    <input type="text" value="{{ $usuario->rut }}" name="rut" class="form-control" required>
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
                                    <label for="">Contraseña</label> 
                                    <input type="password" name="password" class="form-control">
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
                                    <label for="">Verificación Contraseña</label>
                                    <input type="password" name="password_confirmation" class="form-control" >
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
                                    <a href="{{ url('admin/usuarios') }}" class="btn btn-secondary cancel-btn">Cancelar</a>
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-pencil-fill"></i> Actualizar Usuario
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
