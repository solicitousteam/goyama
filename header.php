<?php


include ('Admin/connection.php');
$systemsetting = "SELECT * from systemsetting ";
$systemsettingsql = $conn->query($systemsetting);
$website = $systemsettingsql->fetch_assoc();

$base_url="https://main.solicitous.cloud/finances-master/Admin/";

?>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $website['companyname']?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url ?>uploads/SystemSettingimg/<?php echo $website['favicon']?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style>

   

    </style>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <!--<div id="overlayer"></div>-->
  <!--<div class="loader">-->
  <!--  <div class="spinner-border text-primary" role="status">-->
  <!--    <span class="sr-only">Loading...</span>-->
  <!--  </div>-->
  <!--</div>-->


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" style="    background: white;
">

      <div class="container mt-2">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="h2 mb-0"><img src="<?php echo $base_url ?>uploads/SystemSettingimg/<?php echo $website['logo']?>" alt="logo" width="75%"/></a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li>
                  <a href="about.php" class="nav-link">About Us</a>
       
                </li>
                
                    <li class="has-children">
                  <a href="#" class="nav-link">Services</a>
              <ul class="dropdown">
                    <li><a href="mutual-funds.php" class="nav-link">Mutual Funds</a></li>
                    <li><a href="insurance.php" class="nav-link">Insurance</a></li>
                    <li><a href="product.php" class="nav-link">Products</a></li>

                  </ul>
                </li>

                <li class="has-children">
                  <a href="#" class="nav-link">Calculator</a>
                  <ul class="dropdown">
                    <li><a href="future.html" class="nav-link">Future Value</a></li>
                    <li><a href="goal.php" class="nav-link">Goal Based</a></li>
                    <li><a href="#" class="nav-link">Top Up calculator</a></li>
                    <li><a href="#" class="nav-link">Life Insurance Requirement</a></li>
            
                  </ul>
                </li>
                
                
                <!--<li><a href="#blog-section" class="nav-link">Blog</a></li>-->
                <li><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="social"><a href="<?php echo $website['facebook'] ?>"  class="nav-link"  target="_blank"><span class="icon-facebook"></span></a></li>
                <!--<li class="social"><a href="https://www.instagram.com/goyama.finserv/" class="nav-link"><span class="icon-instagram"></span></a></li>-->
                <li class="social"><a href="<?php echo $website['linkdin'] ?>" class="nav-link" target="_blank"><span class="icon-linkedin"></span></a></li>
                <li class="social"><a href="<?php echo $website['twitter'] ?>" class="nav-link"><span class="icon-twitter" target="_blank"></span></a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
