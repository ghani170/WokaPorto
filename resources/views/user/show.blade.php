<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Proyek | E-commerce Fashion Kustom - WokaProject</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6', // Biru Cerah
                        secondary: '#1e40af', // Biru Gelap
                        accent: '#f59e0b', // Kuning/Oranye Akses
                    },
                }
            }
        }
    </script>
</head>

<body class="text-gray-800 bg-gray-50">

    <nav class="sticky top-0 w-full bg-white/30 backdrop-blur-md shadow-sm z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="text-xl font-bold text-blue-600 hover:text-blue-700 transition">
                    <i class="fas fa-arrow-left mr-2"></i> Home
                </a>
                <a href="#" class="text-2xl font-bold text-secondary">
                    <span class="text-primary">Woka</span>Project
                </a>
            </div>
        </div>
    </nav>

    <header class="pt-16 pb-12 bg-gradient-to-br from-white to-blue-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">{{ $project->title }}</h1>
            <p class="text-xl text-primary font-medium mb-6">{{ $project->description }}</p>
            <div class="flex space-x-3">
                <span class="bg-primary/10 text-primary px-4 py-1 rounded-full text-sm font-semibold">E-commerce</span>
                <span class="bg-primary/10 text-primary px-4 py-1 rounded-full text-sm font-semibold">Full Stack</span>
                <span class="bg-primary/10 text-primary px-4 py-1 rounded-full text-sm font-semibold">UI/UX</span>
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


    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-8 md:mb-0">
                    <a href="#" class="text-2xl font-bold text-white">
                        <span class="text-[#f59e0b]">Woka</span>Project
                    </a>
                    <p class="text-gray-400 mt-2 max-w-md">
                        Perusahaan pengembangan solusi digital terdepan di Indonesia.
                    </p>
                </div>
                
                <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-12">
                    <div>
                        <h4 class="font-bold mb-4">Tautan Cepat</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Beranda</a></li>
                            <li><a href="#tentang" class="text-gray-400 hover:text-white transition">Tentang Kami</a></li>
                            <li><a href="#layanan" class="text-gray-400 hover:text-white transition">Layanan</a></li>
                            <li><a href="#portofolio" class="text-gray-400 hover:text-white transition">Portofolio</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-bold mb-4">Layanan</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Web Development</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Mobile App</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">UI/UX Design</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition">Konsultasi IT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-10 pt-8 text-center text-gray-400">
                <p>&copy; 2023 NamaPerusahaan. Semua hak dilindungi undang-undang.</p>
            </div>
        </div>
    </footer>

</body>

</html>