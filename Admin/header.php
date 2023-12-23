<?php
ob_start();
session_start();
if(empty($_SESSION['username'])){

   echo "<script>window.location='Login.php'</script>";
}
?>



<?php
include ('connection.php');
$systemsetting = "SELECT * from systemsetting ";
$systemsettingsql = $conn->query($systemsetting);
$website = $systemsettingsql->fetch_assoc();

?>






<!DOCTYPE html>
<html>

   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <meta name="description" content=""/>
      <meta name="author" content=""/>
      <title><?php echo $website['companyname'] ?></title>
      <!--favicon-->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <link rel="icon" href="uploads/SystemSettingimg/<?php echo $website['favicon']?>" type="image/x-icon">
        <link href="assets/plugins/fancybox/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>
      <!-- Vector CSS -->
      <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
      <!-- simplebar CSS-->
      <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
      <!-- Bootstrap core CSS-->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
      <!-- animate CSS-->
      <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
      <!-- Icons CSS-->
      <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
      <!-- Sidebar CSS-->
      <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
      <!-- Custom Style-->
      <link href="assets/css/app-style.css" rel="stylesheet"/>
      
         <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

  <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
      
   </head>
   <body>
      <!-- Start wrapper-->
      <div id="wrapper">

         <!--Start topbar header-->
         <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top bg-white">
               <ul class="navbar-nav mr-auto align-items-center">
                  <li class="nav-item">
                     <a class="nav-link toggle-menu" href="javascript:void();">
                     <i class="icon-menu menu-icon"></i>
                     </a>
                  </li>
               </ul>
               <ul class="navbar-nav align-items-center right-nav-link">
                  <li class="nav-item">
                     <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                     <span class="user-profile"><img src="uploads/SystemSettingimg/<?php echo $website['logo']?>" class="img-circle" alt="user avatar"></span>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item user-details">
                           <a href="javaScript:void();">
                              <div class="media">
                                 <div class="avatar"><img src="uploads/SystemSettingimg/<?php echo $website['logo']?>"></div>
                                 <div class="media-body">
                                    <h6 class="mt-2 user-title"><?php echo $website['companyname']?></h6>
                                    <p class="user-subtitle">Super Admin</p>
                                 </div>
                              </div>
                           </a>
                        </li>
                        <li class="dropdown-item"><a href="logout.php"><i class="icon-power mr-2"></i> Logout</a></li>
                        <li class="dropdown-item"><a href="change_password.php"><i class="icon-power mr-2"></i> Change Password</a></li>

                     </ul>
                  </li>
               </ul>
            </nav>
         </header>
         <!--End topbar header-->