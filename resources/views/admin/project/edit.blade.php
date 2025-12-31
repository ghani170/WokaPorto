@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')
    <div class="mt-6">

        <h2 class="text-2xl font-semibold mb-6">Edit Project</h2>

        {{-- Form Edit Project --}}
        <form action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data"
            class="bg-white shadow-xl rounded-xl p-8">
            @csrf
            @method('PUT')

            {{-- 1. Title --}}
            <div class="mb-5">
                <label class="block text-sm font-medium text-gray-700 mb-2">Title Project</label>

                <input type="text" name="title" value="{{ old('title', $project->title) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">

                @error('title')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            {{-- 2. Link --}}
            <div class="mb-5">
                <label class="block text-sm font-medium text-gray-700 mb-2">Link Project</label>

                <input type="url" name="link_project" value="{{ old('link_project', $project->link_project) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">

                @error('link_project')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            {{-- 3. Description --}}
            <div class="mb-5">
                <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>

                <textarea name="description" rows="5"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">{{ old('description', $project->description) }}</textarea>

                @error('description')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            {{-- 4. Thumbnail --}}
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Thumbnail</label>

                @if($project->thumbnail)
                    <img src="{{ asset('storage/' . $project->thumbnail) }}" class="w-32 mb-2 rounded-lg">
                @endif

                <input type="file" name="thumbnail" accept="image/*" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">

                @error('thumbnail')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            {{-- 5. Resource --}}
            @php
                $selectedResources = old(
                    'resource_ids',
                    $project->resources->pluck('id')->toArray()
                );
            @endphp

            <div class="mb-5">
                <label class="block text-sm font-medium text-gray-700 mb-2">Resource</label>

                <div id="resource-wrapper" class="space-y-3">
                    @foreach($selectedResources as $id)
                        <div class="flex gap-2">
                            <select name="resource_ids[]" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                                    focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                                <option value="">Pilih Resource</option>
                                @foreach($resources as $resource)
                                    <option value="{{ $resource->id }}" {{ $id == $resource->id ? 'selected' : '' }}>
                                        {{ $resource->name_resource }}
                                    </option>
                                @endforeach
                            </select>

                            <button type="button" onclick="this.parentElement.remove()" class="px-3 text-red-600">✕</button>
                        </div>
                    @endforeach
                </div>

                <button type="button" onclick="addResource()" class="mt-3 text-sm text-blue-600 hover:underline">
                    + Tambah Resource
                </button>

                @if ($errors->has('resource_ids.*'))
                    <small class="text-red-600 mt-1 block">
                        {{ $errors->first('resource_ids.*') }}
                    </small>
                @endif


            </div>

            {{-- 6. Layanan --}}
            <div class="mb-5">
                <label class="block text-sm font-medium text-gray-700 mb-2">Layanan</label>

                <select name="layanan_id" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                    <option value="">Pilih Layanan</option>
                    @foreach($layanans as $layanan)
                        <option value="{{ $layanan->id }}" {{ old('layanan_id', $project->layanan_id) == $layanan->id ? 'selected' : '' }}>
                            {{ $layanan->nama_layanan }}
                        </option>
                    @endforeach
                </select>

                @error('layanan_id')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            {{-- Button --}}
            <div class="flex items-center gap-4 border-t pt-5 mt-5">
                <button type="submit" class="bg-blue-600 text-white font-semibold px-6 py-2.5 rounded-lg 
                            hover:bg-blue-700 transition duration-150 shadow-md">
                    <i class="fa-solid fa-save mr-1"></i> Update Project
                </button>

                <a href="{{ route('admin.project.index') }}" class="px-6 py-2.5 border border-gray-400 rounded-lg text-gray-700 
                            hover:bg-gray-100 transition duration-150">
                    Batal / Kembali
                </a>
            </div>

        </form>
    </div>

    <script>
        function addResource() {
            const wrapper = document.getElementById('resource-wrapper');

            const div = document.createElement('div');
            div.classList.add('flex', 'gap-2');

            div.innerHTML = `
                    <select name="resource_ids[]" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                        <option value="">Pilih Resource</option>
                        @foreach($resources as $resource)
                            <option value="{{ $resource->id }}">{{ $resource->name_resource }}</option>
                        @endforeach
                    </select>

                    <button type="button"
                        onclick="this.parentElement.remove()"
                        class="px-3 text-red-600">✕</button>
                `;

            wrapper.appendChild(div);
        }
    </script>

@endsection