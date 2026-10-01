@extends('layouts.master')

@section('judul', 'Konfirmasi')

@section('konten')
<div class="panel">
    <x-alert tipe="sukses">
        Laporan banjir Anda berhasil dikirim. Terima kasih atas partisipasi Anda!
    </x-alert>

    <h2>Data yang Anda Kirim</h2>

    <table class="tabel">
        <tr><th>Nama Pelapor</th><td>{{ $laporan['nama'] }}</td></tr>
        <tr><th>Lokasi Kejadian</th><td>{{ $laporan['lokasi'] }}</td></tr>
        <tr><th>Tinggi Genangan</th><td>{{ $laporan['tinggi'] }} cm</td></tr>
    </table>

    <div class="aksi">
        <a href="{{ route('banjir.form') }}" class="tombol tombol-garis">Buat Laporan Lagi</a>
        <a href="{{ route('banjir.daftar') }}" class="tombol">Lihat Daftar Laporan</a>
    </div>
</div>
@endsection
