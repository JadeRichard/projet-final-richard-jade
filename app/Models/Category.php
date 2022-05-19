<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
