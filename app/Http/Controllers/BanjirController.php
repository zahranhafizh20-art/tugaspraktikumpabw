<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanjirController extends Controller
{
    // Halaman form pelaporan
    public function form()
    {
        return view('halaman.form-laporan');
    }

    // Proses POST form -> redirect ke konfirmasi
    public function kirim(Request $request)
    {
        $data = $request->validate([
            'nama'   => 'required|string|max:100',
            'lokasi' => 'required|string|max:150',
            'tinggi' => 'required|numeric|min:0',
        ], [
            'required' => ':attribute wajib diisi.',
            'numeric'  => ':attribute harus berupa angka.',
            'min'      => ':attribute tidak boleh negatif.',
        ], [
            'nama'   => 'Nama pelapor',
            'lokasi' => 'Lokasi kejadian',
            'tinggi' => 'Tinggi genangan',
        ]);

        return redirect()->route('banjir.konfirmasi')->with('laporan_baru', $data);
    }

    // Halaman konfirmasi
    public function konfirmasi()
    {
        $laporan = session('laporan_baru');

        if (!$laporan) {
            return redirect()->route('banjir.form');
        }

        return view('halaman.konfirmasi', compact('laporan'));
    }

    // Halaman daftar laporan (data dummy berupa array)
    public function daftar()
    {
        $daftarLaporan = [
            ['nama' => 'Budi Santoso',  'lokasi' => 'Dayeuhkolot',  'tinggi' => 85, 'waktu' => '2 Okt 2026, 06:30'],
            ['nama' => 'Siti Aminah',   'lokasi' => 'Baleendah',    'tinggi' => 55, 'waktu' => '2 Okt 2026, 07:15'],
            ['nama' => 'Agus Salim',    'lokasi' => 'Bojongsoang',  'tinggi' => 20, 'waktu' => '2 Okt 2026, 08:00'],
            ['nama' => 'Rina Marlina',  'lokasi' => 'Rancaekek',    'tinggi' => 70, 'waktu' => '2 Okt 2026, 08:45'],
        ];

        return view('halaman.daftar-laporan', compact('daftarLaporan'));
    }
}
