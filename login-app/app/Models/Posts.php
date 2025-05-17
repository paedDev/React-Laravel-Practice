<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    /** @use HasFactory<\Database\Factories\PostsFactory> */
    // protected $fillable = ['title', 'description', 'employer_id'];
    protected $guarded = [];
    use HasFactory;

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
