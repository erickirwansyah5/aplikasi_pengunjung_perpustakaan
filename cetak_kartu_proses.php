<?php 
include 'koneksi.php';
$data = mysqli_query($konek, "SELECT * FROM anggota WHERE idanggota = '$_GET[id]'");
$dta = mysqli_fetch_assoc($data);
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
 	.id{
 		margin-left: 400px;
 	}
 	table{
 		margin-top: 50px;
 		font-family: ARIAL;
 	}

 	footer{
 		margin-top:200px;
 	}


 </style>
<table class="print" border="0" align="center" bgcolor="whitegreen">

		<th colspan="2" width="100" >PERPUSTAKAAN SMK 03 SELUMA</th>
		<tr>
		<td colspan="2"><strong>__________________________________</strong></td>
	</tr>
	<tr>
		<th>
			<img src="img/<?= $dta['foto'] ?>" width="60" height="70">
		</th>
		<td colspan="2"><strong><?= $dta['nama'] ?> <br/>
			<?= $dta['noanggota'] ?> <br/>
			<?= $dta['alamat'] ?> <br/></strong>
			<tr>
				<td ></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td align="center" colspan="3">
					<i><h6>Created by erick irwansyah</h6></i>
				</td>
			</tr>
		</td>
		<tr>
			
		</tr>
	</tr>
		
</table>
<table class="print" border="0" align="center"  bgcolor="whitegreen">

		<th colspan="2" width="100" >PERPUSTAKAAN SMK 03 SELUMA</th>
		<tr>
		<td colspan="2"><strong>__________________________________</strong></td>
	</tr>
	<tr >

		<td colspan="3">
		1. Kartu Anggota Wajib Dibawa Setiap 	
		<br>
		__   Kali Berkunjung	
		<br/>
		2. Kartu Anggota Tidak Dapat Dipinjamkan
		<br/>
		3. Apabila Kartu Anggota Hilang Harap
		<br/>
		__Membawa Surat Keterangan 
		 <br/>
		__Hilang Dari Pihak Kepolisian	
		</td>
	</tr>
	<tr>
		<td>
			
		</td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td></td>
	</tr>
</table>
<a  class="id" href="#" onclick="window.print()">CETAK</a>

