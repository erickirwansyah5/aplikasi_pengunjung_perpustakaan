<?php include 'koneksi.php'; 

include 'headerAD.php';
?>
<div class="container">
	<div class="page-header">
<h2 >TAMBAH DATA ADMIN</h2>
	</div>
<form action="" method="post">
<table class="table table-bordered" align="center">
	<tr>
		<td>Nama Lengkap</td>
		
		<td>
			<input class="form-control" type="text" name="nama" placeholder="Nama Lengkap Admin" size="30" maxlength="50">
		</td>
	</tr>
	<tr>
		<td>Username</td>
	
		<td>
			<input class="form-control" type="text" name="username" placeholder="Username" size="30" max="50">
		</td>
	</tr>
	<tr>
	<td>Password</td>
		
		<td>
			<input class="form-control" type="password" name="password" placeholder="Masukan Password" size="30" maxlength="20">
		</td>
	</tr>
	<tr>
	<td>Konfirmasi Password</td>

		<td>
			<input class="form-control" type="password" name="password2" placeholder="Masukan Password" size="30" maxlength="20">
		</td>
	</tr>
	<tr>
		<td></td>

		<td>
			<button class="btn btn-success " type="submit" name="tambah">SIMPAN</button>
		</td>
	</tr>
</table>
</div>
<form>
<?php 
if (isset($_POST['tambah']) ) {
	$nama = $_POST['nama'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$pass2 = $_POST['password2'];
	$p  = hash('sha1', $pass);

	if($nama == '' || $user == '' || $pass==''){
		echo "
		<Script>
		alert('data belum lengkap');
		document.location.href = 'tambahAD.php';
		</script>
		";
		exit();
	}else if($pass != $pass2){
		echo "
		<Script>
		alert('konformasi password tidak sama');
		document.location.href = 'tambahAD.php';
		</script>
		";
		exit();
	}
	$data = mysqli_query($konek ,"SELECT * FROM admin WHERE username ='$user'");
	$jml= mysqli_num_rows($data);
	if ($jml > 0){
		echo "
		<Script>
		alert('data admin sudah ada');
		document.location.href = 'tambahAD.php';
		</script>
		";
		exit();
	}else {
		$passK = hash('sha1', $pass);
		$simpan = mysqli_query($konek , "INSERT INTO admin VALUES (null ,'$user','$passK','$nama')
			");
		if ($simpan) {
			echo "
			<Script>
			alert('data admin berhasil disimpan');
			document.location.href = 'tampilAD.php';
			</script>
			";
		}else {
			echo "
			<Script>
			alert('data admin gagal disimpan');
			document.location.href = 'tambahAD.php';
			</script>
			";
		}
	}
}


 ?>

<?php include 'footer.php'; ?>