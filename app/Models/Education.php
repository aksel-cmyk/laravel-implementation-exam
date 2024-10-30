<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'educations';
    
    protected $fillable = [
        'resume_id',
        'level',
        'degree',
        'institution',
        'years',
        'address',

    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}