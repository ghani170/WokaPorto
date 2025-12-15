@extends('layouts.app')
@section('title', 'Dashboard Admin')
@section('content')

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="dashboard-card glass-effect rounded-xl p-6 shadow-sm">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-500 text-sm">Total Pendapatan</p>
                    <h3 class="text-2xl font-bold mt-2">$24,580</h3>
                    <p class="text-green-500 text-sm mt-1">
                        <i class="fas fa-arrow-up mr-1"></i>
                        <span>12.5% dari bulan lalu</span>
                    </p>
                </div>
                <div class="p-3 rounded-lg bg-green-100 text-green-600">
                    <i class="fas fa-dollar-sign text-xl"></i>
                </div>
            </div>
        </div>

        <div class="dashboard-card glass-effect rounded-xl p-6 shadow-sm">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-500 text-sm">Total Pengguna</p>
                    <h3 class="text-2xl font-bold mt-2">5,842</h3>
                    <p class="text-blue-500 text-sm mt-1">
                        <i class="fas fa-arrow-up mr-1"></i>
                        <span>8.2% dari bulan lalu</span>
                    </p>
                </div>
                <div class="p-3 rounded-lg bg-blue-100 text-blue-600">
                    <i class="fas fa-users text-xl"></i>
                </div>
            </div>
        </div>

        <div class="dashboard-card glass-effect rounded-xl p-6 shadow-sm">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-500 text-sm">Total Pesanan</p>
                    <h3 class="text-2xl font-bold mt-2">1,259</h3>
                    <p class="text-yellow-500 text-sm mt-1">
                        <i class="fas fa-arrow-up mr-1"></i>
                        <span>3.7% dari bulan lalu</span>
                    </p>
                </div>
                <div class="p-3 rounded-lg bg-yellow-100 text-yellow-600">
                    <i class="fas fa-shopping-cart text-xl"></i>
                </div>
            </div>
        </div>

        <div class="dashboard-card glass-effect rounded-xl p-6 shadow-sm">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-500 text-sm">Tingkat Konversi</p>
                    <h3 class="text-2xl font-bold mt-2">4.8%</h3>
                    <p class="text-red-500 text-sm mt-1">
                        <i class="fas fa-arrow-down mr-1"></i>
                        <span>1.5% dari bulan lalu</span>
                    </p>
                </div>
                <div class="p-3 rounded-lg bg-red-100 text-red-600">
                    <i class="fas fa-percentage text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Tables -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
        <!-- Chart -->
        <div class="glass-effect rounded-xl p-6 shadow-sm">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-bold">Performa Penjualan</h3>
                <div class="flex space-x-2">
                    <button class="text-sm px-3 py-1 bg-primary-100 text-primary-600 rounded-lg">Bulanan</button>
                    <button class="text-sm px-3 py-1 bg-gray-100 text-gray-600 rounded-lg">Tahunan</button>
                </div>
            </div>
            <div class="chart-container">
                <!-- Chart bars -->
                <div class="h-full flex items-end justify-between pt-10">
                    <div class="flex flex-col items-center">
                        <div class="w-10 bg-gradient-to-t from-primary-500 to-primary-300 rounded-t-lg mb-2"
                            style="height: 70%"></div>
                        <span class="text-xs text-gray-500">Sen</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-10 bg-gradient-to-t from-primary-500 to-primary-300 rounded-t-lg mb-2"
                            style="height: 90%"></div>
                        <span class="text-xs text-gray-500">Sel</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-10 bg-gradient-to-t from-primary-500 to-primary-300 rounded-t-lg mb-2"
                            style="height: 60%"></div>
                        <span class="text-xs text-gray-500">Rab</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-10 bg-gradient-to-t from-primary-500 to-primary-300 rounded-t-lg mb-2"
                            style="height: 85%"></div>
                        <span class="text-xs text-gray-500">Kam</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-10 bg-gradient-to-t from-primary-500 to-primary-300 rounded-t-lg mb-2"
                            style="height: 95%"></div>
                        <span class="text-xs text-gray-500">Jum</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-10 bg-gradient-to-t from-secondary-500 to-secondary-300 rounded-t-lg mb-2"
                            style="height: 80%"></div>
                        <span class="text-xs text-gray-500">Sab</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-10 bg-gradient-to-t from-secondary-500 to-secondary-300 rounded-t-lg mb-2"
                            style="height: 70%"></div>
                        <span class="text-xs text-gray-500">Min</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-between mt-6 pt-6 border-t border-gray-100">
                <div>
                    <p class="text-gray-500 text-sm">Pendapatan Tertinggi</p>
                    <p class="font-bold">$4,850</p>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Rata-rata Harian</p>
                    <p class="font-bold">$1,258</p>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Pertumbuhan</p>
                    <p class="font-bold text-green-500">+12.5%</p>
                </div>
            </div>
        </div>

        <!-- Recent Orders -->
        <div class="glass-effect rounded-xl p-6 shadow-sm">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-bold">Pesanan Terbaru</h3>
                <a href="#" class="text-primary-600 text-sm font-medium">Lihat Semua</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-left text-gray-500 text-sm border-b">
                            <th class="pb-3">Pelanggan</th>
                            <th class="pb-3">Tanggal</th>
                            <th class="pb-3">Jumlah</th>
                            <th class="pb-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-100">
                            <td class="py-4">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-gray-200 rounded-full mr-3"></div>
                                    <span>Michael Scott</span>
                                </div>
                            </td>
                            <td class="py-4">12 Jun 2023</td>
                            <td class="py-4 font-medium">$245.99</td>
                            <td class="py-4">
                                <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">Selesai</span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-4">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-gray-200 rounded-full mr-3"></div>
                                    <span>Pam Beesly</span>
                                </div>
                            </td>
                            <td class="py-4">11 Jun 2023</td>
                            <td class="py-4 font-medium">$128.50</td>
                            <td class="py-4">
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-600 rounded-full text-xs">Diproses</span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-4">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-gray-200 rounded-full mr-3"></div>
                                    <span>Jim Halpert</span>
                                </div>
                            </td>
                            <td class="py-4">10 Jun 2023</td>
                            <td class="py-4 font-medium">$89.99</td>
                            <td class="py-4">
                                <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">Selesai</span>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-4">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-gray-200 rounded-full mr-3"></div>
                                    <span>Dwight Schrute</span>
                                </div>
                            </td>
                            <td class="py-4">9 Jun 2023</td>
                            <td class="py-4 font-medium">$342.00</td>
                            <td class="py-4">
                                <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs">Dikirim</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-gray-200 rounded-full mr-3"></div>
                                    <span>Andy Bernard</span>
                                </div>
                            </td>
                            <td class="py-4">8 Jun 2023</td>
                            <td class="py-4 font-medium">$76.50</td>
                            <td class="py-4">
                                <span class="px-3 py-1 bg-red-100 text-red-600 rounded-full text-xs">Dibatalkan</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bottom Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Activity -->
        <div class="lg:col-span-2 glass-effect rounded-xl p-6 shadow-sm">
            <h3 class="text-lg font-bold mb-6">Aktivitas Terbaru</h3>
            <div class="space-y-6">
                <div class="flex">
                    <div class="mr-4">
                        <div
                            class="w-10 h-10 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-user-plus"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium">Pengguna baru terdaftar</p>
                        <p class="text-gray-500 text-sm">John Doe telah bergabung sebagai pengguna premium</p>
                        <p class="text-gray-400 text-xs mt-1">2 jam yang lalu</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4">
                        <div class="w-10 h-10 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium">Pesanan baru</p>
                        <p class="text-gray-500 text-sm">Pesanan #ORD-7890 telah dibuat dengan total $245.99</p>
                        <p class="text-gray-400 text-xs mt-1">4 jam yang lalu</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4">
                        <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium">Laporan dihasilkan</p>
                        <p class="text-gray-500 text-sm">Laporan performa bulan Mei 2023 telah tersedia</p>
                        <p class="text-gray-400 text-xs mt-1">1 hari yang lalu</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Progress -->
        <div class="glass-effect rounded-xl p-6 shadow-sm">
            <h3 class="text-lg font-bold mb-6">Target Bulanan</h3>
            <div class="space-y-6">
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-700">Target Pendapatan</span>
                        <span class="font-bold">75%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-primary-500 h-2 rounded-full" style="width: 75%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-700">Target Pengguna</span>
                        <span class="font-bold">90%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-500 h-2 rounded-full" style="width: 90%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-700">Target Pesanan</span>
                        <span class="font-bold">60%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-yellow-500 h-2 rounded-full" style="width: 60%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-700">Kepuasan Pelanggan</span>
                        <span class="font-bold">85%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-purple-500 h-2 rounded-full" style="width: 85%"></div>
                    </div>
                </div>
            </div>
            <button
                class="mt-8 w-full bg-primary-600 hover:bg-primary-700 text-white rounded-lg py-3 font-medium transition duration-200">
                Lihat Detail Target
            </button>
        </div>
    </div>

@endsection