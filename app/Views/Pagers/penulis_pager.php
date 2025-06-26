<nav>
    <ul class="pagination">
        <?php if ($pager->hasPrevious()): ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getFirst('penulis') ?>">&laquo;</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getPrevious('penulis') ?>">&lt;</a>
            </li>
        <?php endif; ?>

        <?php foreach ($pager->links('penulis') as $link): ?>
            <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                <a class="page-link" href="<?= $link['uri'] ?>"><?= $link['title'] ?></a>
            </li>
        <?php endforeach; ?>

        <?php if ($pager->hasNext()): ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getNext('penulis') ?>">&gt;</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getLast('penulis') ?>">&raquo;</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>