<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nanny extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'location',
        'fb',
        'linkdin',
        'insta',
        'age',
        'experience',
        'image',
    ];
}
