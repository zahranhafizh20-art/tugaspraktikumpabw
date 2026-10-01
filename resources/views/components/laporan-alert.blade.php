<div class="laporan-alert {{ $type === 'error' ? 'laporan-alert-error' : 'laporan-alert-success' }}">
    <strong>{{ $type === 'error' ? '✖' : '✔' }} {{ ucfirst($type) }}:</strong> {{ $message }}
</div>