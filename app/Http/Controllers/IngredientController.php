<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;

class IngredientController extends Controller
{
    public function list(){
        $ingredients = Ingredient::all();

        return view('ingredients.list',[
            'ingredients' => $ingredients
        ]);
    }

    public function create(){
        

        return view('ingredients.create');
    }

    public function store(Request $request){
        $ingredient = new Ingredient();

        $ingredient->name = $request->input('name');
        $ingredient->mark = $request->input('mark');
        $ingredient->measure = $request->input('measure');
        $ingredient->weight = $request->input('weight');
        $ingredient->cost = $request->input('cost');

        $ingredient->save();

        return redirect()->route('ingredient.list');

    }

    public function edit($id){
        $ingredient = Ingredient::find($id);

        return view('ingredients.create',[
            'ingredient' => $ingredient
        ]);
    }

    public function update(Request $request, $id){

        $ingredient = Ingredient::find($id);

        $ingredient->name = $request->input('name');
        $ingredient->mark = $request->input('mark');
        $ingredient->measure = $request->input('measure');
        $ingredient->weight = $request->input('weight');
        $ingredient->cost = $request->input('cost');

        $ingredient->update();

        return redirect()->route('ingredient.list');
    }
}
