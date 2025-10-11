<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasker extends Model
{
    use HasFactory;

    protected $fillable = [

        'full_name',
        'email',
        'profile_pic',
        'job_title',
        'cost',
        'work_time',
        'description',
        'total_rate',
        'work_quality',
        'reliability',
        'punctuality',
        'solution',
        'payout'


    ];
}
