<?php include '../koneksi.php'; ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MASUK DS ADMIN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo $base_url;?>asset/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo $base_url;?>asset/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="<?php echo $base_url;?>asset/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo $base_url;?>asset/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo $base_url;?>asset/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo $base_url;?>asset/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>

    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Dashboard</h1>
                  </div>
                  <p>Silahkan Masukan User dan Password untuk Masuk kehalaman Admin.</p>
                     <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "unconfirm"){
      echo "Akun anda belum di konfirmasi oleh admin , Silahkan tunggu sampai di konfirmasi!";
    }else if($_GET['pesan'] == "logout"){
      echo "Anda telah berhasil logout";
    }else if($_GET['pesan'] == "belum_login"){
      echo "Anda harus login untuk mengakses halaman admin !!";
    }else if($_GET['pesan'] == "logout"){
      echo "Berhasil Keluar !!";
    }
  }
  ?>
                </div>
              </div>
            </div>

            <!-- Form Panel    -->
            <div class="col-lg-6">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="post" class="form-validate mb-4" action="cek_login.php">
                    <div class="form-group">
                      <input id="login-username" type="text" name="username" required data-msg="Masukan Username Terlebih Dahulu" class="input-material">
                      <label for="login-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required data-msg="Masukan Password Terlebih Dahulu" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Masuk</button>
                     <a class="btn btn-secondary" href="../daftar">Daftar</a>
                    <br><br><a class="link" href="<?php echo $base_url; ?>">Kembali ke halaman utama</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo $base_url;?>asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $base_url;?>asset/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo $base_url;?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $base_url;?>asset/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo $base_url;?>asset/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo $base_url;?>asset/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo $base_url;?>asset/js/front.js"></script>
  </body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="belum_login"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				Belum Punya Akun ? silahkan <a class="link" href="<?php echo $base_url; ?>daftar">DAFTAR</a>
				<a class="link" href="<?php echo $base_url; ?>">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html> -->