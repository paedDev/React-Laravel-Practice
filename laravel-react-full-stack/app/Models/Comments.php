<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['comments', 'title'];
    /** @use HasFactory<\Database\Factories\CommentsFactory> */
    use HasFactory;

    // public function post()
    // {
    //     return $this->belongsTo(Post::class);
    // }
}
