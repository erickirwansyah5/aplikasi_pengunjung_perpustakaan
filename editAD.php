<?php include 'koneksi.php'; 
$admin = mysqli_query($konek , "SELECT * FROM admin WHERE idadmin = '$_GET[id]'");
$ad = mysqli_fetch_assoc($admin);
include 'headerAD.php';
?>
	<div class="container">
	<div class="page-header">
<h2> EDIT DATA ADMIN </h2>
	</div>
<form action="" method="post">
<table class=" table table bordered" align="center">
	<tr >
		<td>Nama Lengkap</td>
		<td>:</td>
		<td>
			<input type="hidden" name="idadmin" value="<?= $ad['idadmin'] ?>">
			<input class="form-control"  type="text" name="nama" size="30" maxlength="50" value="<?= $ad['namalengkap'] ?>">
		</td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td>
			<input class="form-control" type="text" name="username" size="30" max="50" value="<?= $ad['username'] ?>">
		</td>
	</tr>
	<tr>
	<td>Password</td>
		<td>:</td>
		<td>
			<input class="form-control"  type="password" name="password" size="30" maxlength="20" value="<?= $ad['password'] ?>">
		</td>
	</tr>
		<td></td>
		<td></td>
		<td>
			<button class="btn btn-success" type="submit" name="ubah">UPDATE</button>
		</td>
	</tr>
</table>
<form>
<?php 
if (isset($_POST['ubah']) ) {
	$idadmin = $_POST['idadmin'];
	$nama = $_POST['nama'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$p  = hash('sha1', $pass);

		$edit = mysqli_query($konek , "UPDATE admin SET 
			username    = '$user',
			password    = '$p',
			namalengkap = '$nama' WHERE idadmin = '$idadmin'
			");
		if ($edit) {
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
			document.location.href = 'editAD.php';
			</script>
			";
		}
	}



 ?>

<?php include 'footer.php'; ?>