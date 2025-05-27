<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container py-5">
    <h1>BIODATA</h1>

    <ul>
        <li><strong>Nama:</strong> <?= $nama; ?></li>
        <li><strong>Umur:</strong> <?= $umur; ?> Tahun</li>
        <li><strong>Alamat:</strong> <?= $alamat; ?></li>
        <li><strong>Email:</strong> <?= $email; ?></li>
        <li><strong>Status:</strong> <?= $status; ?></li>
    </ul>
</div>


<?= $this->endSection(); ?>