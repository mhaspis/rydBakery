<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Ingredient;
use App\ProductIngredient;

class ProductController extends Controller
{
    public function create(){
        $ingredients = Ingredient::all();

        return view('products.create', [
            'ingredients' => $ingredients
        ]);
    }
}
