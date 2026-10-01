<div class="card">
    <h3>{{ $laporan['nama'] }}</h3>
    <p><strong>Lokasi:</strong> {{ $laporan['lokasi'] }}</p>
    <p><strong>Tinggi genangan:</strong> {{ $laporan['tinggi'] }} cm</p>

    @if($laporan['tinggi'] < 30)
        <p>Status: <span class="badge waspada">Waspada</span></p>
    @elseif($laporan['tinggi'] <= 70)
        <p>Status: <span class="badge siaga">Siaga</span></p>
    @else
        <p>Status: <span class="badge awas">Awas</span></p>
    @endif
</div>