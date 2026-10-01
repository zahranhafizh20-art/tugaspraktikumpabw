@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <h2>Konfirmasi Laporan</h2>

    <x-laporan-alert type="success" message="Laporan banjir berhasil dikirim." />

    <div class="card">
        <p><strong>Nama pelapor:</strong> {{ $laporan['nama'] }}</p>
        <p><strong>Lokasi kejadian:</strong> {{ $laporan['lokasi'] }}</p>
        <p><strong>Tinggi genangan:</strong> {{ $laporan['tinggi'] }} cm</p>
    </div>

    <a class="btn" href="{{ route('laporan.index') }}">Lihat Daftar Laporan</a>
    <a class="btn" href="{{ route('laporan.create') }}">Kirim Laporan Lagi</a>
@endsection