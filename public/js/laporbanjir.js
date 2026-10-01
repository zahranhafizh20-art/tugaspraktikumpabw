// Validasi sederhana untuk form pelaporan banjir
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('formLaporBanjir');
    const pesanError = document.getElementById('pesanError');

    if (!form) return;

    form.addEventListener('submit', function (e) {
        const nama = document.getElementById('nama').value.trim();
        const lokasi = document.getElementById('lokasi').value.trim();
        const tinggiAir = document.getElementById('tinggi_air').value;

        pesanError.textContent = '';

        if (nama === '' || lokasi === '' || tinggiAir === '') {
            e.preventDefault();
            pesanError.textContent = 'Semua kolom wajib diisi sebelum laporan dikirim.';
            return;
        }

        if (Number(tinggiAir) < 0) {
            e.preventDefault();
            pesanError.textContent = 'Tinggi genangan air tidak boleh bernilai negatif.';
            return;
        }
    });
});
