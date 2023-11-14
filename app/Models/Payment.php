<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{ 
    use HasFactory;
    protected $fillable = [
        'name', 'phone', 'user_id', 'email', 'nanny_id', 'location', 'description', 'status', 'payment_name', 'payment_number', 'payment_secret'
    ];

    public function nanny()
    {
        return $this->belongsTo(Nanny::class);
    }
}
