<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supermarket extends Model
{
    use HasFactory;
    
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
    public function note_products()
    {
        return $this->belongToMany(Product::class, 'notes', 'supermerket_id', 'product_id');
    }
    public function getBySupermarket(int $limit_count = 5)
    {
        return $this->notes()->with('supermarket')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    protected $fillable = [
        'name',
        'place',
        ];
}
