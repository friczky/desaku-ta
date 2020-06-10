<?php include ('../../koneksi.php') ; ?>
<?php include '../komponen/header.php'; ?>

<?php include '../komponen/navbar.php'; ?>

<?php include '../komponen/sidebar.php'; ?>

<div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Artikel</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Permohonan Daftar </li>
          </ul>
          <h1>Permohonan Daftar</h1>
          <p align="rigth"><a href="<?php echo $base_url;?>admin/artikel/tambah.php"><button class="btn-success">Tambah User</button></a></p>

           <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped table-bordered " style="width:100%">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Foto</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <?php

                $query ="SELECT * FROM user" ;
                

                if ($data=mysqli_query($koneksi,$query)){
                  $a=1;
                  while($obj=mysqli_fetch_object($data)){



                ?>
                <tbody>
                <tr>
                  <td><?= $a ?></td>
                  <td><?= $obj->nama ?> </td>
                  <td><img src="foto/<?= $obj->foto ?>" width="50" alt="foto" class="margin"></td>
                  <td><?= $obj->username?></td>
                  <td><?= $obj->password?></td>
                  <td><?= $obj->level?></td>
                  <?php if ($obj->status == 0): ?>
                                <td><span class="label label-primary">Diterima</span></td>
                            <?php else: ?>
                                <td><span class="label label-danger">Ditolak</span></td>
                            <?php endif; ?></td>
                  <td>
                    <a class="btn btn-success btn-sm btn-flat" href="detail.php?id=<?= $obj->id?>"><i class="fa fa-desktop"></i> </a>
                     <a class="btn btn-success btn-sm btn-flat" href="terima.php?id=<?= $obj->id?>"><i class="fa fa-check"></i> </a> <a class="btn btn-warning btn-sm btn-flat" href="tolak.php?id=<?= $obj->id?>"><i class="fa fa-ban"></i> </a>
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