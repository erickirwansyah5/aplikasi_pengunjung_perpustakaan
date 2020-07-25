<?php 
include 'koneksi.php';
$data = mysqli_query($konek, "SELECT * FROM anggota");

include 'headerAD.php';
 ?>
 <style >
 	table{
 		margin-top: 50px;
 		border-collapse: collapse;
 	}
 	footer{
 		margin-top:200px;
 	}
 </style>
 <div class="container">
 	<div class="page-header">
 		<h2>HALMAN CETAK KARTU</h2>
 	</div>	
<table class="table table-bordered table-striped ">
	<tr>
		<th>NO</th>
		<th>FOTO</th>
		<th>NO ANGGOTA</th>
		<th>NAMA</th>
		<th>ALAMAT</th>
		<th>AKSI</th>
		
	</tr>
	<?php
	$i=1; 
	while($dta =mysqli_fetch_assoc($data)):
	 ?>
	<tr>
		<td style="text-align: center;"><?= $i ?></td>
		<td>
			<img src="img/<?= $dta['foto'] ?>" width="50" height="50">
		</td>
		<td><?= $dta['noanggota'] ?></td>
		<td><?= $dta['nama'] ?></td>
		<td><?= $dta['alamat'] ?></td>
		<td>
			<a class="btn btn-success btn-sm" href="cetak_kartu_proses.php?id=<?= $dta['idanggota'] ?>" target="_blank" >CETAK KARTU</a>
		</td>
	</tr>
	<?php $i++; ?>
<?php endwhile; ?>
</table>
</div>
 <?php include 'footer.php'; ?>