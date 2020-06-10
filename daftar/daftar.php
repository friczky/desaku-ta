<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pbd";


  try{
$koneksi = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // begin the transaction
    $koneksi->beginTransaction();


    $nama_msy = $_POST['nama_msy'];
    $nik_msy = $_POST['nik_msy'];
    $alamat_msy = $_POST['alamat_msy'];
    $rt_rw = $_POST['rt_rw'];
    $no_hp_msy = $_POST['no_hp_msy'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $status = 1;


 $koneksi->exec("INSERT INTO masyarakat (nama_msy,nik_msy,alamat_msy,rt_rw,no_hp_msy,username_msy,password_msy) VALUES('$nama_msy','$nik_msy','$alamat_msy','$rt_rw','$no_hp_msy','username','$password')");

    $koneksi->exec("INSERT INTO user (nama,username,password,level,status) VALUES('$nama_msy','$username','$password','$level','$status')");
    

    // commit the transaction
    $koneksi->commit();
    echo"
  <script> alert('BERHASIL MENDAFTAR SILAHKAN TUNGGU MENUNGGU APPROVMENT'); window.location.href='index.php';</script>";
    }
catch(PDOException $e)
    {
    // roll back the transaction if something failed
    $koneksi->rollback();
    echo "Error: " . $e->getMessage();
    }

$koneksi = null;


    // $foto = $_FILES['foto']['name'];
    // $isi = $_POST['isi'];

        // $sql ="INSERT INTO masyarakat (nama_msy,nik_msy,alamat_msy,rt_rw,no_hp_msy,username_msy,password_msy) VALUES('$nama_msy','$nik_msy','$alamat_msy','$rt_rw','$no_hp_msy','username','$password')" ;

         //  $sql .="INSERT INTO user (nama,username,password,level) VALUES('$nama_msy','$username','$password','$level')" ;
      // move_uploaded_file($_FILES['foto']['tmp_name'],'foto/'. $foto);

  //   if(!$koneksi->query($sql)) {
  //     echo $koneksi->error; 
  //     die();
  //   } 
  // } catch (Exception $e) {
  //   echo $e;
  //   die();
 
  // if(isset($_GET['pesan'])){
  //  if($_GET['pesan']=="belum_login"){
  //    echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
  //  }
  // }
  ?>