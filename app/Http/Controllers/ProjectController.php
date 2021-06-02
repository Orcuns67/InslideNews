<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *   @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function show($id) {
        $projects = Project::with('slide')->where('id', $id)->First();
        return view('slideshow',compact('projects'));

    }
}