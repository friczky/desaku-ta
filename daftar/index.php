<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 

	
 
	<div class="kotak_login">
		<p class="tulisan_login">DAFTAR</p>
 
		<form action="daftar.php" method="post">
			<label>NAMA</label>
			<input type="hidden" name="level" value="masyarakat" class="form_login" placeholder="NAMA .." required="required">
			<input type="text" name="nama_msy" class="form_login" placeholder="NAMA .." required="required">
 			
			<label>NIK</label>
			<input type="text" name="nik_msy" class="form_login" placeholder="NIK .." required="required">

			<label>ALAMAT</label>
			<input type="text" name="alamat_msy" class="form_login" placeholder="ALAMAT .." required="required">

			<label>RT/RW</label>
			<input type="text" name="rt_rw" class="form_login" placeholder="RT/RW .." required="required">

			<label>NO HP</label>
			<input type="text" name="no_hp_msy" class="form_login" placeholder="NO HP .." required="required">

			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="DAFTAR">
 
			<br/>
			<br/>
			<center>
				Sudah Punya Akun ? silahkan <a class="link" href="<?php echo $base_url; ?>login">MASUK</a><br>
				<a class="link" href="<?php echo $base_url; ?>">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>