@extends('layouts.app')

@section('title', 'Create Project')

@section('content')
    <div class="mt-6">

        <h2 class="text-2xl font-semibold mb-6">Tambah Layanan</h2>

        {{-- Form Project Baru --}}
        <form action="{{ route('admin.layanan.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white shadow-xl rounded-xl p-8">
            @csrf

            {{-- 1. Field Title Project --}}
            <div class="mb-5">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Nama Layanan</label>

                <input type="text" name="nama_layanan" id="title" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                    value="{{ old('nama_layanan') }}" placeholder="Masukan Nama Layanan">

                @error('nama_layanan')
                    <small class="text-red-600 mt-1 block">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-5">
                <label for="deskripsi_layanan" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi
                    Layanan</label>

                <textarea name="deskripsi_layanan" id="deskripsi_layanan" rows="5" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                    placeholder="Jelaskan detail layanan ini...">{{ old('deskripsi_layanan') }}</textarea>

                @error('deskripsi_layanan')
                    <small class="text-red-600 mt-1 block">{{ $message }}</small>
                @enderror
            </div>
           
            <div class="mb-5">
                <label for="logo_layanan" class="block text-sm font-medium text-gray-700 mb-2">Logo Layanan</label>

                <input type="file" name="logo_layanan" id="logo_layanan" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                    placeholder="Jelaskan detail layanan ini...">{{ old('deskripsi_layanan') }}</input>

                @error('logo_layanan')
                    <small class="text-red-600 mt-1 block">{{ $message }}</small>
                @enderror
                 <div class="mb-5">
                <img id="preview" class="hidden w-40 rounded-lg shadow-md mt-2">
            </div>
            </div>
            {{-- Bagian Tombol Aksi --}}
            <div class="flex items-center gap-4 border-t pt-5 mt-5">
                <button type="submit" class="bg-blue-600 text-white font-semibold px-6 py-2.5 rounded-lg 
                            hover:bg-blue-700 transition duration-150 shadow-md">
                    <i class="fa-solid fa-save mr-1"></i> Simpan Project
                </button>

                <a href="{{ route('admin.resource.index') }}" class="px-6 py-2.5 border border-gray-400 rounded-lg text-gray-700 
                            hover:bg-gray-100 transition duration-150">
                    Batal / Kembali
                </a>
            </div>

        </form>

    </div>

    <script>
        document.getElementById('logo_layanan').addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const preview = document.getElementById('preview');
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('hidden');
            }
        });
    </script>
@endsection