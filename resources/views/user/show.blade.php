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
                                Tantangan & Tujuan</h2>
                            <p class="text-lg text-gray-600 mb-6">
                                Klien menghadapi kesulitan dalam mengelola inventaris produk fashion yang cepat berganti
                                dengan platform lama yang lambat dan tidak responsif.
                                Tujuannya adalah membangun platform e-commerce baru yang **cepat, mudah digunakan (UX
                                intuitif),** dan memiliki sistem manajemen gudang dan diskon yang terintegrasi.
                            </p>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start"><i
                                        class="fas fa-times-circle text-red-500 mt-1 mr-3 flex-shrink-0"></i> Masalah:
                                    Tingkat *bounce rate* tinggi pada checkout.</li>
                                <li class="flex items-start"><i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i> Tujuan:
                                    Meningkatkan konversi penjualan sebesar 20%.</li>
                                <li class="flex items-start"><i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i> Tujuan:
                                    Waktu pemuatan halaman di bawah 2 detik.</li>
                            </ul>
                        </div>

                    </div>

                    <div class="lg:col-span-1 space-y-8">

                        <div class="bg-white p-6 rounded-2xl shadow-xl border-t-4 border-secondary">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center"><i
                                    class="fas fa-info-circle mr-3 text-secondary"></i> Ringkasan Proyek</h3>
                            <ul class="space-y-4 text-gray-700">
                                <li><span class="font-semibold text-gray-900">Industri:</span> Retail Fashion</li>
                                <li><span class="font-semibold text-gray-900">Layanan:</span> Pengembangan Web & UI/UX</li>
                                <li><span class="font-semibold text-gray-900">Durasi:</span> 5 Bulan</li>
                                <li><span class="font-semibold text-gray-900">Status:</span> Live & Dalam Perawatan</li>
                                <li>
                                    <a href="https://www.example.com" target="_blank"
                                        class="text-primary hover:text-secondary font-semibold transition flex items-center mt-2">
                                        Kunjungi Website <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-white p-6 rounded-2xl shadow-xl border-t-4 border-primary">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center"><i
                                    class="fas fa-tools mr-3 text-primary"></i> Tumpukan Teknologi</h3>
                            <div class="flex flex-wrap gap-3">
                                <span
                                    class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm font-medium border border-gray-200"><i
                                        class="fab fa-laravel mr-2"></i> Laravel (Backend)</span>
                                <span
                                    class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm font-medium border border-gray-200"><i
                                        class="fab fa-vuejs mr-2"></i> Vue.js (Frontend)</span>
                                <span
                                    class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm font-medium border border-gray-200"><i
                                        class="fas fa-server mr-2"></i> AWS (Hosting)</span>
                                <span
                                    class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm font-medium border border-gray-200"><i
                                        class="fas fa-database mr-2"></i> PostgreSQL</span>
                                <span
                                    class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm font-medium border border-gray-200"><i
                                        class="fab fa-figma mr-2"></i> Figma (Desain)</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


    <footer class="bg-gray-900 text-white py-10">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-500">
            <p>&copy; 2023 WokaProject. Dibuat dengan <i class="fas fa-heart text-red-500 mx-1"></i> dan Tailwind CSS.
            </p>
        </div>
    </footer>

</body>

</html>