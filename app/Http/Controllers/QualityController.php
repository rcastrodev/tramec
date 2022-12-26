<?php

namespace App\Http\Controllers;

use App\Page;
use App\Content;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class QualityController extends Controller
{
    protected $page;

    public function __construct(){
        $this->page = Page::where('name', 'calidad')->first();
    }

    public function content()
    {
        $sections   = $this->page->sections;
        $section1   = $sections->where('name', 'section_1')->first()->contents()->first();
        return view('administrator.quality.content', compact('section1'));
    }
    
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/quality', 'custom');
        }
        if ($request->hasFile('content_3')) {
            $data['content_3'] = $request->file('content_3')->store('images/quality', 'custom');
        }
        Content::create($data);
        return response()->json([], 201);
    }

    public function update(Request $request)
    {
        
        $element = Content::find($request->input('id'));
        $data = $request->all();
        
        if($request->hasFile('image')){
            if(Storage::disk('custom')->exists($element->image))
                Storage::disk('custom')->delete($element->image);
            
            $data['image'] = $request->file('image')->store('images/quality','custom');
        }  

        if($request->hasFile('content_3')){
            if(Storage::disk('custom')->exists($element->content_3))
                Storage::disk('custom')->delete($element->content_3);
            
            $data['content_3'] = $request->file('content_3')->store('images/quality','custom');
        } 

        $element->update($data);

        return back();
    }

    public function destroy($id)
    {
        $element = Content::find($id);
        if(Storage::disk('custom')->exists($element->image))
            Storage::disk('custom')->delete($element->image);

        if(Storage::disk('custom')->exists($element->content_3))
            Storage::disk('custom')->delete($element->content_3);

        $element->delete();
        return response()->json([], 200);
    }

    public function list()
    {
        $lists = $this->page
            ->sections()
            ->where('name', 'section_2')
            ->first();

        $lists = $lists->contents()->orderBy('order', 'ASC');

        return DataTables::of($lists)
        ->addColumn('actions', function($list) {
            return '<button type="button" class="btn btn-sm btn-primary rounded-pill far fa-edit" data-toggle="modal" data-target="#modal-update-element" onclick="findContent('.$list->id.')"></button><button class="btn btn-sm btn-danger rounded-pill" onclick="modalDestroy('.$list->id.')" title="Eliminar slider"><i class="far fa-trash-alt"></i></button>';
        })
        ->rawColumns(['actions'])
        ->make(true);
    }
}
