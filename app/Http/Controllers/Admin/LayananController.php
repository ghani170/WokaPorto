<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanan = Layanan::all();
        return view('admin.layanan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'deskripsi_layanan' => 'required|string',
            'logo_layanan' => 'required|file|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        if ($request->hasFile('logo_layanan')) {
            $logo = $request->file('logo_layanan');

            // Gunakan hashName() untuk nama unik otomatis yang lebih aman
            $logoName = $logo->hashName();

            // Simpan file
            $logo->storeAs('layanan_logo', $logoName, 'public');
        }

        Layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'deskripsi_layanan' => $request->deskripsi_layanan,
            'logo_layanan' => $logoName,
        ]);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('admin.layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'deskripsi_layanan' => 'required|string',
            'logo_layanan' => 'nullable|file|mimes:jpg,jpeg,png,svg|max:2048',
        ]);

        $data = [
            'nama_layanan' => $request->nama_layanan,
            'deskripsi_layanan' => $request->deskripsi_layanan,
        ];

        if ($request->hasFile('logo_layanan')) {
            // Tentukan folder yang konsisten
            $folder = 'layanan_logo';

            // 1. Hapus gambar lama jika ada
            if ($layanan->logo_layanan && Storage::disk('public')->exists($folder . '/' . $layanan->logo_layanan)) {
                Storage::disk('public')->delete($folder . '/' . $layanan->logo_layanan);
            }

            // 2. Proses upload gambar baru
            $gambar = $request->file('logo_layanan');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();

            // Simpan ke folder yang sama
            $gambar->storeAs($folder, $namaGambar, 'public');

            // Masukkan nama file baru ke array data
            $data['logo_layanan'] = $namaGambar;
        }

        // 3. Update database
        $layanan->update($data);

        return redirect()
            ->route('admin.layanan.index')
            ->with('success', 'Layanan berhasil diperbarui');
    }

    public function destroy(Layanan $layanan)
    {
        // 1. Cek relasi proyek
        if ($layanan->projects()->count() > 0) {
            return redirect()
                ->route('admin.layanan.index')
                ->with('error', 'Layanan tidak dapat dihapus karena memiliki proyek terkait');
        }

        // 2. Hapus file logo dari storage jika ada
        // Sesuaikan nama folder dengan yang Anda gunakan (contoh: 'layanan_logo')
        $folder = 'layanan_logo';

        if ($layanan->logo_layanan && Storage::disk('public')->exists($folder . '/' . $layanan->logo_layanan)) {
            Storage::disk('public')->delete($folder . '/' . $layanan->logo_layanan);
        }

        // 3. Hapus data dari database
        $layanan->delete();

        return redirect()
            ->route('admin.layanan.index')
            ->with('success', 'Layanan dan logo berhasil dihapus');
    }
}
