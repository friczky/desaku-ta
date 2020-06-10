<?php include ('../../koneksi.php') ; ?>
<?php include '../komponen/header.php'; ?>

<?php include '../komponen/navbar.php'; ?>

<?php include '../komponen/sidebar.php'; ?>

 <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">DriveCloud</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">DriveCLoud
                  </li>
          </ul>
          <h1>Drive Cloud</h1>
          <p align="rigth"><a href="tambah.php"><button class="btn-success">Upload File</button></a></p>

           <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped table-bordered " style="width:100%">
                <thead>
                <tr>
                  <th>No</th>
                  <th>nama file</th>
                  <th>tanggal</th>
                  <th>file</th>
                   <th>Pemilik</th>
                  <th>Aksi</th>
                  
                </tr>
                </thead>
                <?php
                
                $query ="SELECT * FROM drivecloud" ;
                

                if ($data=mysqli_query($koneksi,$query)){
                  $a=1;
                  while($obj=mysqli_fetch_object($data)){



                ?>
                <tbody>
                <tr>
                  <td><?= $a ?></td>
                  <td><?= $obj->namafile ?> </td>
                  <td><?= $obj->tgl?></td>
                  <td><?= $obj->file?></td>
                  <td><?= $obj->pemilik?></td>

                 
               
                  <td>
                     <a class="btn btn-success btn-sm btn-flat" href="edit.php?id=<?= $obj->id?>"><i class="fa fa-edit"></i> </a>
                     <a onclick="return confirm('Apakah Yakin mau Dihapuss?')" href="hapus.php?id=<?= $obj->id ?>" class="btn btn-danger btn-sm btn-flat" href=""><i class="fa fa-trash"></i> </a>
                  </td>
                </tr>
                <?php
                $a++ ;
                }
                }
                ?>
               
                </tbody>
              </table>
            </div>
</div>
</div>

        </div>


<?php include '../komponen/footer.php'; ?>