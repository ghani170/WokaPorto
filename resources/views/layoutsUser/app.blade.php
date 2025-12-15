<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woka Project | @yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#1e40af',
                        accent: '#f59e0b',
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="font-['Poppins', 'sans-serif'] text-gray-800">
    <!-- Navigasi -->
    <nav class="fixed w-full bg-white/30 backdrop-blur-lg shadow-sm z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-[#3b82f6]">
                        <span class="text-[#1e40af]">Woka</span>Project
                    </a>
                </div>
                
                <!-- Menu desktop -->
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="font-medium text-[#3b82f6] hover:text-[#1e40af] transition">Beranda</a>
                    <a href="#tentang" class="font-medium text-gray-600 hover:text-[#3b82f6] transition">Tentang</a>
                    <a href="#layanan" class="font-medium text-gray-600 hover:text-[#3b82f6] transition">Layanan</a>
                    <a href="#portofolio" class="font-medium text-gray-600 hover:text-[#3b82f6] transition">Portofolio</a>
                    <a href="#kontak" class="font-medium text-gray-600 hover:text-[#3b82f6] transition">Kontak</a>
                </div>
                
                <div class="hidden md:block">
                    <a href="#kontak" class="bg-[#3b82f6] text-white px-6 py-2 rounded-lg font-medium hover:bg-[#1e40af] transition shadow-md">
                        Hubungi Kami
                    </a>
                </div>
                
                <!-- Menu mobile -->
                <button id="mobile-menu-button" class="md:hidden text-gray-700">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
            
            <!-- Menu mobile dropdown -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                <a href="#" class="block py-2 font-medium text-[#3b82f6]">Beranda</a>
                <a href="#tentang" class="block py-2 font-medium text-gray-600">Tentang</a>
                <a href="#layanan" class="block py-2 font-medium text-gray-600">Layanan</a>
                <a href="#portofolio" class="block py-2 font-medium text-gray-600">Portofolio</a>
                <a href="#kontak" class="block py-2 font-medium text-gray-600">Kontak</a>
                <a href="#kontak" class="block mt-4 bg-[#3b82f6] text-white px-6 py-2 rounded-lg font-medium text-center w-40">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </nav>

    @yield('content')

    

    <!-- Footer -->
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

    <script>
        // Toggle mobile menu
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
            
            // Ganti ikon menu
            const icon = this.querySelector('i');
            if (icon.classList.contains('fa-bars')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
        
        // Smooth scroll untuk tautan navigasi
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    // Tutup menu mobile jika terbuka
                    const mobileMenu = document.getElementById('mobile-menu');
                    const menuButtonIcon = document.querySelector('#mobile-menu-button i');
                    
                    if(!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        menuButtonIcon.classList.remove('fa-times');
                        menuButtonIcon.classList.add('fa-bars');
                    }
                    
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>