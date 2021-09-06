<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentTaggable\Taggable;

class Product extends Model
{
    use Taggable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image', 'category_id','tags','status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
