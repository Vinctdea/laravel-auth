<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'content', 'reading_time'];
    // protected $casts = [
    //     'created_at' => 'd/m/Y'
    // ];
}
