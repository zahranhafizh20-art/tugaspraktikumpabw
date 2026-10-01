@php
    $tinggi = $laporan['tinggi'];
@endphp

<div class="kartu">
    <div class="kartu-atas">
        <h3>{{ $laporan['lokasi'] }}</h3>

        @if ($tinggi < 30)
            <span class="badge badge-waspada">Waspada</span>
        @elseif ($tinggi <= 70)
            <span class="badge badge-siaga">Siaga</span>
        @else
            <span class="badge badge-awas">Awas</span>
        @endif
    </div>

    <p class="kartu-info">Pelapor: <strong>{{ $laporan['nama'] }}</strong></p>
    <p class="kartu-info">Tinggi genangan: <strong>{{ $tinggi }} cm</strong></p>

    @isset($laporan['waktu'])
        <p class="kartu-waktu">🕒 {{ $laporan['waktu'] }}</p>
    @endisset
</div>
