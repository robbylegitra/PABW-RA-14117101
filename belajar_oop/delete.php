<?php
include 'class.php';
$id = $_GET["id"];
if ($siswa->hapus($id)) {
    echo "<script>alert('Delete Data');</script>";
    echo "<script>location='tampilsiswa.php';</script>";
}
