<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($id)
    {
        // Pass the ID to the view
        return view('project-details', ['projectId' => $id]);
    }
}
