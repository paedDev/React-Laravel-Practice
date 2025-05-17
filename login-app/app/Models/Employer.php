<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $guarded = [];
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    public function post()
    {
        return $this->hasMany(Post::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
