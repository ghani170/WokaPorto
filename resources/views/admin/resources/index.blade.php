@extends('layouts.app')

@section('title', 'Daftar Project')

@section('content')
    <div class="bg-white shadow-xl rounded-xl p-6 md:p-8">

        {{-- Header dan Tombol Aksi --}}
        <div class="mb-6 flex justify-between items-center flex-wrap gap-4">
            <h2 class="text-xl font-bold text-gray-800">Manajemen Resource</h2>

            <a href="{{ route('admin.resource.create') }}"
                class="px-5 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-150 shadow-md">
                + Tambah Resource Baru
            </a>
        </div>

        {{-- Notifikasi (Success/Error Alerts) --}}
        <div class="py-2 mb-4">
            @if (session('success'))
                <div id="alert-box" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative"
                    role="alert">
                    <div class="flex items-center">
                        {{-- Menggunakan ikon yang lebih sederhana atau Font Awesome --}}
                        <svg class="h-5 w-5 mr-4 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM7 11h2.5V8h1V5.5h-4z" />
                        </svg>
                        <span class="block sm:inline font-semibold text-sm">{{ session('success') }}</span>
                    </div>
                </div>
            @elseif(session('error'))
                <div id="alert-box" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative"
                    role="alert">
                    <div class="flex items-center">
                        {{-- Menggunakan ikon yang lebih sederhana atau Font Awesome --}}
                        <svg class="h-5 w-5 mr-4 fill-current" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-7V5h2v6h-2zm0 4v-2h2v2h-2z" />
                        </svg>
                        <span class="block sm:inline font-semibold text-sm">{{ session('error') }}</span>
                    </div>
                </div>
            @endif
        </div>
        {{-- End Notifikasi --}}


        {{-- Tabel Daftar Project --}}
        <div class="overflow-x-auto border border-gray-200 rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 text-sm" id="table">

                {{-- Header Tabel --}}
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            No
                        </th>
                        {{-- Nama Perusahaan diubah menjadi Judul/Title --}}
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            Nama Resource
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            Type Resource
                        </th>
                        
                        <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>

                {{-- Body Tabel --}}
                <tbody class="divide-y divide-gray-100 bg-white">
                    @forelse ($resources as $data)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-gray-500">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">
                                {{ $data->name_resource }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">
                                {{ $data->type_resource }}
                            </td>
                            {{-- Kolom Aksi --}}
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <a href="{{ route('admin.resource.edit', $data->id) }}"
                                    class="text-indigo-600 hover:text-indigo-900 mx-1">
                                    Edit
                                </a>

                                {{-- Contoh Tombol Hapus (Perlu form untuk POST/DELETE) --}}
                                <form action="{{ route('admin.resource.destroy', $data->id) }}" method="POST" class="inline"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 mx-1">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500 italic">
                                Belum ada data Project yang tersedia.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{-- End Tabel --}}

    </div>

    {{-- Skrip untuk Auto-Hide Alert --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                const alertBox = document.getElementById('alert-box');
                if (alertBox) {
                    // Menambahkan kelas Tailwind untuk transisi yang lebih halus
                    alertBox.classList.add('opacity-0', 'transition-opacity', 'duration-500', 'ease-in-out');

                    // Hapus elemen setelah transisi selesai
                    setTimeout(() => alertBox.remove(), 500);
                }
            }, 3000); // 3 detik
        });
    </script>
@endsection