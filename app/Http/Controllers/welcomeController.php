<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;
use Inertia\Inertia;

class welcomeController extends Controller
{
    public function welcome()
    {
      $skills = SkillResource::collection(Skill::all()); 

      return Inertia::render('welcome', compact('skills'));
    }
}
