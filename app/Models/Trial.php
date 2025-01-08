<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trial extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'job_title',
        'company_name',
        'industry',
        'phone',
        'agreement'
    ];

    protected $casts = [
        'agreement' => 'boolean',
    ];
}