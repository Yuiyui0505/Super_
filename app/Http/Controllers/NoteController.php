<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Product;
use App\Models\Supermarket;

class NoteController extends Controller
{
    public function index(Note $note)
    {
        return view('notes.index')->with(['notes' => $note->getPaginateByLimit()]);
    }
    public function show(Note $note)
    {
        return view('notes.show')->with(['note' => $note]);
    }
    public function create(Product $product, Supermarket $supermarket)
    {
        return view('notes.create')->with(['products' => $product->get(),'supermarkets' => $supermarket->get()]);
    }
    public function register()
    {
        return view('notes.register');
    }
    public function store(Request $request, Note $note)
    {
        $input_product = $request['product_name'];
        $input_supermarket = $request['supermarket_name'];
        $input_category = ['category_name'];
        $supermarket=Supermarket::create([
            'name' => $input_supermarket,
            'place' => $input_supermarket,
            'latitude' => null,
            'longitude' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $input['supermarket_id']=$supermarket->id;
        if($supermarket->where('name', $input_supermarket)->exists())
        {$supermarket->where('name',$input_supermarket)->first();}
        else
        {$input->save();};
        
    }
}