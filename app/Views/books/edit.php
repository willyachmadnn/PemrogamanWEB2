<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Edit Data Buku</h2>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>

            <form action="/books/update/<?= $buku['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $buku['slug']; ?>">
                <input type="hidden" name="sampulLama" value="<?= $buku['sampul']; ?>">

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" value="<?= old('judul', $buku['judul']); ?>"
                        class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>">
                    <div class="invalid-feedback"><?= $validation->getError('judul'); ?></div>
                </div>

                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" name="penulis" value="<?= old('penulis', $buku['penulis']); ?>"
                        class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>">
                    <div class="invalid-feedback"><?= $validation->getError('penulis'); ?></div>
                </div>

                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" name="penerbit" value="<?= old('penerbit', $buku['penerbit']); ?>"
                        class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>">
                    <div class="invalid-feedback"><?= $validation->getError('penerbit'); ?></div>
                </div>

                <div class="mb-3">
                    <label for="sampul" class="form-label">Sampul</label>
                    <input type="file" name="sampul" id="sampul"
                        class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>">
                    <div class="invalid-feedback"><?= $validation->getError('sampul'); ?></div>
                </div>

                <button type="submit" class="btn btn-primary text-dark fw-semibold">Edit Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>