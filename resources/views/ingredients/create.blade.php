@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    @if(isset($ingredient))
                    <div class="card-header">Modificar Ingrediente</div>
                    @else
                    <div class="card-header">Registrar nuevo Ingrediente</div>
                    @endif
                    <div class="card-body">
                            @if(isset($ingredient))
                            <form method="POST" action="{{ route('ingredient.update', ['id'=> $ingredient->id ]) }}">
                                @method('PATCH')
                                @csrf
                            @else
                            <form method="POST" action="{{ route('ingredient.store') }}">
                                @csrf
                            @endif
                                
                                                            
                                    <input type="hidden" name="ingredient" value="{{isset($ingredient)? $ingredient->id : ''}}" />
                                    
                                    <div class="form-group row">
                                            <label for="name" class="col-md-3 col-form-label text-md-right">Nombre</label>
                                            <div class="col-md-7">
                                                <input id="name" type="text" name="name" class="form-control" value="{{isset($ingredient)? $ingredient->name : ''}}" required/>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="mark" class="col-md-3 col-form-label text-md-right">Marca</label>
                                            <div class="col-md-7">
                                                <input id="mark" type="text" name="mark" class="form-control" value="{{isset($ingredient)? $ingredient->mark : ''}}" required/>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="measure" class="col-md-3 col-form-label text-md-right">Medida</label>
                                        <div class="col-md-7">
                                            <select class="form-control" id="measure" name="measure">
                                                <option value="kg">kilogramo</option>
                                                <option value="ml">litro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="weight" class="col-md-3 col-form-label text-md-right">Gramaje</label>
                                            <div class="col-md-7">
                                                <input id="weight" type="text" name="weight" class="form-control" value="{{isset($ingredient)? $ingredient->weight : ''}}" required/>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="cost" class="col-md-3 col-form-label text-md-right">Valor</label>
                                            <div class="col-md-7">
                                                <input id="cost" type="text" name="cost" class="form-control" value="{{isset($ingredient)? $ingredient->cost : ''}}" required/>
                                            </div>
                                    </div>                                  
                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-3">
                                            @if(isset($ingredient))
                                            <input type="submit" class="btn btn-primary" value="Modificar Ingrediente">
                                            @else
                                            <input type="submit" class="btn btn-primary" value="Agregar Ingrediente">
                                            @endif
                                        </div>
                                    </div>
                            </form>
                    </div>
            </div>

        </div>
    </div>
</div>

@endsection