<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'product_id','name',
    ];

    
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
