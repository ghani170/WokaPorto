<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\Project;
use App\Models\Resource;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $totalProjects = Project::count();
        $totalLayanans = Layanan::count();
        $totalResources = Resource::count();
        $startDate = Carbon::today()->subDays(6)->startOfDay();

            // 2. Ambil data laporan, hitung per tanggal
            $reports = Project::selectRaw('DATE(updated_at) as date, COUNT(*) as count')
                ->where('updated_at', '>=', $startDate)
                ->groupBy('date')
                ->orderBy('date', 'asc')
                ->get()
                ->keyBy('date');

            // 3. Siapkan array lengkap (Label Tanggal dan Data Jumlah)
            $reportsPerDayLabels = [];
            $reportsPerDayData = [];

            // Loop selama 7 hari untuk memastikan label dan data berurutan
            for ($i = 0; $i < 7; $i++) {
                $date = Carbon::today()->subDays(6 - $i)->format('Y-m-d');
                // Label Tanggal (Contoh: '25 Nov')
                $label = Carbon::parse($date)->format('d M');
                // Ambil jumlah laporan, jika tidak ada, nilainya 0
                $count = $reports->get($date)->count ?? 0;

                $reportsPerDayLabels[] = $label;
                $reportsPerDayData[] = $count;
            }
        return view('admin.dashboard', compact('totalProjects', 'totalLayanans', 'totalResources', 'reportsPerDayLabels', 'reportsPerDayData'));
    }
}
