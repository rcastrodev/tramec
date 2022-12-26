<?php

namespace App\Http\Controllers;

use App\VariableProduct;
use Illuminate\Http\Request;
use App\Http\Requests\ProductVariableRequest;

class VariableProductController extends Controller
{
    public function store(Request $request)
    {
        VariableProduct::create($request->all());
    }

    public function update(Request $request)
    {
        $pv = VariableProduct::find($request->input('id'));
        $pv->update($request->all());
    }

    public function destroy($id)
    {
        VariableProduct::find($id)->delete();
    }
}

