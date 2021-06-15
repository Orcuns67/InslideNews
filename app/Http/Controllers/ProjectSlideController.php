<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectSlideController extends Controller
{   
    /**
     * Display a listing of the resource.
     * 
     *   @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectslides = ProjectSlide::with('project', 'slide')->get();
        return view ('projectslides', compact ('projectslides'));
    }

    public function start($id)
    {
        $project = Project::with('slide')->where('id', $id)->firstOrFail();
        return view ('start', compact ('project'));
    }
}