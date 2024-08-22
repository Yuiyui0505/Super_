<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supermarket extends Model
{
    use HasFactory;
    
    public function note_products()
    {
        return $this->belongsToMany(product::class, 'notes', 'supermarket_id', 'product_id');
    }
}
