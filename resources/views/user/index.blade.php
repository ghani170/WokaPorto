@extends('layoutsUser.app')
@section('title', 'Beranda - WokaProject')
@section('content')
    <!-- Hero Section -->
    <section class="pt-24 pb-16 md:pt-32 md:pb-24 p-10 bg-gradient-to-r from-blue-50 to-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
                        Solusi Digital <span class="text-[#3b82f6]">Inovatif</span> untuk Bisnis Anda
                    </h1>
                    <p class="text-lg text-gray-600 mb-8">
                        Kami membantu perusahaan mengembangkan solusi digital yang efektif dan efisien untuk meningkatkan
                        produktivitas dan pertumbuhan bisnis.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#portofolio"
                            class="bg-[#3b82f6] text-white px-8 py-3 rounded-lg font-medium hover:bg-[#1e40af] transition shadow-lg text-center">
                            Lihat Portofolio
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative">
                        <div class="w-80 h-80 bg-gradient-to-r from-primary to-secondary rounded-full opacity-20"></div>
                        <div
                            class="absolute top-10 left-10 w-80 h-80 bg-gradient-to-r from-accent to-yellow-300 rounded-full opacity-20">
                        </div>
                        <div
                            class="absolute top-20 left-20 w-64 h-64 bg-white rounded-xl shadow-2xl flex items-center justify-center">
                            <i class="fas fa-laptop-code text-7xl text-[#3b82f6]"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tentang Kami</h2>
                <div class="w-24 h-1 bg-[#3b82f6] mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Kami adalah perusahaan teknologi yang berfokus pada pengembangan solusi digital untuk berbagai kebutuhan
                    bisnis.
                </p>
            </div>

            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        alt="Tentang Kami" class="rounded-xl shadow-lg w-full h-auto">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Mengapa Memilih Kami?</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-[#3b82f6]/10 p-3 rounded-full mr-4">
                                <i class="fas fa-lightbulb text-[#3b82f6] text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-2">Inovasi Terdepan</h4>
                                <p class="text-gray-600">Kami selalu mengikuti perkembangan teknologi terbaru untuk
                                    memberikan solusi yang modern dan relevan.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-[#3b82f6]/10 p-3 rounded-full mr-4">
                                <i class="fas fa-users text-[#3b82f6] text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-2">Tim Berpengalaman</h4>
                                <p class="text-gray-600">Tim kami terdiri dari profesional dengan pengalaman lebih dari 10
                                    tahun di industri teknologi.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-[#3b82f6]/10 p-3 rounded-full mr-4">
                                <i class="fas fa-handshake text-[#3b82f6] text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-2">Pendekatan Personal</h4>
                                <p class="text-gray-600">Kami memahami kebutuhan unik setiap klien dan memberikan solusi
                                    yang sesuai dengan tujuan bisnis mereka.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan -->
    <section id="layanan" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Layanan Kami</h2>
                <div class="w-24 h-1 bg-[#3b82f6] mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Kami menyediakan berbagai layanan digital untuk membantu bisnis Anda tumbuh dan berkembang.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                <!-- Layanan 1 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-[#3b82f6]/10 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-code text-[#3b82f6] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Pengembangan Web</h3>
                    <p class="text-gray-600 mb-6">
                        Kami mengembangkan website responsif dan modern dengan teknologi terbaru untuk bisnis Anda.
                    </p>
                    <a href="#" class="text-[#3b82f6] font-medium hover:text-[#1e40af] transition">
                        Pelajari lebih lanjut <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>


                <!-- Layanan 3 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-[#3b82f6]/10 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-paint-brush text-[#3b82f6] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">UI/UX Design</h3>
                    <p class="text-gray-600 mb-6">
                        Desain antarmuka yang menarik dan pengalaman pengguna yang optimal untuk produk digital Anda.
                    </p>
                    <a href="#" class="text-[#3b82f6] font-medium hover:text-[#1e40af] transition">
                        Pelajari lebih lanjut <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portofolio -->
    <section id="portofolio" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Portofolio Kami</h2>
                <div class="w-24 h-1 bg-[#3b82f6] mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Beberapa proyek yang telah kami selesaikan untuk klien dari berbagai industri.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Proyek 1 -->
                @foreach ($project as $p)
                    <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                        <div class="h-56 bg-gradient-to-r from-primary to-secondary flex items-center justify-center">
                            <img src="{{ asset('storage/' . $p->thumbnail) }}" alt="{{ $p->title }}"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">{{ $p->title }}</h3>
                            <p class="text-gray-600 mb-4">
                                {{ $p->description }}
                            </p>
                            <span
                                class="inline-block bg-[#3b82f6]/10 text-[#3b82f6] px-3 py-1 rounded-full text-sm font-medium">
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
    </section>
    <div class="text-center mt-[-20px]">
        <a href="#" class="inline-flex items-center text-[#3b82f6] font-medium hover:text-[#1e40af] transition">
            Lihat Semua Proyek <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>

    <!-- Kontak -->
    <section id="kontak" class="py-16 bg-gray-50 mt-12">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Hubungi Kami</h2>
                <div class="w-24 h-1 bg-[#3b82f6] mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Tertarik bekerja sama dengan kami? Hubungi kami untuk konsultasi gratis.
                </p>
            </div>

            <div class="flex flex-col lg:flex-row">
                <div class="lg:w-1/2 mb-12 lg:mb-0 lg:pr-12">
                    <h3 class="text-2xl font-bold mb-6">Informasi Kontak</h3>

                    <div class="space-y-6 mb-10">
                        <div class="flex items-start">
                            <div class="bg-[#3b82f6]/10 p-3 rounded-full mr-4">
                                <i class="fas fa-map-marker-alt text-[#3b82f6]"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Alamat Kantor</h4>
                                <p class="text-gray-600">Jl. Contoh No. 123, Jakarta Selatan, Indonesia</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-[#3b82f6]/10 p-3 rounded-full mr-4">
                                <i class="fas fa-phone text-[#3b82f6]"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Telepon</h4>
                                <p class="text-gray-600">+62 21 1234 5678</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-[#3b82f6]/10 p-3 rounded-full mr-4">
                                <i class="fas fa-envelope text-[#3b82f6]"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Email</h4>
                                <p class="text-gray-600">info@namaperusahaan.com</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-4">Ikuti Kami</h4>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="bg-[#3b82f6] text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-[#1e40af] transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#"
                                class="bg-[#3b82f6] text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-[#1e40af] transition">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#"
                                class="bg-[#3b82f6] text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-[#1e40af] transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#"
                                class="bg-[#3b82f6] text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-[#1e40af] transition">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2">
                    <form class="bg-white p-8 rounded-xl shadow-lg">
                        <div class="mb-6">
                            <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                            <input type="text" id="nama"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="Masukkan nama lengkap Anda">
                        </div>

                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" id="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="Masukkan alamat email">
                        </div>

                        <div class="mb-6">
                            <label for="pesan" class="block text-gray-700 font-medium mb-2">Pesan</label>
                            <textarea id="pesan" rows="5"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-[#3b82f6] text-white py-3 rounded-lg font-medium hover:bg-[#1e40af] transition shadow-md">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection