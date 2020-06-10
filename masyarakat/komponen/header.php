<?php include ('../koneksi.php') ; ?>
<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PW ADMIN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->

    <link rel="stylesheet" href="<?php echo $base_url ;?>asset/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo $base_url ;?>asset/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="<?php echo $base_url ;?>asset/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo $base_url ;?>asset/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo $base_url ;?>asset/css/custom.css">
     <link rel="stylesheet" type="text/css" href="<?php echo $base_url ;?>asset/dist/DataTables/datatables.min.css"/>

    <!--Summernote-->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url ;?>asset/dist/summernote.css">
     <link rel="stylesheet" type="text/css" href="<?php echo $base_url ;?>asset/dist/summernote-lite.css">
    <!-- Favicon-->
         
    <link rel="shortcut icon" href="<?php echo $base_url ;?>asset/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

  </head>
  <body>
        <?php 
    session_start();
    if($_SESSION['level']!="masyarakat"
){
        header("location:../login/index.php?pesan=belum_login");
    }
    ?>