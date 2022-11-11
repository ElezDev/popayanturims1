
@extends('adminlte::page')

@section('title', 'Tipos de Servicios')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    @endsection

@section('content')
<div class="card">

    <div >
        <a href="{{ route('tiposervicios.create') }}" class="btn btn-primary btn-sm "
            data-placement="left">
            {{ __('Nuevo') }}
        </a>

    <div class="card-body">



<table id="tuser" class="table table-striped">
    <thead class="bg bg-success">
        <tr>
            <th>No</th>

            <th>Nombre</th>

            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($TipoSerArray as $tiposervicio)
            <tr>
                <td>{{ $tiposervicio['id'] }}</td>
                <td>{{ $tiposervicio['nombre'] }}</td>

                <td>
                    <form action="{{ route('tiposervicios.destroy',$tiposervicio['id']) }}" method="POST">
                        <a class="btn btn-sm btn-primary " href="{{ route('tiposervicios.show',$tiposervicio['id']) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                        <a class="btn btn-sm btn-success" href="{{ route('tiposervicios.edit',$tiposervicio['id']) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
</tbody>

</table>
</div>
</div>

@endsection

@section('js')

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
<script>  $('#tuser').DataTable({
responsive: true,
autoWidth:false,
"language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrado de _MAX_ total registros totales)",
            "search": 'Buscar regstro',
            "paginate": {
                'next':'sigiente',
                'previous':'Anterior'
            }
        }

});
</script>
@endsection

