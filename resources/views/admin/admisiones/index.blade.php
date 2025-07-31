@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Usuarios Adminisión Urgencia Adulto</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-10">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Usuarios Registrados</h3>
                    <div class="card-tools">
                        <a href="{{ url('admin/admisiones/create') }}" class="btn btn-primary">
                            Registrar Nuevo Usuario
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
                                <td style="text-align:center">Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 1; ?>
                            @foreach ($admisiones as $admision)
                                <tr>
                                    <td style="text-align:center">{{ $contador++ }}</td>
                                    <td style="text-align:center">{{ $admision->name }}</td>
                                    <td style="text-align:center">{{ $admision->apellido }}</td>                                    
                                    <td style="text-align:center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{url('admin/admisiones/'.$admision->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                            <a href="{{url('admin/admisiones/'.$admision->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                            <a href="{{url('admin/admisiones/'.$admision->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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
                                    info: "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                                    infoEmpty: "Mostrando 0 a 0 de 0 Usuarios",
                                    infoFiltered: "(Filtrado de _MAX_ total Usuarios)",
                                    lengthMenu: "Mostrar _MENU_ Usuarios",
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
