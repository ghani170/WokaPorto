@extends('layouts.app')

@section('title', 'Edit Layanan')

@section('content')
<div class="mt-6">

    <h2 class="text-2xl font-semibold mb-6">Edit Layanan</h2>

    <form action="{{ route('admin.layanan.update', $layanan->id) }}" 
          method="POST" 
          enctype="multipart/form-data"
          class="bg-white shadow-xl rounded-xl p-8">
        @csrf
        @method('PUT')

        {{-- Nama Layanan --}}
        <div class="mb-5">
            <label class="block text-sm font-medium mb-2">Nama Layanan</label>
            <input type="text" name="nama_layanan"
                value="{{ old('nama_layanan', $layanan->nama_layanan) }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">

            @error('nama_layanan')
                <small class="text-red-600">{{ $message }}</small>
            @enderror
        </div>

        {{-- Deskripsi --}}
        <div class="mb-5">
            <label class="block text-sm font-medium mb-2">Deskripsi Layanan</label>
            <textarea name="deskripsi_layanan" rows="4"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 
                            focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">{{ old('deskripsi_layanan', $layanan->deskripsi_layanan) }}</textarea>

            @error('deskripsi_layanan')
                <small class="text-red-600">{{ $message }}</small>
            @enderror
        </div>

        {{-- Gambar Lama --}}
        @if($layanan->logo_layanan)
        <div class="mb-4">
            <p class="text-sm text-gray-600 mb-2">Gambar Saat Ini</p>
            <img src="{{ asset('storage/layanan_logo/' . $layanan->logo_layanan) }}"
                 class="w-40 rounded-lg shadow">
        </div>
        @endif

        {{-- Upload Gambar Baru --}}
        <div class="mb-5">
            <label class="block text-sm font-medium mb-2">Ganti Gambar (Opsional)</label>
            <input type="file" name="logo_layanan" id="logo_layanan" accept="image/*"
                class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 
                    file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold
                    file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">

            @error('logo_layanan')
                <small class="text-red-600">{{ $message }}</small>
            @enderror

            <img id="preview" class="hidden w-40 mt-3 rounded-lg">
        </div>

        {{-- Button --}}
        <div class="flex gap-4 border-t pt-5">
            <button class="bg-blue-600 text-white font-semibold px-6 py-2.5 rounded-lg 
                            hover:bg-blue-700 transition duration-150 shadow-md">
                <i class="fa-solid fa-save mr-1"></i> Update Layanan
            </button>
            <a href="{{ route('admin.layanan.index') }}" class="px-6 py-2.5 border border-gray-400 rounded-lg text-gray-700 
                            hover:bg-gray-100 transition duration-150">
                    Batal / Kembali
                </a>
        </div>  
    </form>

</div>

<script>
    document.getElementById('logo_layanan').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const preview = document.getElementById('preview');
            preview.src = URL.createObjectURL(file);
            preview.classList.remove('hidden');
        }
    });
</script>
@endsection
