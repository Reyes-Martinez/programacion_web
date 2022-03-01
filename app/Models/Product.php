<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
