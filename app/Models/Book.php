<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
