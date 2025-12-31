@extends('layouts.app')
@section('title', 'Dashboard Admin')
@section('content')

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-md p-4">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-600">Total Project</p>
                    <h4 class="text-2xl font-semibold">{{ $totalProjects }}</h4>
                </div>
                <div class="bg-blue-800 text-white p-3 rounded-lg shadow">
                    <i class="fa-solid fa-folder-open px-1 py-1"></i>
                </div>
            </div>

            <hr class="my-3">

            <p class="text-sm">
                <span class="font-semibold text-green-600"><a href="{{ route('admin.project.index') }}">Lihat Project</a></span>
            </p>
        </div>

        <div class="bg-white rounded-xl shadow-md p-4">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-600">Total Layanan</p>
                    <h4 class="text-2xl font-semibold">{{ $totalLayanans }}</h4>
                </div>
                <div class="bg-blue-800 text-white p-3 rounded-lg shadow">
                    <i class="fa-solid fa-folder-open px-1 py-1"></i>
                </div>
            </div>

            <hr class="my-3">

            <p class="text-sm">
                <span class="font-semibold text-green-600"><a href="{{ route('admin.layanan.index') }}">Lihat Layanan
        </a></span> 
            </p>
        </div>

        <div class="bg-white rounded-xl shadow-md p-4">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-600">Total Resources</p>
                    <h4 class="text-2xl font-semibold">{{ $totalResources }}</h4>
                </div>
                <div class="bg-blue-800 text-white p-3 rounded-lg shadow">
                    <i class="fa-solid fa-folder-open px-1 py-1"></i>
                </div>
            </div>

            <hr class="my-3">

            <p class="text-sm">
                <span class="font-semibold text-green-600"><a href="{{ route('admin.resource.index') }}">Lihat Resources
        </a></span> 
            </p>
        </div>


    </div>

    <!-- Charts and Tables -->
    <div class="mt-8 bg-white rounded-xl shadow-md p-6">
        <h3 class="text-xl font-semibold mb-4 text-gray-700">Jumlah Project Updated Per Hari (7 Hari Terakhir)</h3>
        <hr class="mb-4">
        <div class="relative h-96">
            <canvas id="reportsPerDayChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const reportsPerDayLabels = {!! json_encode($reportsPerDayLabels ?? []) !!};
            const reportsPerDayData = {!! json_encode($reportsPerDayData ?? []) !!};

            const lineCtx = document.getElementById('reportsPerDayChart'); // ID canvas baru

            // Buat Grafik Garis (Line Chart)
            new Chart(lineCtx, {
                type: 'line',
                data: {
                    labels: reportsPerDayLabels,
                    datasets: [{
                        label: 'Laporan Baru Masuk',
                        data: reportsPerDayData,
                        borderColor: 'rgb(59, 130, 246)', // Warna garis (Biru Tailwind-500)
                        backgroundColor: 'rgba(59, 130, 246, 0.2)', // Area di bawah garis
                        tension: 0.3, // Kehalusan garis
                        fill: true, // Mengisi area di bawah garis
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Jumlah Laporan'
                            },
                            ticks: {
                                precision: 0 // Pastikan nilai Y adalah bilangan bulat
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Tanggal'
                            }
                        }
                    }
                }
            });
    </script>

@endsection