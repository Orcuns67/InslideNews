<?php

namespace App\Http\Controllers;

use App\Models\ProjectSlide;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *   @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with('projectslide')->get();
        return view ('project', compact ('projects'));
    }
}