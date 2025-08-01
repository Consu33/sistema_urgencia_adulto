@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Usuario: {{ $admision->name . ' ' . $admision->apellido }}</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Seguro que deseas eliminar este re</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <div class="card-body" style="display: block;">
                    <form action="{{ url('admin/admisiones/'. $admision->id) }}" method="POST" data-spinner-color="danger">
                        @csrf
                        @method('DELETE')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Nombre</label>
                                    <input type="text" value="{{ $admision->name }}" name="name" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Apellido</label>
                                    <input type="text" value="{{ $admision->apellido }}" name="apellido" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <label for="">Rut</label>
                                    <input type="text" value="{{ $admision->rut }}" name="rut" class="form-control" disabled>
                                    @error('rut')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <a href="{{ url('admin/admisiones') }}" class="btn btn-secondary cancel-btn">Cancelar</a>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash"></i> Eliminar Usuario
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
