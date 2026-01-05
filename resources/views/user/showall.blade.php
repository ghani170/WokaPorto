@extends('admin.layoutPorto.app')
@section('title', 'Semua Portofolio')
@section('content')
<div class="container mx-auto mt-10 mb-10 px-4 sm:px-6 lg:px-8">
    <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Proyek 1 -->
        @foreach ($project as $p)
            <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <div class="h-56 bg-gradient-to-r from-primary to-secondary flex items-center justify-center">
                    <img src="{{ asset('storage/projects/' . $p->thumbnail) }}" alt="{{ $p->title }}" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">{{ $p->title }}</h3>
                    <p class="text-gray-600 mb-4">
                        {{ $p->description }}
                    </p>
                    <span class="inline-block bg-[#3b82f6]/10 text-[#3b82f6] px-3 py-1 rounded-full text-sm font-medium">
                        {{ $p->layanan->nama_layanan }}
                    </span>
                    <a href="{{ route('show.portofolio', $p->id) }}"
                        class="inline-block  text-[#3b82f6] px-3 py-1 text-sm font-medium hover:text-blue-700 cursor-pointer float-right">
                        Detail Proyek <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection