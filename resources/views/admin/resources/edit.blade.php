@extends('layouts.app')

@section('title', 'Create Project')

@section('content')
<div class="mt-6">

    <h2 class="text-2xl font-semibold mb-6">Edit Resource</h2>

    {{-- Form Project Baru --}}
    <form action="{{ route('admin.resource.update', $resource->id) }}" method="POST" enctype="multipart/form-data"
        class="bg-white shadow-xl rounded-xl p-8">
        @csrf
        @method('PUT')

        {{-- 1. Field Title Project --}}
        <div class="mb-5">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Nama Resource</label>

            <input type="text" name="name_resource" id="title"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                value="{{ old('name_resource') }} {{ $resource->name_resource }}" placeholder="Masukan Nama Resource">

            @error('name_resource')
            <small class="text-red-600 mt-1 block">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-5">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Type Resource</label>

            <select name="type_resource" id="type_resource" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                <option value="">Pilih Type Resource</option>
                <option value="language" {{ $resource->type_resource == 'language' ? 'selected' : '' }}>Language</option>
                <option value="framework" {{ $resource->type_resource == 'framework' ? 'selected' : '' }}>Framework</option>
                <option value="tool" {{ $resource->type_resource == 'tool' ? 'selected' : '' }}>Tool</option>
                <option value="library" {{ $resource->type_resource == 'library' ? 'selected' : '' }}>Library</option>
                <option value="other" {{ $resource->type_resource == 'other' ? 'selected' : '' }}>Other</option>
            </select>

            @error('type_resource')
            <small class="text-red-600 mt-1 block">{{ $message }}</small>
            @enderror
        </div>


       

        {{-- Bagian Tombol Aksi --}}
        <div class="flex items-center gap-4 border-t pt-5 mt-5">
            <button type="submit"
                class="bg-blue-600 text-white font-semibold px-6 py-2.5 rounded-lg 
                hover:bg-blue-700 transition duration-150 shadow-md">
                <i class="fa-solid fa-save mr-1"></i> Simpan Project
            </button>

            <a href="{{ route('admin.resource.index') }}"
                class="px-6 py-2.5 border border-gray-400 rounded-lg text-gray-700 
                hover:bg-gray-100 transition duration-150">
                Batal / Kembali
            </a>
        </div>

    </form>

</div>
@endsection