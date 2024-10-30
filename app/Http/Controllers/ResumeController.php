<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Resume;
use App\Models\Education;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $resume = Resume::first();
        $skills = Skill::all();
        $educations = Education::all();


        return view('welcome', compact('resume', 'skills', 'educations'));
    }
}
