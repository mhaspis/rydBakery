<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductIngredient extends Model
{
    protected $table = 'product_ingredient';

    public function products(){
        return $this->hasMany(Product::class, 'product_id');
    }

    public function ingredients(){
        return $this->hasMany(Ingredient::class, 'ingredient_id');
    }

}
