<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
 
    public function note_supermarkets()
    {
        return $this->belongsToMany(supermarket::class, 'notes', 'product_id', 'supermarket_id')
        ->whisPivot('notes');
    }
    public function notes()
    {
        return $this->hasmany(Note::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function country()
    {
        return $this->belongdTo(Country::class);
    }
    public function getByProduct(int $limit_count = 5)
    {
        return $this->notes()->with('product')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
