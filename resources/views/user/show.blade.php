@extends('admin.layoutPorto.app')
@section('title', 'Detail Portofolio')
@section('content')
    <header class="pt-16 pb-7 bg-gradient-to-br from-white to-blue-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">{{ $project->title }}</h1>
            <!-- <p class="text-xl text-primary font-medium mb-6">{{ $project->description }}</p> -->
            <div class="flex space-x-3">
                <span
                    class="bg-primary/10 text-primary px-4 py-1 rounded-full text-sm font-semibold">{{ $project->layanan->nama_layanan }}</span>

            </div>
        </div>
    </header>
    <section class="py-1 lg:py-1">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <div class="lg:col-span-2 space-y-12">

                    <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100">
                        <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}"
                            class="w-full h-full object-cover" class="rounded-xl shadow-lg w-full h-auto">
                    </div>

                    <div>
                        <h2 class="text-3xl font-extrabold text-gray-900 mb-4 border-b-2 border-primary/50 pb-2">
                            Deskripsi</h2>
                        <p class="text-lg text-gray-600 mb-6">
                            {{ $project->description }}
                        </p>
                    </div>

                </div>

                <div class="lg:col-span-1 space-y-8">

                    <div class="bg-white p-6 rounded-2xl shadow-xl border-t-4 border-secondary">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center"><i
                                class="fas fa-info-circle mr-3 text-secondary"></i> Ringkasan Proyek</h3>
                        <ul class="space-y-4 text-gray-700">
                            <li>
                                <span class="font-semibold text-gray-900">Layanan:</span>
                                {{ $project->layanan->nama_layanan }}
                            </li>

                            <li>
                                <span class="font-semibold text-gray-900">Status:</span>
                                {{ ucfirst($project->status) }}
                            </li>

                            @if($project->link_project)
                                <li>
                                    <a href="{{ $project->link_project }}" target="_blank"
                                        class="text-primary hover:text-secondary font-semibold transition flex items-center mt-2">
                                        Kunjungi Website
                                        <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>

                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-xl border-t-4 border-primary">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center"><i
                                class="fas fa-tools mr-3 text-primary"></i>Teknologi</h3>
                        <div class="flex flex-wrap gap-3">
                            @foreach($project->resources as $resource)
                                <span class="bg-primary/10 text-primary px-4 py-1 rounded-full text-sm font-semibold">
                                    {{ $resource->name_resource }}
                                </span>
                            @endforeach
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection