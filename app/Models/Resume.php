<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

  
    protected $table = 'resumes';

  
    protected $fillable = [
        'name',
        'position',
        'phone',
        'email',
        'address',
        'objective',
        'date_of_birth',
        'place_of_birth',
        'age',
        'height',
        'weight',
        'religion',
        'nationality',
        'civil_status',
    ];
}