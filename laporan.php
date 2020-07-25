<?php 
include 'headerAD.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN TAMU</title>
</head>
<body>
	<style>
		.tombol{
		
			margin-top: 20px;
		}
		footer{
			margin-top: 200px;
		}

	</style>
	
	<hr/> 
	<div class="container">
		<div class="page-header">
			<h3 >PILIH PERIODE KUNJUNG</h3>
		</div>
	<form action="laporanTamuAnggota.php" method="GET">
	<table class="table " align="center">
		<tr width="100px">
			<td>
				DARI :<input class="form-control" type="date" name="tgl1" value="<?= date('Y-m-d')?>">
			</td>
			<td > 
				SAMPAI :<input class="form-control" type="date" name="tgl2" value="<?= date('Y-m-d')?>">
			</td>
		</tr>
			<tr >
			<td >
				<a style="margin-bottom: 10px;" href="laporanTamuAnggota.php"><button class="btn btn-success bnt-sm">LAPORAN KUNJUNGAN ANGGOTA</button></a>
			
			</td>
		</tr>
		
</table>
</form>
<form action="laporanNonAnggota.php" method="GET">
	<table class="table" align="center">
		<tr >
			<td >
				DARI :<input class="form-control" type="date" name="tgl1" value="<?= date('Y-m-d')?>">
			</td >
			<td > 
				SAMPAI :<input class="form-control" type="date" name="tgl2" value="<?= date('Y-m-d')?>">
			</td>
		</tr>
			<tr>
			<td >
				<a  href="laporanNonAnggota.php"><button class="btn btn-success bnt-sm">LAPORAN KUNJUGAN NON ANGGOTA</button></a>
			</td>
		</tr>
		
</table>
</form>
</div>
<?php include 'footer.php'; ?>