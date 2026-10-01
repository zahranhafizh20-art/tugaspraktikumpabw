@extends('layouts.master')

@section('judul', 'Form Pelaporan')

@section('konten')
<div class="panel">
    <h2>Form Pelaporan Banjir</h2>
    <p class="sub">Isi data berikut untuk melaporkan kejadian banjir di wilayah Anda.</p>

    @if ($errors->any())
        <x-alert tipe="bahaya">
            <strong>Periksa kembali isian Anda:</strong>
            <ul>
                @foreach ($errors->all() as $pesan)
                    <li>{{ $pesan }}</li>
                @endforeach
            </ul>
        </x-alert>
    @endif

    <form action="{{ route('banjir.kirim') }}" method="POST">
        @csrf

        <div class="grup">
            <label for="nama">Nama Pelapor</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Contoh: Budi Santoso">
        </div>

        <div class="grup">
            <label for="lokasi">Lokasi Kejadian</label>
            <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" placeholder="Contoh: Dayeuhkolot">
        </div>

        <div class="grup">
            <label for="tinggi">Tinggi Genangan Air (cm)</label>
            <input type="number" id="tinggi" name="tinggi" value="{{ old('tinggi') }}" min="0" placeholder="Contoh: 50">
        </div>

        <button type="submit" class="tombol">Kirim Laporan</button>
    </form>
</div>
@endsection
