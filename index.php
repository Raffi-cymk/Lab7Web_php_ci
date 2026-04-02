<?= $this->include('template/header'); ?>

<h2>Daftar Artikel</h2>

<?php foreach($artikel as $row): ?>

<div class="card">
<h3>
<a href="/artikel/detail/<?= $row['slug']; ?>">
<?= $row['judul']; ?>
</a>
</h3>

<p><?= substr($row['isi'], 0, 100); ?>...</p>
</div>

<?php endforeach; ?>

<?= $this->include('template/footer'); ?>