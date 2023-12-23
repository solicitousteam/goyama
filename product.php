  <?php
  include"header.php"
  ?>
   <style>
   
.service-icon i {
    font-size: 40px;
    color: #e8bc00;
    margin-bottom: 20px;
    display: inline-block;
}
.service-wrap {
    border: 1px solid #e6e6e6;
    padding: 50px 30px;
      position: relative;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      border-radius: 11PX
}

.service-wrap p{
      position: relative;
      color: black;
}

.service-wrap:hover {
    /*background-image: url(https://i.ibb.co/mykzQks/services1.jpg);*/
    background-size: cover;
    background-position: center center;
    background-attachment: local;
    transition: all .5s;
    
}

.service-wrap:hover:before {
    background: rgba(0, 0, 0, 0.2901960784313726);
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0px;
    content: "";
    top: 0;
    opacity: 1;
}

.service-wrap:hover h4,.service-wrap:hover p{
    color: #fff;
}
.service-wrap h4 {
    font-weight: 600;
    color:#3e276d;
    margin-bottom: 17px;
    font-size: 18px;
    text-transform: capitalize;
      position: relative;
}
.service-wrap a {
    font-size: 14px;
    font-weight: 600;
      position: relative;
    color: #e8bc00;
}
    </style>

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
            <h1 class="mb-0 site-logo"><a href="index.php" class="h2 mb-0"><img src="" alt="logo" width="75%"/></a></h1>
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
                    <li><a href="#" class="nav-link">Products</a></li>

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
                <li class="social"><a href=""  class="nav-link"  target="_blank"><span class="icon-facebook"></span></a></li>
                <!--<li class="social"><a href="https://www.instagram.com/goyama.finserv/" class="nav-link"><span class="icon-instagram"></span></a></li>-->
                <li class="social"><a href="" class="nav-link" target="_blank"><span class="icon-linkedin"></span></a></li>
                <li class="social"><a href="" class="nav-link"><span class="icon-twitter" target="_blank"></span></a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
     
        <br>
        <br>
        <br>
        <br>
          
              <section class="headings" style="background: linear-gradient(rgba(18, 27, 34, 0.6), rgba(18, 27, 34, 0.6)), url('images/coin-wooden-table-blurred-nature.jpg') no-repeat center center;    background-size: cover;
    height: 30vh;">
            <div class="text-heading text-center">
                <div class="container pt-5">
                    <h1 style=";">Product</h1>
                    <h2 class=" "><a href="index.php" style="color: white;">Home </a> &nbsp;/&nbsp; Product </h2>
                </div>
            </div>
       
            
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <section class="service-grid pb-5 pt-5">
            <div class="container">
                <div class="row">
                    
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center mb-3">
                        <div class="service-wrap" style="padding: 49px 30px;">
                           
                            <h4>Financial Education and Resources</h4>
                            <p> Workshops and Seminars</p>
                            <p> Online Educational Content</p>
                            <p> Financial Calculators</p>
                            
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-3">
                        <div class="service-wrap" style="padding: 38px 30px;">
                            
                            <h4>Investment Services</h4>
                            <p> Wealth Management</p>
                            <p> Online Trading</p>
                            <p> Robo-Advisory Services</p>
                            <p> Mutual Funds</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-3">
                        <div class="service-wrap" style="padding: 46px 30px;">

                            <h4>Financial Planning</h4>
                            <p> Retirement Planning</p>
                            <p> Estate Planning</p>
                            <p> College Savings Planning</p>
                           
                           
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-3">
                        <div class="service-wrap">
                           
                            <h4>Insurance Services</h4>
                             <p> Life Insurance</p>
                             <p> Health Insurance</p>
                             <p> Auto Insurance</p>
                             <p> Homeowners Insurance</p>
   
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-3">
                        <div class="service-wrap" style="padding: 83px 30px;">
                            
                            <h4 style="margin-top:-23px;">Retirement Services</h4>
                            <p> 401(k) Plans</p>
                             <p> Pension Plans</p>
                              <p> Annuities</p>
                             
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center mb-3">
                        <div class="service-wrap" style="padding: 52px 30px;">
                            
                            <h4>Custom Financial Solutions</h4>
                            <p> Tailored investment portfolios</p>
                            <p> Personalized financial planning</p>
                            <br>
                            <br>
                           <br>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 <?php
  include"footer.php"
  ?>