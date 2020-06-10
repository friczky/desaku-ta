      <?php
if($_POST){
  try{

    $nama = $_POST['nama'];
    $password = md5($_POST['password']) ;
    $foto = $_FILES['foto']['name'];
 
        $sql ="INSERT INTO admin (nama,password,foto) VALUES('$nama','$password','$foto')" ;
      move_uploaded_file($_FILES['foto']['tmp_name'],'foto/admin/'. $foto);
    if(!$koneksi->query($sql)) {
      echo $koneksi->error; 
      die();
    } 
  } catch (Exception $e) {
    echo $e;
    die();
  }
  echo"
  <script> alert('Data Berhasil DiTambah'); window.location.href='user.php';</script>";
}
?>
   <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">User</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="php.html">Home</a></li>
            <li class="breadcrumb-item active">User       </li>
          </ul>
          <h1>Tambah User</h1>
          <br>
            <form action="" method="post" enctype="multipart/form-data">
            <center>
            <p>
              Username :
            </p>
            <input type="text" name="nama">
            <p>
              Password :
            </p>
            <input type="password" name="password">
            <p>
              Foto Thumbnail :
            </p>
             <input type="file" name="foto">
            <p><br>
              Isi Artikel :
            </p>
         

            <center><button class="btn-success" name="submit" type="submit">Tambah</button>        <button class="btn-primary" name="reset" type="reset">Reset</primarry<br></center>
            </form>
        </div><br>