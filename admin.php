<?= $this->include('template/header'); ?>

<h2>Admin Artikel</h2>

<a href="/artikel/tambah"><button>+ Tambah Artikel</button></a>

<br><br>

<table>
<tr>
<th>ID</th>
<th>Judul</th>
<th>Aksi</th>
</tr>

<?php foreach($artikel as $row): ?>
<tr>
<td><?= $row['id']; ?></td>
<td><?= $row['judul']; ?></td>
<td>
<a href="/artikel/edit/<?= $row['id']; ?>">Edit</a> |
<a href="/artikel/hapus/<?= $row['id']; ?>">Hapus</a>
</td>
</tr>
<?php endforeach; ?>

</table>

<?= $this->include('template/footer'); ?>