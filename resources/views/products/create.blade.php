@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    @if(isset($product))
                    <div class="card-header">Modificar Producto</div>
                    @else
                    <div class="card-header">Registrar nuevo Producto</div>
                    @endif
                    <div class="card-body">
                            @if(isset($product))
                            <form method="POST" action="#">
                                @method('PATCH')
                                @csrf
                            @else
                            <form method="POST" action="#">
                                @csrf
                            @endif
                                
                                                            
                                    <input type="hidden" name="ingredient" value="{{isset($ingredient)? $ingredient->id : ''}}" />
                                    
                                    <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">Nombre</label>
                                            <div class="col-md-4">
                                                <input id="name" type="text" name="name" class="form-control" value="{{isset($product)? $product->name : ''}}" required/>
                                            </div>
                                            <label for="price" class="col-md-2 col-form-label text-md-right">Precio</label>
                                            <div class="col-md-4">
                                                <input id="price" type="text" name="price" class="form-control" value="{{isset($product)? $product->price : ''}}" required/>
                                            </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        
                                        <label for="ingredient" class="col-md-2 col-form-label text-md-right">Ingrediente</label>
                                        <div class="col-md-10">                                         
                                            <select class="form-control" id="ingredient" name="ingredient">
                                            @foreach($ingredients as $ingredient)
                                                <option value="{{ $ingredient->id }}">{{ $ingredient->name }} "{{ $ingredient->mark }}"</option>
                                            @endforeach
                                            </select>                                           
                                        </div>                                       
                                    </div>
                                    <div class="form-group row" id="matias">
                                        <label for="used_weight" class="col-md-2 col-form-label text-md-right">Cantidad Utilizada</label>
                                        <div class="col-md-4">
                                            <input id="used_weight" type="number" name="used_weight" class="form-control" value="{{isset($product)? $product->name : ''}}" required/>
                                            <small id="ingredientHelp" class="form-text text-muted">Medida expresada en gr/ml segun corresponda.</small>
                                        </div>
                                        <div class="col-md-6 text-md-center custom-control custom-switch ">
                                            <input type="checkbox" class="custom-control-input" id="addIngredient" name="addIngredient">                                      
                                            <label class="custom-control-label" for="addIngredient">Agregar otro ingrediente</label>
                                        </div>  
                                    </div>                                  
                                    <div class="form-group row">
                                        <div class="col-md-5 offset-md-3">
                                            @if(isset($product))
                                            <input type="submit" class="btn btn-primary" value="Modificar Ingrediente">
                                            @else
                                            <input type="submit" class="btn btn-primary" value="Registrar Producto">
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


<script>

$("input[name=addIngredient]").click(function () {
    var d1 = document.getElementById('matias');
    d1.insertAdjacentHTML('afterend', '<div id="two">two</div>');
})

</script>
