@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Listado de Pacientes</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-10">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Pacientes Registrados</h3>
                    <div class="card-tools">
                        <a href="{{ url('admin/pacientes/create') }}" class="btn btn-primary access-btn"><i class="bi bi-plus"></i>
                            Registrar Nuevo Paciente
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-striped table-sm display nowrap compact" style="width:100%">
                        <thead style="background-color: #c0c0c0">
                            <tr>
                                <td style="text-align:center">Número</td>
                                <td style="text-align:center">Nombre</td>
                                <td style="text-align:center">Apellido</td>
                                <td style="text-align:center">Rut</td>
                                <td style="text-align:center">Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 1; ?>
                            @foreach ($pacientes as $paciente)
                                <tr>
                                    <td style="text-align:center">{{ $contador++ }}</td>
                                    <td style="text-align:center">{{ $paciente->nombre }}</td>
                                    <td style="text-align:center">{{ $paciente->apellido }}</td>  
                                    <td style="text-align:center">{{ $paciente->rut }}</td>                                   
                                    <td style="text-align:center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{url('admin/pacientes/'.$paciente->id)}}" type="button" class="btn btn-info btn-sm action-btn" data-bs-toggle="tooltip" title="Ver detalles"><i class="bi bi-eye"></i></a>
                                            <a href="{{url('admin/pacientes/'.$paciente->id.'/edit')}}" type="button" class="btn btn-success btn-sm action-btn" data-bs-toggle="tooltip" title="Editar información"><i class="bi bi-pencil"></i></a>
                                            <a href="{{url('admin/pacientes/'.$paciente->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm action-btn" data-bs-toggle="tooltip" title="Eliminar registros"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function() {
                            let table = $('#example1').DataTable({
                                pageLength: 10,
                                responsive: true,
                                autoWidth: false,
                                dom: '<"row mb-2"<"col-sm-6"B><"col-sm-6"f>>' + '<"row"<"col-sm-12"tr>>' + '<"row mt-2"<"col-sm-5"i><"col-sm-7"p>>',
                                language: {
                                    emptyTable: "No hay información",
                                    info: "Mostrando _START_ a _END_ de _TOTAL_ Pacientes",
                                    infoEmpty: "Mostrando 0 a 0 de 0 Pacientes",
                                    infoFiltered: "(Filtrado de _MAX_ total Pacientes)",
                                    lengthMenu: "Mostrar _MENU_ Pacientes",
                                    loadingRecords: "Cargando...",
                                    processing: "Procesando...",
                                    search: "Buscador:",
                                    zeroRecords: "Sin resultados encontrados",
                                    paginate: {
                                        first: "Primero",
                                        last: "Último",
                                        next: "Siguiente",
                                        previous: "Anterior"
                                    },
                                    buttons: {
                                        copy: "Copiar",
                                        colvis: "Visor de columnas",
                                        print: "Imprimir"
                                    }
                                },
                                buttons: [{
                                        extend: 'collection',
                                        text: 'Reportes',
                                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                                    },
                                    {
                                        extend: 'colvis',
                                        text: 'Visor de columnas'
                                    }
                                ]
                            });

                            table.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
