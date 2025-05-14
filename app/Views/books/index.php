<?= $this->include('template/header') ?>
<h2>Daftar Buku</h2>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= $book['judul']; ?></td>
            <td><?= $book['penulis']; ?></td>
            <td><a href="/books/<?= $book['slug']; ?>">Detail</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->include('template/footer') ?>