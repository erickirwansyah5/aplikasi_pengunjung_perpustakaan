<?php 

session_start();
if (isset($_SESSION['login'])){
	header('Location: halamanAD.php');
}
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD']=="POST"){
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$p  = hash('sha1', $pass);
	
	if ($user == '' || $p==''){
		$error = true;
	}else {
	$data = mysqli_query($konek ,"SELECT * FROM admin WHERE username ='$user' AND password = '$p'");
	$jml = mysqli_num_rows($data);
	$dta = mysqli_fetch_assoc($data);
	 if ($jml > 0){
	 	session_start();
	 	$_SESSION['login']    = TRUE;
	 	$_SESSION['username'] = $dta['username'];
	 	$_SESSION['id']       = $dta['id'];
	 	$_SESSION['namalengkap'] = $dta['namalengkap'];
	 	header('Location: halamanAD.php');
	 	
	 }else{
	 	echo "
	 	<script>
	 	alert('usernamae atau password yang anda masukan salah');
	 	document.location.href = 'loginAD.php';
	 	</script>

	 	";
	  }
	}
}


 ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>HALAMAN LOGIN</title>
    <style >
    	.col-md-4col-md-offset-4{
    		margin-top: 20px;
    	}
    	body{
    		background:url('img/beasiswa.jpg');
    		background-size: 200px;
    	}
    </style>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>
</head>
<body>

	
	<div class="container">
	<div class="col-md-4 col-md-offset-4">
		<div  class="panel panel-info">
		<div class="panel-heading">
			<h2>MENU LOGIN</h2>
			<h3>Aplikasi Perpustakaan</h3>
			<?php if (isset($error) ) :  ?>
				<div class="alert alert-warning">
		<span><b>Peringatan!!</b>Form Belum Lengkap</span>
		</div>
	<?php endif;  ?>

	</div>	
	<div class="panel-body">
		
	<form action="" method="post">
		<table class="table">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>
					<input class="form-control" type="text" name="user" placeholder="Masukan Username">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input class="form-control" type="password" name="pass" placeholder="password">
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<button class="btn btn-success" name="login">LOGIN</button>
				</td>
			</tr>
		</table>
	</form>
</div>
</div>
</div>
	</div>
</body>
</html>

<?php include 'footer.php'; ?>