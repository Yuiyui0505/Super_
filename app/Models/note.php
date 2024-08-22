<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    use HasFactory;
    
    public function supermarket()
    {
        return $this->belongsTo(supermarket::class);
    }
    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
