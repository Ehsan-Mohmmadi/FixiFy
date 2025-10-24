<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    use HasFactory;

    protected $fillable=[
      'phone_number',
      'email',
      'apple_id',
      'google_id',
      'verification_code',
    ];
}
