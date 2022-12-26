<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function content()
    {
        return view('administrator.product.content');
    }

    public function create()
    {       
        return view('administrator.product.create');
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();

        if($request->hasFile('extra')) 
            $data['extra'] = $request->file('extra')->store('images/data-sheet', 'custom');

        if($request->hasFile('img1'))
            $data['img1'] = $request->file('img1')->store('images/products', 'custom');
        
        if($request->hasFile('img2'))
            $data['img2'] = $request->file('img2')->store('images/products', 'custom');
        
        $product = Product::create($data);                    
        
        return redirect()
            ->route('product.content.edit', ['id' => $product->id])
            ->with('mensaje', 'Producto creado');

    }

    public function edit($id)
    {   
        $product = Product::findOrFail($id);
        return view('administrator.product.edit', compact('product'));
    }

    public function update(ProductRequest $request)
    {   
        $data = $request->all();

        if($request->hasFile('extra')) 
            $data['extra'] = $request->file('extra')->store('images/data-sheet', 'custom');
        
        $product = Product::find($request->input('id'));

        if($request->hasFile('extra')){
            if (Storage::disk('custom')->exists($product->extra))
                    Storage::disk('custom')->delete($product->extra);
            
            $data['extra'] = $request->file('extra')->store('images/data-sheet', 'custom');
        }


        if($request->hasFile('img1')){
            if (Storage::disk('custom')->exists($product->img1))
                    Storage::disk('custom')->delete($product->img1);
            
            $data['img1'] = $request->file('img1')->store('images/products', 'custom');
        }

        if($request->hasFile('img2')){
            if (Storage::disk('custom')->exists($product->img2))
                    Storage::disk('custom')->delete($product->img2);
            
            $data['img2'] = $request->file('img2')->store('images/products', 'custom');
        }

        $product->update($data);        
                    
        return back()->with('mensaje', 'Producto editado correctamente');
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
    }

    public function find($id)
    {
        $content = Product::find($id);
        return response()->json(['content' => $content]);
    }

    public function getList()
    {
        return DataTables::of(Product::query())
        ->addColumn('actions', function($product) {
            return '<a href="'.route('product.content.edit', ["id" => $product->id]).'" class="btn btn-sm btn-primary rounded-pill far fa-edit"></a><button class="btn btn-sm btn-danger rounded-pill" onclick="modalProductDestroy('.$product->id.')" title="Eliminar slider"><i class="far fa-trash-alt"></i></button>';
        })
        ->rawColumns(['actions'])
        ->make(true);
    }
}
