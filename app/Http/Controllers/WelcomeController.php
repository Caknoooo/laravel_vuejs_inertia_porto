<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    public function welcome(){
        $skills = SkillResource::collection(Skill::all());

        return Inertia::render('Welcome', compact('skills'));
    }
}
