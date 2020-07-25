<?php 
include 'koneksi.php';
$data = mysqli_query($konek ,"SELECT * FROM admin");

include 'headerAD.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>DATA ADMMIN</title>
	<style >
		/*table{
			width: 200px;
		}*/
	</style>
</head>
<body>
	<div class="container">
	<div class="page-header">
<h2> DATA ADMIN SMK NEGERI 3 SELUMA</h2>
	</div>
<a class="btn btn-primary btn-sm" href="tambahAD.php">TAMBAH DATA</a>

<table style="margin-top: 10px;" class="table table-bordered table-striped">
 		<tr>
		<th style="text-align: center;">No</th>
		<th>Username</th>
		<th>Nama Lengkap</th>
		<th>Aksi</th>
	</tr>
	<?php 
	$i=1;
	while($dta = mysqli_fetch_assoc($data) ) :
	 ?>
	<tr>
		<td width="50px" style="text-align: center;"><?= $i; ?></td>
		<td width="100"><?= $dta['username'] ?></td>
		<td width="200px"><?= $dta['namalengkap'] ?></td>
		<td width="100px">
			<a class="btn btn-warning btn-sm" href="editAD.php?id=<?= $dta['idadmin'] ?>">UPDATE</a> 
			<a class="btn btn-danger btn-sm" href="hapusAD.php?id=<?= $dta['idadmin'] ?>" onclick= "return confirm('apakah anda yakin ingin menghapus data?')">DELETE</a>
		</td>
	</tr>
	<?php $i++; ?>
<?php endwhile; ?>
</table>
</div>
</body>
</html>
<?php include 'footer.php'; ?>