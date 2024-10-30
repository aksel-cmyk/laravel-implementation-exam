<?php

namespace App\Http\Controllers;

use App\Models\Skill;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function skills()
    {
        $skills =   Skill::get();
        return view('welcome', compact('skills'));
    }
}
