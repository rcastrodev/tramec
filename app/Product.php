<?php

namespace App;

use App\Color;
use App\VariableProduct;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'order', 'extra', 'img1', 'img2'];

    public function variableProducts()
    {
        return $this->hasMany(VariableProduct::class);
    }
}
