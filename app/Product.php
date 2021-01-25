<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function category(){
    	return $this->belongsToMany(Category::class, 'products_categories', 'product_id', 'categorie_id');
    }
}
