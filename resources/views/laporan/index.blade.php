@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
    <h2>Daftar Laporan Banjir</h2>

    @forelse($laporans as $laporan)
        @include('partials.laporan-card', ['laporan' => $laporan])
    @empty
        <x-laporan-alert type="error" message="Belum ada laporan banjir." />
    @endforelse
@endsection