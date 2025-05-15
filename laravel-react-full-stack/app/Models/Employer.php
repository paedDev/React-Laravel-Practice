<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    protected $fillable = ['name'];
    use HasFactory;

    public function Jobs()
    {
        return $this->hasMany(JobListing::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
