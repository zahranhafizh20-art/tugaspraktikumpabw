@extends('layouts.master')

@section('judul', 'Daftar Laporan')

@section('konten')
<h2>Daftar Laporan Banjir</h2>
<p class="sub">Contoh laporan yang masuk ke sistem.</p>

<div class="grid">
    @forelse ($daftarLaporan as $item)
        @include('partials.kartu-laporan', ['laporan' => $item])
    @empty
        <p class="kosong">Belum ada laporan banjir.</p>
    @endforelse
</div>
@endsection
