<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class JobListing extends Model
{
    protected $fillable = ['title', 'salary'];
}
