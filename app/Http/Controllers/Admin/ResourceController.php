<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resources = Resource::all();
        return view('admin.resources.index', compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.resources.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_resource' => 'required|string|max:255',
            'type_resource' => 'required|string|in:language,framework,tool,library,database,other'
        ]);

        Resource::create($request->all());

        return redirect()->route('admin.resource.index')->with('success', 'Resource berhasil ditambahkan');
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
    public function edit(string $id)
    {
        $resource = Resource::findOrFail($id);
        return view('admin.resources.edit', compact('resource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $resource = Resource::findOrFail($id);
        $request->validate([
            'name_resource' => 'required|string|max:255',
            'type_resource' => 'required|string|in:language,framework,tool,library,database,other'
        ]);

        $resource->update($request->all());

        return redirect()->route('admin.resource.index')->with('success', 'Resource berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resource $resource)
    {
        $resource->delete();
        return redirect()->route('admin.resource.index')->with('success', 'Resource berhasil dihapus');
    }
}
