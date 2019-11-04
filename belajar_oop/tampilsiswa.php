<?php
include 'class.php';

$datasiswa = $siswa -> set_siswa();
//print_r($datasiswa);

?>
<table border="1">
<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Foto</th>
	</tr>
</thead>
<tbody>
	<?php
	foreach ($datasiswa as $key => $value) {
	?>
	<tr>
		<td><?php echo $key+=1; ?> </td>
		<td><?php echo $value['nama']; ?></td>
		<td><?php echo $value['alamat']; ?></td>
		<td><?php echo $value['foto']; ?></td>
		<td><img src="foto/<?php echo $value['foto']; ?>" alt="" width="50px"></td>
		<td><a href="delete.php?id=<?php echo $value['id_siswa']; ?>">Delete</<a> || <a href="update.php?id=<?php echo $value['id_siswa']; ?>">Update</a></td>
	</tr>
	<?php } ?>
</tbody>	
</table>
<a href="tambahsiswa.php">Tambah Data</a>