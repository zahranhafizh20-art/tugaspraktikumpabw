@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <h2>Form Pelaporan Banjir</h2>
    <div class="card">
        <form action="{{ route('laporan.store') }}" method="POST">
            @csrf

            <label for="nama">Nama Pelapor</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama') <span class="error">{{ $message }}</span> @enderror

            <label for="lokasi">Lokasi Kejadian</label>
            <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}">
            @error('lokasi') <span class="error">{{ $message }}</span> @enderror

            <label for="tinggi">Tinggi Genangan Air (cm)</label>
            <input type="number" id="tinggi" name="tinggi" min="0" value="{{ old('tinggi') }}">
            @error('tinggi') <span class="error">{{ $message }}</span> @enderror

            <button type="submit">Kirim Laporan</button>
        </form>
    </div>
@endsection