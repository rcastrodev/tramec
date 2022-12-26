<?php

namespace App\Http\Controllers;

use SEO;
use App\Data;
use App\Page;
use App\Product;
use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PagesController extends Controller
{
    private $data;

    public function __construct()
    {
        $this->data = Data::first();
    }

    public function home()
    {
        $page = Page::where('name', 'inicio')->first();
        SEO::setTitle('home');

        /** Secciones de página */
        $sections = $page->sections;
        $section1s  = $sections->where('name', 'section_1')->first()->contents()->orderBy('order', 'ASC')->get();
        $section2  = $sections->where('name', 'section_2')->first()->contents()->first();
        $products = Product::orderBy('order', 'ASC')->get();
        return view('paginas.index', compact('section1s', 'section2', 'products'));
    }

    public function empresa()
    {
        $page = Page::where('name', 'empresa')->first();
        SEO::setTitle('empresa');
        /** Secciones de página */
        $sections = $page->sections;
        $sliders =  $sections->where('name', 'section_1')->first()->contents()->orderBy('order', 'ASC')->get();
        $section2 = $sections->where('name', 'section_2')->first()->contents()->first();
        $section3 = $sections->where('name', 'section_3')->first()->contents()->orderBy('order', 'ASC')->get();
        $section4 = $sections->where('name', 'section_4')->first()->contents()->first();
        return view('paginas.empresa', compact('sliders', 'section2', 'section3', 'section4'));
    }

    public function productos(Request $request)
    {
        $products = Product::orderBy('order', 'ASC')->get();
        SEO::setTitle("productos");
        return view('paginas.productos', compact('products'));
    }
    
    public function producto(Product $product)
    {        
        $product = $product;
        SEO::setTitle($product->name);
        SEO::setDescription($product->description);
        return view('paginas.producto', compact('product'));
    }

    public function calidad()
    {
        $page = Page::where('name', 'calidad')->first();
        $sections = $page->sections;
        $section1 = $sections->where('name', 'section_1')->first()->contents()->first();
        $section2 = $sections->where('name', 'section_2')->first()->contents()->orderBy('order', 'ASC')->get();
        return view('paginas.calidad', compact('section1', 'section2'));
    }

    public function laboratorio()
    {
        $page = Page::where('name', 'laboratorio')->first();
        $sections = $page->sections;
        $section1 = $sections->where('name', 'section_1')->first()->contents()->first();
        return view('paginas.laboratorio', compact('section1'));
    }

    public function solicitudDePresupuesto()
    {
        SEO::setTitle("solicitud de presupuesto");
        return view('paginas.solicitud-de-presupuesto');
    }

    public function contacto()
    {
        $page = Page::where('name', 'contacto')->first();
        SEO::setTitle("Contacto");       
        return view('paginas.contacto');
    }

    public function archivoCalidad($id)
    {
        $content = Content::findOrFail($id);  
        return Response::download($content->image);  
    }
}
