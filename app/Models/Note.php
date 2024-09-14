<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    
    public function supermarket()
    {
        return $this->belongsTo(Supermarket::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function getByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('product')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        return $this::with('supermarket')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    protected $fillable = [
        'price',
        'product_id',
        'category_id',
        'supermarket_id',
    ];
}
