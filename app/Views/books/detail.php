<?= $this->include('template/header') ?>
<h2><?= $book['judul']; ?></h2>
<p><strong>Penulis:</strong> <?= $book['penulis']; ?></p>
<img src="/img/<?= $book['cover']; ?>" width="250">
<?= $this->include('template/footer') ?>