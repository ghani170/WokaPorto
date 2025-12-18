<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woka Project | @yield('title')</title>

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
                <a href="{{ route('home') }}#portofolio" class="text-xl font-bold text-blue-600 hover:text-blue-700 transition">
                    <i class="fas fa-arrow-left mr-2"></i> Home
                </a>
                <a href="#" class="text-2xl font-bold text-secondary">
                    <span class="text-primary">Woka</span>Project
                </a>
            </div>
        </div>
    </nav>

    @yield('content')


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
                            <li><a href="#tentang" class="text-gray-400 hover:text-white transition">Tentang Kami</a>
                            </li>
                            <li><a href="#layanan" class="text-gray-400 hover:text-white transition">Layanan</a></li>
                            <li><a href="#portofolio" class="text-gray-400 hover:text-white transition">Portofolio</a>
                            </li>
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