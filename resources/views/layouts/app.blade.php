<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                        },
                        secondary: {
                            500: '#8b5cf6',
                            600: '#7c3aed',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .glass-effect {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .chart-container {
            position: relative;
            height: 250px;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        .dark-mode {
            background-color: #0f172a;
            color: #f8fafc;
        }

        .dark-mode .glass-effect {
            background: rgba(30, 41, 59, 0.7);
            border-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="h-screen flex flex-col">
        <header class="backdrop-blur-lg sticky top-0 z-10 shadow-sm">

            <header class="bg-white/70 backdrop-blur-lg sticky top-0 z-10 shadow-sm">
                <div class="px-6 py-4 flex justify-between items-center">
                    <div class="flex items-center space-x-3">
                        <div class="p-2 bg-primary-500 rounded-lg">
                            <i class="fas fa-chart-line text-white text-xl"></i>
                        </div>
                        <h1 class="text-2xl font-bold text-primary-700">Woka<span class="text-blue-500">Porto</span>
                        </h1>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="hidden md:flex items-center space-x-2 bg-white rounded-full px-4 py-2 shadow-sm">
                            <i class="fas fa-search text-gray-400"></i>
                            <input type="text" placeholder="Search..." class="outline-none bg-transparent">
                        </div>

                        <button id="theme-toggle" class="p-2 rounded-full bg-gray-100 hover:bg-gray-200">
                            <i class="fas fa-moon text-gray-700"></i>
                        </button>

                        <div class="relative">
                            <button class="flex items-center space-x-2">
                                <div
                                    class="w-10 h-10 bg-linier-to-r from-primary-500 to-secondary-500 rounded-full flex items-center justify-center text-white font-bold">
                                    JD
                                </div>
                                <span class="hidden md:inline font-medium">John Doe</span>
                                <i class="fas fa-chevron-down text-gray-500"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
        </header>

        <div class="flex flex-1 overflow-hidden">
            <aside class="hidden lg:flex flex-col w-64 glass-effect shadow-sm">
                <nav class="flex-1 p-6">
                    <h2 class="text-lg font-semibold text-gray-500 mb-4">MENU UTAMA</h2>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('admin.dashboard') }}"
                                class="flex font-semibold items-center space-x-3 p-3 hover:bg-gray-100 rounded-2xl {{ request()->routeIs('admin.dashboard*') ? 'bg-white/20 backdrop-blur-lg rounded-xl shadow-lg text-blue-600 border border-white/30' : '' }}">
                                <i class="fas fa-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.resource.index') }}"
                                class="flex font-semibold items-center space-x-3 p-3 hover:bg-gray-100 rounded-2xl {{ request()->routeIs('admin.resource*') ? 'bg-white/20 backdrop-blur-lg rounded-xl shadow-lg text-blue-600 border border-white/30' : '' }}">
                                <i class="fa-brands fa-buffer fa-lg"></i>
                                <span>Kelola Resource</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.layanan.index') }}"
                                class="flex font-semibold items-center space-x-3 p-3 hover:bg-gray-100 rounded-2xl {{ request()->routeIs('admin.layanan*') ? 'bg-white/20 backdrop-blur-lg rounded-xl shadow-lg text-blue-600 border border-white/30' : '' }}">
                                <i class="fa-solid fa-hands-bound"></i>
                                <span>Kelola Layanan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.project.index') }}"
                                class="flex font-semibold items-center space-x-3 p-3 hover:bg-gray-100 rounded-2xl {{ request()->routeIs('admin.project*') ? 'bg-white/20 backdrop-blur-lg rounded-xl shadow-lg text-blue-600 border border-white/30' : '' }}">
                                <i class="fa-solid fa-diagram-project"></i>
                                <span>Kelola Project</span>
                            </a>
                        </li>
                    </ul>

                    <h2 class="text-lg font-semibold text-gray-500 mb-4 mt-10">ANALYTICS</h2>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100">
                                <i class="fas fa-chart-pie"></i>
                                <span>Reports</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100">
                                <i class="fas fa-bell"></i>
                                <span>Notifications</span>
                                <span class="ml-auto bg-red-500 text-white text-xs rounded-full px-2 py-1">5</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <button id="mobile-menu-toggle"
                class="lg:hidden fixed bottom-6 right-6 z-20 bg-primary-500 text-black p-4 rounded-full shadow-lg">
                <i class="fas fa-bars text-xl"></i>
            </button>

            <main class="flex-1 p-6 overflow-y-auto">
                @yield('content')
            </main>
        </div>


    </div>

    <script>
        // Set current date
        const now = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        // Perbaikan: elemen dengan id 'current-date' tidak ada di HTML yang disediakan, namun script tetap dibiarkan sesuai permintaan
        // document.getElementById('current-date').textContent = now.toLocaleDateString('id-ID', options);


        // Theme toggle
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = themeToggle.querySelector('i');

        themeToggle.addEventListener('click', function () {
            document.body.classList.toggle('dark-mode');

            if (document.body.classList.contains('dark-mode')) {
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
            } else {
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
            }
        });

        // Mobile menu toggle
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const sidebar = document.querySelector('aside');

        mobileMenuToggle.addEventListener('click', function () {
            sidebar.classList.toggle('hidden');
            sidebar.classList.toggle('flex');
            sidebar.classList.toggle('fixed');
            sidebar.classList.toggle('inset-0');
            sidebar.classList.toggle('z-10');
        });

        // Add hover effect to dashboard cards
        document.querySelectorAll('.dashboard-card').forEach(card => {
            card.addEventListener('mouseenter', function () {
                this.style.transform = 'translateY(-5px)';
            });

            card.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(0)';
            });
        });

        // Simulate chart animation
        setTimeout(() => {
            document.querySelectorAll('.chart-container .bg-gradient-to-t').forEach((bar, index) => {
                bar.style.transition = 'height 1s ease';
                bar.style.transitionDelay = `${index * 0.1}s`;
            });
        }, 500);
    </script>
</body>

</html>