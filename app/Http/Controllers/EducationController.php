<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function education()
    {
        $education =   Education::get();
        return view('welcome', compact('educations'));
    }
}
