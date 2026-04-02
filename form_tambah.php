<?= $this->include('template/header'); ?>

<h2>Tambah Artikel</h2>

<form method="post" action="<?= site_url('artikel/simpan'); ?>">

<label>Judul</label><br>
<input type="text" name="judul" required><br><br>

<label>Isi</label><br>
<textarea name="isi" required></textarea><br><br>

<button type="submit">Simpan</button>

</form>

<?= $this->include('template/footer'); ?>