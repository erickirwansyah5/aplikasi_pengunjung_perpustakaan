<?php 
include 'koneksi.php';
$today = date('ymd');
$query = mysqli_query($konek ,"SELECT max(noanggota) AS last FROM anggota WHERE noanggota LIKE '$today%'");
$data = mysqli_fetch_assoc($query);
$lastNoanggota = $data['last'];
$lastNoanggota = substr($lastNoanggota, 6 , 4);
$nextNoanggota = $lastNoanggota + 1;
$nextNoanggota = $today . sprintf('%04s' , $nextNoanggota );
// $today =date("ymd");
// 		$query = mysqli_query($konek , "SELECT max(noanggota) AS last FROM anggota WHERE noanggota LIKE '$today%'");
// 		$data = mysqli_fetch_assoc($query);
// 		$lastNoanggota = $data['last'];
// 		$lastNoanggota  = substr($lastNoanggota, 6 ,4);
// 		$nextNoanggota  = $lastNoanggota + 1;
// 		$nextNoanggota = $today.sprintf('%04s' , $nextNoanggota);
include 'headerAD.php';
 ?>
 <div class="container">
 	<div class="page-header">
 	 <h2 >MENU PENDAFTARAN</h2>
 	</div>
<form action="" method="post" enctype="multipart/form-data">
	<table class="table table-bordered" align="center">
		<tr>
			<td>Nomor Anggota</td>
			<td>:</td>
			<td>
				<input class="form-control" type="text" name="nomor"  size="30" value="<?= $nextNoanggota ?>" readonly>
			</td>
		</tr>
		<tr>
			<td>Nama Anggota</td>
			<td>:</td>
			<td>
				<input class="form-control" type="text" name="nama" placeholder="Masukan Nama Calon Anggota" size="30">
			</td>
		</tr>
		<tr>
			<td>Asal Instasi</td>
			<td>:</td>
			<td>
				<input class="form-control" type="text" name="instasi" placeholder="Masukan Nama Instasi" size="30">
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
				<input class="form-control" type="text" name="alamat" placeholder="Masukan Alamat Calon Anggota" size="30">
			</td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<td>
				<input type="file" name="foto" size="30">
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button class="btn btn-success" type="submit" name="simpan">SIMPAN</button>
			</td>
		</tr>
	</table>
</div>
</form>
<?php 
if (isset($_POST['simpan']) ) {
	$nomor = htmlspecialchars(strtolower($_POST['nomor']));
	$nama  = htmlspecialchars(strtolower($_POST['nama']));
	$instasi = htmlspecialchars(strtolower($_POST['instasi']));
	$alamat  = htmlspecialchars(strtolower($_POST['alamat']));
	$foto  = $_FILES['foto'];
	$namaFile = $_FILES['foto']['name'];
	if ($foto == '' || $_FILES['foto']['tmp_name'] == ''){
		echo "
		<script>
		alert('Masukan Foto');
		document.location.href = 'daftar.php';
		</script>
		";
		exit();
	} 
	$ekstensiValid = ['jpg','jpeg','png'];
	$ekstensi     = explode('.', $namaFile);
	$ekstensi     = strtolower(end($ekstensi));
	if (!in_array($ekstensi, $ekstensiValid) ) {
		echo "
		<script>
		alert('data yang anda masukan bukan merupakan gambar');
	
		</script>
		";
		exit();
	}else {
		$filePath  = uniqid();
		$filePath .= '.';
		$filePath .= $ekstensi;

		move_uploaded_file($_FILES['foto']['tmp_name'], 'img/' . $filePath);
	}


		$simpan = mysqli_query($konek , "INSERT INTO anggota(noanggota,nama,instansi,alamat,foto) VALUES('$nomor','$nama','$instasi',
			'$alamat','$filePath')");
		if (!$simpan){
			echo "
			<script>
			alert('data gagal disimpan');
			document.location.href = 'daftar.php'
			</script>
			";
		}else {
			echo "
			<script>
			alert('data berhasil disimpan');
			document.location.href = 'daftar.php'
			</script>
			";
		}
}

	

 ?>


 <?php include 'footer.php'; ?>