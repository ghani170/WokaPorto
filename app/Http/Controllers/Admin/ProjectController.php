<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\Project;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::all();
        return view('admin.project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $resources = Resource::all();
        $layanans = Layanan::all();
        return view('admin.project.create', compact('resources', 'layanans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'link_project' => 'nullable|url',
            'description' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'layanan_id' => 'required|exists:layanans,id',
            'resource_ids' => 'required|array|min:1',
            'resource_ids.*' => 'required|exists:resources,id',
        ]);

        if (count($request->resource_ids) !== count(array_unique($request->resource_ids))) {
            return back()
                ->withErrors(['resource_ids' => 'Resource tidak boleh sama'])
                ->withInput();
        }

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')
                ->store('projects', 'public');
        }

        $project = Project::create([
            'title' => $request->title,
            'link_project' => $request->link_project,
            'description' => $request->description,
            'thumbnail' => $thumbnailPath,
            'status' => 'active',
            'layanan_id' => $request->layanan_id,
        ]);

        $resourceIds = array_unique(array_filter($request->resource_ids));

        $project->resources()->attach($resourceIds);

        return redirect()
            ->route('admin.project.index')
            ->with('success', 'Project berhasil ditambahkan');
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
    public function edit(Project $project)
    {
        return view('admin.project.edit', [
            'project' => $project,
            'resources' => Resource::all(),
            'layanans' => Layanan::all(),
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'link_project' => 'nullable|url',
            'description' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'layanan_id' => 'required|exists:layanans,id',
            'status' => 'required|in:active,expired',
            'resource_ids' => 'required|array|min:1',
            'resource_ids.*' => 'required|exists:resources,id|distinct',
        ],
        [
            'resource_ids.*.distinct' => 'Resource tidak boleh sama',
        ]
        );

        if ($request->hasFile('thumbnail')) {
            $project->thumbnail = $request->file('thumbnail')
                ->store('projects', 'public');
        }

        $project->update([
            'title' => $request->title,
            'link_project' => $request->link_project,
            'description' => $request->description,
            'layanan_id' => $request->layanan_id,
        ]);

        $project->resources()->sync($request->resource_ids);

        return redirect()
            ->route('admin.project.index')
            ->with('success', 'Project berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return back()->with('success', 'Project berhasil dihapus!');
    }
}
