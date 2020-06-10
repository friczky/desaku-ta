    
  <?php
$username = $_SESSION['username'];
 $query = $koneksi->query ("SELECT * FROM user where username ='$username' ");
          if ($query){
            $data = mysqli_fetch_object($query) ;
          }else{
            echo "Data tidak terdaftar" ;
            die();
          }
  ?>
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="<?php echo $base_url;?>admin/foto/<?= $data->foto?>"width="100%" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5"><?= $data->nama?></h1>
            <p>Administrator</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li><a href="<?php echo $base_url;?>admin"> <i class="icon-home"></i>Home </a></li>
          <li><a href="<?php echo $base_url;?>admin/artikel"> <i class="icon-windows"></i>Artikel </a></li>
          <li><a href="<?php echo $base_url;?>admin/p_surat"> <i class="icon-windows"></i>Permohonan Surat </a></li>
          <li><a href="<?php echo $base_url;?>admin/elapor/"> <i class="icon-windows"></i>Laporan </a></li>
          <li><a href="<?php echo $base_url;?>admin/p_daftar/"> <i class="icon-windows"></i>Permohonan Daftar </a></li>
          <li><a href="<?php echo $base_url;?>admin/datauser/"> <i class="icon-windows"></i>Data User </a></li>
         
           <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-user"></i>Pengaturan</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="<?php echo $base_url;?>admin/akun/?key=<?= $data->id?>&?username=<?= $data->username?>">Akun</a></li>
              <li><a href="<?php echo $base_url;?>user.php">Slide-Home</a></li>
              <li><a href="<?php echo $base_url;?>user-add.php">Setting</a></li>
              <li><a href="<?php echo $base_url;?>admin/elapor/index.php?id=1">Elapor</a></li>
                     <li><a href="<?php echo $base_url;?>admin/pengaturan/user">User</a></li>
              
            </ul>
          </li>
          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-user"></i>User</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
       
              <li><a href="user-add.php">Tambah</a></li>
              
            </ul>
          </li>

      </nav>