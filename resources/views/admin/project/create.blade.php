@extends('layouts.app')

@section('title', 'Create Project')

@section('content')
    <div class="mt-6">

        <h2 class="text-2xl font-semibold mb-6">Tambah Project</h2>

        {{-- Form Project Baru --}}
        <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white shadow-xl rounded-xl p-8">
            @csrf

            {{-- 1. Field Title Project --}}
            <div class="mb-5">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title Project</label>

                <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                    focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                    value="{{ old('title') }}" placeholder="Contoh: Aplikasi E-commerce XYZ">

                @error('title')
                    <small class="text-red-600 mt-1 block">{{ $message }}</small>
                @enderror
            </div>

            {{-- 2. Field Link Project --}}
            <div class="mb-5">
                <label for="link_project" class="block text-sm font-medium text-gray-700 mb-2">Link Project</label>

                <input type="url" name="link_project" id="link_project" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                    focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                    placeholder="https://contoh.com/project" value="{{ old('link_project') }}">

                @error('link_project')
                    <small class="text-red-600 mt-1 block">{{ $message }}</small>
                @enderror
            </div>

            {{-- 3. Field Description (Textarea) --}}
            <div class="mb-5">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>

                <textarea name="description" id="description" rows="5" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                    focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                    placeholder="Jelaskan detail proyek ini...">{{ old('description') }}</textarea>

                @error('description')
                    <small class="text-red-600 mt-1 block">{{ $message }}</small>
                @enderror
            </div>

            {{-- 4. Field Thumbnail (File Upload) --}}
            <div class="mb-6">
                <label for="thumbnail" class="block text-sm font-medium text-gray-700 mb-2">Thumbnail (Gambar)</label>

                <input type="file" name="thumbnail" id="thumbnail" accept="image/*" class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 
                    file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold
                    file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">

                @error('thumbnail')
                    <small class="text-red-600 mt-1 block">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-5">
                <label for="resource_id" class="block text-sm font-medium text-gray-700 mb-2">Resource</label>

                <div id="resource-wrapper" class="space-y-3">
                    <select name="resource_ids[]" class="w-full border border-gray-300 rounded-lg px-4 py-2.5">
                        <option value="">Pilih Resource</option>
                        @foreach($resources as $resource)
                            <option value="{{ $resource->id }}">
                                {{ $resource->name_resource }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="button" onclick="addResource()" class="mt-3 text-sm text-blue-600 hover:underline">
                    + Tambah Resource
                </button>

                @error('resource_ids')
                    <small class="text-red-600 mt-1 block">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-5">
                <label class="block text-sm font-medium text-gray-700 mb-2">Layanan</label>

                <select name="layanan_id" id="layanan_id"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                    <option value="">Pilih Layanan</option>
                    @isset($layanans)
                        @foreach($layanans as $layanan)
                            <option value="{{ $layanan->id }}" {{ old('layanan_id') == $layanan->id ? 'selected' : '' }}>
                                {{ $layanan->nama_layanan }}</option>
                        @endforeach
                    @endisset
                </select>

                @error('layanan_id')
                    <small class="text-red-600 mt-1 block">{{ $message }}</small>
                @enderror
            </div>

            {{-- Bagian Tombol Aksi --}}
            <div class="flex items-center gap-4 border-t pt-5 mt-5">
                <button type="submit" class="bg-blue-600 text-white font-semibold px-6 py-2.5 rounded-lg 
                    hover:bg-blue-700 transition duration-150 shadow-md">
                    <i class="fa-solid fa-save mr-1"></i> Simpan Project
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
        <select name="resource_ids[]" class="flex-1 border border-gray-300 rounded-lg px-4 py-2.5">
            <option value="">Pilih Resource</option>
            @foreach($resources as $resource)
                <option value="{{ $resource->id }}">{{ $resource->name_resource }}</option>
            @endforeach
        </select>

        <button type="button" onclick="this.parentElement.remove()"
            class="px-3 text-red-600">✕</button>
    `;

    wrapper.appendChild(div);
}
</script>

@endsection