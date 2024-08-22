<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
 
    public function note_supermarkets()
    {
        return $this->belongsToMany(supermarket::class, 'notes', 'product_id', 'supermarket_id')
        ->whisPivot('notes');
    }
    
    public function notes()
    {
        return $this->hasmany(notes::class);
    }
}
