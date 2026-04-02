<h1>Edit Artikel</h1>

<form method="post" action="/artikel/update/<?= $artikel['id']; ?>">

Judul:<br>
<input type="text" name="judul" value="<?= $artikel['judul']; ?>"><br><br>

Isi:<br>
<textarea name="isi"><?= $artikel['isi']; ?></textarea><br><br>

<button type="submit">Update</button>

</form>