<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortoController extends Controller
{
    public function index(){
        $project = Project::limit(3)->get();
        return view('user.index', compact('project'));
    }

    public function show($id){
        $project = Project::findOrFail($id);
        return view('user.show', compact('project'));
    }
}
