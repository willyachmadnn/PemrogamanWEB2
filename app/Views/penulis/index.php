<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">

    <div class="row mt-2">
        <div class="col">
            <h2>Daftar Penulis</h2>
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan kata kunci" name="keyword"
                        value="<?= esc($keyword) ?>">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (10 * ($pageSekarang - 1)) ?>
                    <?php foreach ($penulis as $p): ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= esc($p['name']); ?></td>
                            <td><?= esc($p['address']); ?></td>
                            <td><a href="#" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?= $pager->links('penulis', 'penulis_pager'); ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>