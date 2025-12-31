<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Project;
use Illuminate\Http\Request;

class PortoController extends Controller
{
    public function index(){
        $project = Project::limit(3)->get();
        $layanans = Layanan::limit(2)->get();
        return view('user.index', compact('project', 'layanans'));
    }

    public function show($id){
        $project = Project::findOrFail($id);
        return view('user.show', compact('project'));
    }

    public function showAll(){
        $project = Project::all();
        return view('user.showall', compact('project'));
    }
}
