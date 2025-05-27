<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container py-5">
    <div class="row align-items-center g-5">
        <!-- Kolom Gambar -->
        <div class="col-lg-5">
            <img src="/img/jaringan.jpg" alt="Ilustrasi Buku Jaringan"
                class="img-fluid rounded-4 shadow-sm border border-2 border-light">
        </div>

        <!-- Kolom Konten -->
        <div class="col-lg-7">
            <h1 class="display-5 fw-bold text-dark mb-3">Tentang Aplikasi Buku Jaringan</h1>
            <p class="lead text-muted">
                Aplikasi <strong>Manajemen Buku Jaringan</strong> ini dirancang sebagai sistem katalog digital
                untuk mengelola koleksi buku-buku seputar jaringan komputer.
            </p>
            <p>
                Kami memahami pentingnya referensi yang baik untuk mendalami topik seperti:
                <strong>TCP/IP, Cisco, Network Security, Wireless Networks</strong>, dan teknologi jaringan lainnya.
            </p>

            <h5 class="fw-bold text-dark mt-4 mb-2">Fitur Unggulan:</h5>
            <ul class="list-unstyled ms-3">
                <li>📘 Tambahkan buku baru lengkap dengan <strong>cover, penulis, dan penerbit</strong></li>
                <li>🔍 Lihat detail buku yang informatif dan rapi</li>
                <li>✏️ Edit informasi buku dengan mudah</li>
                <li>🗑️ Hapus buku yang sudah tidak relevan</li>
            </ul>

            <p class="mt-3 text-muted">
                Aplikasi ini dibuat menggunakan framework <strong>CodeIgniter 4</strong>,
                dan cocok untuk <em>pelajar, mahasiswa, dosen</em>, serta <em>profesional di bidang TI</em>
                yang memerlukan sistem referensi buku jaringan yang praktis dan efisien.
            </p>
            <a href="/books" class="btn btn-primary px-4 py-2 mt-3">📚 Lihat Koleksi Buku</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>