@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('includes.message')

            <div class="card">
                <div class="card-header">Pedidos Pendientes</div>
                <br>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Ver</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                        <th scope="row"></th>
                        <td><a href="#" class="btn btn-success">Ver</a></td>
                        <td><a href="#" class="btn btn-warning">Editar</a></td>
                        <td>
                        <form action="#" method="POST">
                            @method('DELETE')
                            @csrf
                        
                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <input type="submit" class="btn btn-primary" value="Borrar">
                            </form>
                        </td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('footer-script')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script>

    $(document).ready(function() {
        $('#example').DataTable();
    } );

</script>
@endpush