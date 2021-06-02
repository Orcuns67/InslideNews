<?php

namespace App\Http\Controllers;

use App\Models\ProjectSlide;
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
}