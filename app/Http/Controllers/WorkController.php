<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class WorkController extends Controller
{
    public function home() {
        $projects = Project::with('tags')->orderBy('published_at', 'desc')->get();
        return view('index', compact('projects'));
    }

    public function works() {
        $projects = Project::with('tags')->orderBy('published_at', 'desc')->get();
        return view('works', compact('projects'));
    }

    public function contact() {
        return view('contact');
    }
}
