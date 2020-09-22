@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('includes.message')

            <div >
                <a href="{{ route('ingredient.create') }}" class="btn btn-primary">Agregar Ingrediente</a>
            </div>
            <br>
            <div class="card">
                <table id="ingredient" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Medida/Gramaje</th>
                            <th>Valor</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ingredients as $ingredient)
                        <tr>
                            <td>{{ $ingredient->name }}</td>
                            <td>{{ $ingredient->mark }}</td>
                            <td>{{ $ingredient->weight}} {{ $ingredient->measure }}</td>
                            <td>${{ $ingredient->cost }}</td>
                            <td>
                                <a href="{{ route('ingredient.edit', ['id'=> $ingredient->id]) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('ingredient.delete', ['id'=> $ingredient->id]) }}" id="delete" method="POST">
                                @method('DELETE')
                                @csrf                                               

                                <input type="submit" class="btn btn-danger" value="Borrar">
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            
            </div>
        </div>
    </div>
    <br>
    <a href="{{ route('home') }}" class="btn btn btn-outline-dark btn-sm">Volver</a>
</div>
@endsection

@push('footer-script')

<script>

    $(document).ready(function() {
        $('#ingredient').DataTable();
    } );

</script>
@endpush