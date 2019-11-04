<h2>Update</h2>
<form method="POST" enctype=multipart/form-data> <label>Nama</label>
    <input type="text" name="nm" value="<?php echo $nama ?>"><br>
    <label>Alamat</label>
    <textarea name="alamat" value="<?php echo $alamat ?>" required="requered"></textarea><br>
    <label>Foto</label>
    <input type="file" name="foto"><br>

    <button type="submit" name="kirim">Simpan</button>
</form>

<?php
include 'class.php';
$id = $_GET["id"];
if (isset($_POST['kirim'])) {
    $siswa->UPDATE($_POST['nm'], $_POST['alamat'], $_FILES['foto'], $id);
    echo "<script>alert('Update Data');</script>";
    echo "<script>location='tampilsiswa.php';</script>";
}
$mahasiswa = $siswa->siswa($id);
foreach ($mahasiswa as $value) {
    $nama = $value['nama'];
    $alamat = $value['alamat'];
}
?>
