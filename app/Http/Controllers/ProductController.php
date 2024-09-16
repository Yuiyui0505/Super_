<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        return view('products.index')->with(['notes' => $product->getByProduct()]);
    }
}