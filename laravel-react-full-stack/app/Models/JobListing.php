<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobListing extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'salary'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
