<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VariableProduct extends Model
{
    protected $fillable = ['product_id', 'code', 'rules', 'step', 'diameter', 'thickness', 'long', 'load', 'weight'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
