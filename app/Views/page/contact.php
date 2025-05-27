<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container py-5">
    <div class="row g-5 align-items-start">
        <!-- Kontak Info -->
        <div class="col-lg-6">
            <h1 class="display-6 fw-bold text-dark mb-3">Hubungi Kami</h1>
            <p class="mt-4 text-muted">
                Apakah Anda memiliki saran, pertanyaan, atau tertarik menjalin kerja sama dalam pengelolaan koleksi buku
                dan komik? Kami senang mendengar kabar dari Anda!
            </p>
            <ul class="list-unstyled fs-5 mt-4">
                <li><strong>Email:</strong> jarlokafuniv.ac.id</li>
                <li><strong>WhatsApp:</strong> +62 811-9923-7743</li>
                <li><strong>Instagram:</strong> @jarlokaf.id</li>
            </ul>
            <p class="mt-4 text-muted">
                Jangan ragu menghubungi kami kapan saja! Kami terbuka terhadap berbagai masukan, ide menarik, atau
                sekadar ingin berbagi koleksi buku dan komik favoritmu.
            </p>
        </div>

        <!-- Form Kirim Pesan -->
        <div class="col-lg-6">
            <h5 class="fw-bold text-dark mb-3">Kirim Pesan</h5>
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control shadow-sm" id="nama" placeholder="Nama lengkap">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control shadow-sm" id="email" placeholder="Alamat email">
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea class="form-control shadow-sm" id="pesan" rows="4"
                        placeholder="Tuliskan pesan Anda..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary px-4 py-2">Kirim</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>