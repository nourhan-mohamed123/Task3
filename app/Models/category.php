<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function books()
    {
        return $this->hasMany(Book::class);
    }

    protected $fillable = ['title'];
}
