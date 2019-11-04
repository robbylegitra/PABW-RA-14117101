<?php
require 'class.php';
$id = $_GET["id"];
if ($siswa->hapus($id)) {
    echo "<script>alert('Delete Data');</script>";
    echo "<script>location='tampilsiswa.php';</script>";
} else {
    echo "<script>alert('Failed');</script>";
    echo "<script>location='tampilsiswa.php';</script>";
}