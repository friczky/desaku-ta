   <?php

//  $sqlCommand = "SELECT COUNT(*) FROM user"; 
// $query = mysqli_query($koneksi, $sqlCommand) or die (mysqli_error()); 
// $user = mysqli_fetch_row($query);

//  $sqlCommand = "SELECT COUNT(*) FROM artikel"; 
// $query = mysqli_query($koneksi, $sqlCommand) or die (mysqli_error()); 
// $artikel = mysqli_fetch_row($query);


   ?>
    <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard  :  Selamat datang, <?php echo $_SESSION['username']; ?></h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
<?php
$con=mysqli_connect("localhost","root","dinaislamia","pbd");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT id FROM user ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);

  
?>
                      <div class="icon"><i class="icon-user-1"></i></div><strong>USER</strong>
                    </div>
                    <div class="number dashtext-1"><?php echo $rowcount ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="1" aria-valuemax="10" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div> <?php mysqli_free_result($result);
            } mysqli_close($con);?>
          <?php
$con=mysqli_connect("localhost","root","dinaislamia","pbd");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT id FROM berita ";
if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
?>
                <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-contract"></i></div><strong>Berita</strong>
                    </div>
                    <div class="number dashtext-2"><?php echo $rowcount?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                  </div>
                </div>
              </div><?php mysqli_free_result($result);
            } mysqli_close($con);?>
                    <?php
$con=mysqli_connect("localhost","root","dinaislamia","pbd");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT id FROM elapor ";
if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
?>
                <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-contract"></i></div><strong>Laporan</strong>
                    </div>
                    <div class="number dashtext-2"><?php echo $rowcount?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                  </div>
                </div>
              </div><?php mysqli_free_result($result);
            } mysqli_close($con);?>
                   <?php
$con=mysqli_connect("localhost","root","dinaislamia","pbd");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT id FROM drivecloud ";
if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
?>
                <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-storage"></i></div><strong>Drive</strong>
                    </div>
                    <div class="number dashtext-2"><?php echo $rowcount?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                  </div>
                </div>
              </div><?php mysqli_free_result($result);
            } mysqli_close($con);?>
                 

        </section>
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4">
                <div class="bar-chart block no-margin-bottom">
                  <canvas id="barChartExample1"></canvas>
                </div>
                <div class="bar-chart block">
                  <canvas id="barChartExample2"></canvas>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="line-cahrt block">
                  <canvas id="lineCahrt"></canvas>
                </div>
              </div>
            </div>
          </div>
        </section>
    <?php
    // mysqli_free_result($query); 
// mysqli_close($koneksi);
?>
  