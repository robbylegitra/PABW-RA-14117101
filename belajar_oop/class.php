<?php
$mysqli = new mysqli("localhost", "root", "", "mahasiswa");
class siswa
{
	public $koneksi;
	function __construct($mysqli)
	{
		$this->koneksi = $mysqli;
	}
	function set_siswa()
	{
		$ambildata = $this->koneksi->query("select * from siswa");
		while ($pecah = $ambildata->fetch_assoc()) {
			$data[] = $pecah;
		}
		return $data;
	}
	function get_siswa($nama, $alamat, $foto)
	{
		$namafoto = $foto['name'];
		$lokasifoto = $foto['tmp_name'];
		move_uploaded_file($lokasifoto, "foto/$namafoto");
		$this->koneksi->query("insert into siswa (nama,alamat,foto) values ('$nama','$alamat','$namafoto')");
	}
	function hapus($id)
	{
		$hapus = $this->koneksi->query("DELETE FROM siswa WHERE siswa.id_siswa = $id");
		return $hapus;
	}
	function query($query)
	{
		$ambildata = $this->koneksi->query("SELECT FROM siswa WHERE siswa.id_siswa = $query");
		while ($pecah = $ambildata->fetch_assoc()) {
			$data[] = $pecah;
		}
		return $data;
	}
	function update($nama, $alamat, $foto, $id)
	{
		$namafoto = $foto['name'];
		$lokasifoto = $foto['tmp_name'];
		move_uploaded_file($lokasifoto, "foto/$namafoto");
		$this->koneksi->query("UPDATE siswa SET id_siswa = '$id' ,nama= '$nama',alamat='$alamat',foto='$namafoto' WHERE id_siswa = '$id'");
	}
	function siswa($id)
	{
		$ambildata = $this->koneksi->query("select * from siswa where id_siswa = $id");
		while ($pecah = $ambildata->fetch_assoc()) {
			$data[] = $pecah;
		}
		return $data;
	}
}
$siswa = new siswa($mysqli);