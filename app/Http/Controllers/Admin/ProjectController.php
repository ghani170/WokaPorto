<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $project = Project::all();
        return view('admin.project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'image|max:2048'
        ]);

        $thumbnail = null;

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail')->store('project', 'public');
        }

        Project::create([
            'title' => $request->title,
            'link_project' => $request->link_project,
            'description' => $request->description,
            'thumbnail' => $thumbnail
        ]);

        return redirect()->route('admin.project.index')
            ->with('success', 'Project berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $project = Project::findOrFail($id);
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project){
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'image|max:2048'
        ]);

        $thumbnail = $project->thumbnail;

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail')->store('project', 'public');
        }

        $project->update([
            'title' => $request->title,
            'link_project' => $request->link_project,
            'client' => $request->client,
            'description' => $request->description,
            'thumbnail' => $thumbnail
        ]);

        return back()->with('success', 'Project berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project){
        $project->delete();

        return back()->with('success', 'Project berhasil dihapus!');
    }
}
