<?php 
include 'koneksi.php';
$data = mysqli_query($konek ,"SELECT * FROM tamu2 WHERE tglkunjung BETWEEN '$_GET[tgl1]'
		AND '$_GET[tgl2]' ORDER BY tglkunjung ASC");
 ?>
 <style >
  @media print{
 		.print{
 			color: blue
 			background-color: blue;
 		
 		}
 		.id{
 			display: none;
 		}

 	}
 	.print{
 		border-collapse: collapse;
 	}
 	.print{
 		border-collapse: collapse;
 	}
 </style>
 <h2>LAPORAN </h2>
 <hr/>
 <table class="print" style="margin-top: 50px;" border="1" align="center" width="100%">
 	<tr>
 		<th>NO</th>
 		<th>NO ANGGOTA</th>
 		<th>NAMA ANGGOTA</th>
 		<th>TGL KUNJUNG</th>
 		<th>TUJUAN</th>
 	</tr>
 	<?php 
 	$i=1;
 	while($dta = mysqli_fetch_assoc($data)) :
 	 ?>
 	<tr>
 		<td align="center"><?= $i ?></td>
 		<td align="center"><?= $dta['noanggota'] ?></td>
 		<td align="center"><?= $dta['nama'] ?></td>
 		<td align="center"><?= $dta['tglkunjung']?></td>
 		<td align="center"><?= $dta['tujuan']?></td>
 	</tr>
 	
 	<?php $i++; ?>
 <?php endwhile; ?>
 </table>
 <table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<BR/>
			<p>Dermayu , <?= date('d/m/y') ?> <br/>
				Administrator,
			<br/>
			<br/>
			<br/>
		<p>__________________________</p>
		</td>
	</tr>
</table>
<a class ="id" href="#" onclick="window.print();">CETAK</a>