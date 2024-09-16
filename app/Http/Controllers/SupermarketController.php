<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Supermarket;

class SupermarketController extends Controller
{
    public function index(Supermarket $supermarket)
    {
        return view('supermarkets.index')->with(['notes' => $supermarket->note_products()]);
    }
}