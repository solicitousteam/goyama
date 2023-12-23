  <?php
  include"header.php";
   
include ('Admin/connection.php');
$systemsetting = "SELECT * from systemsetting ";
$systemsettingsql = $conn->query($systemsetting);
$website = $systemsettingsql->fetch_assoc();

$base_url="https://main.solicitous.cloud/finances-master/Admin/";
?>
  <style>
      body{
  color:#fff
}
.right_conatct_social_icon{
     background: linear-gradient(to top right, #1325e8 -5%, #8f10b7 100%);
}
.contact_us{
    background-color: #f1f1f1;
    padding: 120px 0px;
}

.contact_inner{
    background-color: #fff;
    position: relative;
    box-shadow: 20px 22px 44px #cccc;
    border-radius: 25px;
}
.contact_field{
    padding: 60px 340px 90px 100px;
}
.right_conatct_social_icon{
    height: 100%;
}

.contact_field h3{
   color: #000;
    font-size: 40px;
    letter-spacing: 1px;
    font-weight: 600;
    margin-bottom: 10px
}
.contact_field p{
    color: #000;
    font-size: 13px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 35px;
}
.contact_field .form-control{
    border-radius: 0px;
    border: none;
    border-bottom: 1px solid #ccc;
}
.contact_field .form-control:focus{
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #1325e8;
}
.contact_field .form-control::placeholder{
    font-size: 13px;
    letter-spacing: 1px;
}

.contact_info_sec {
    position: absolute;
    background-color: #2d2d2d;
    right: 1px;
    top: 18%;
    height: 363px;
    width: 340px;
    padding: 40px;
    border-radius: 25px 0 0 25px;
}
.contact_info_sec h4{
    letter-spacing: 1px;
    padding-bottom: 15px;
}

.info_single{
    margin: 30px 0px;
}
.info_single i{
    margin-right: 15px;
}
.info_single span{
    font-size: 14px;
    letter-spacing: 1px;
}

button.contact_form_submit {
    background: linear-gradient(to top right, #1325e8 -5%, #8f10b7 100%);
    border: none;
    color: #fff;
    padding: 10px 15px;
    width: 100%;
    margin-top: 25px;
    border-radius: 35px;
    cursor: pointer;
    font-size: 14px;
    letter-spacing: 2px;
}
.socil_item_inner li{
    list-style: none;
}
.socil_item_inner li a{
    color: #fff;
    margin: 0px 15px;
    font-size: 14px;
}
.socil_item_inner{
    padding-bottom: 10px;
}

.map_sec{
    padding: 50px 0px;
}
.map_inner h4, .map_inner p{
    color: #000;
    text-align: center
}
.map_inner p{
    font-size: 13px;
}
.map_bind{
   margin-top: 50px;
    border-radius: 30px;
    overflow: hidden;
}


iframe{
    width:100% !important;
}
  </style>

   
   <section class="contact_us">
             <section class="headings" style="background: linear-gradient(rgba(18, 27, 34, 0.6), rgba(18, 27, 34, 0.6)), url('images/bg-details.jpg') no-repeat center center;    background-size: cover;
    height: 30vh;">
            <div class="text-heading text-center">
                <div class="container pt-5">
                    <h1 style=" ">Contact Us</h1>
                    <h2 class=" "><a href="index.php" style="color: white;">Home </a> &nbsp;/&nbsp; Contact Us</h2>
                </div>
            </div>
        </section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="contact_inner">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="contact_form_inner">
                                    <div class="contact_field">
                                        <h3>Contact Us</h3>
                                        <p>Feel Free to contact us any time. We will get back to you as soon as we can!.</p>
                                        <input type="text" class="form-control form-group" placeholder="Name" />
                                        <input type="text" class="form-control form-group" placeholder="Email" />
                                        <textarea class="form-control form-group" placeholder="Message"></textarea>
                                        <button class="contact_form_submit" style="background:#3e276d;">Send</button>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-2">-->
                            <!--    <div class="right_conatct_social_icon d-flex align-items-end">-->
                            <!--       <div class="socil_item_inner d-flex">-->
                            <!--          <li><a href="<?php echo $website['facebook'] ?>" target="_blank"><i class="fab fa-facebook-square"></i></a></li>-->
                            <!--          <li><a href="<?php echo $website['instagram'] ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>-->
                            <!--          <li><a href="<?php echo $website['twitter'] ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>-->
                            <!--       </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                        <div class="contact_info_sec">
                            <h4>Contact Info</h4>
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-headset"></i>
                                <span><?php echo $website['mobile'] ?></span>
                            </div>
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-headset"></i>
                                <span>22 496 90938</span>
                            </div>
                         
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-envelope-open-text"></i>
                                <span><?php echo $website['email'] ?></span>
                            </div>
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-map-marked-alt"></i>
                                <span><?php echo $website['address'] ?></span>
                            </div>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="map_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="map_inner">
                        <h4>Find Us on Google Map</h4>
                        <p>Once you've clicked on the result, the map will display the location with a pin marker. You can zoom in and out to get a better view.</p>
                        <div class="map_bind">
                            <?php echo $website['Iframe'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
  
  
      <?php
  include"footer.php"
  ?>