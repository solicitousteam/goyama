  <?php
  include"header.php";
include ('Admin/connection.php');
$systemsetting = "SELECT * from systemsetting ";
$systemsettingsql = $conn->query($systemsetting);
$website = $systemsettingsql->fetch_assoc();

$base_url="https://main.solicitous.cloud/finances-master/Admin/";
?>
  <style>
      h1, h2, h3, h4, h5, h6 {
    color: #2c3145;
}
a, a:hover, a:focus, a:active {
    text-decoration: none;
    outline: none;
}
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.section_all {
    position: relative;
    padding-top: 80px;
    padding-bottom: 80px;
    min-height: 100vh;
}
.section-title {
    font-weight: 700;
    text-transform: capitalize;
    letter-spacing: 1px;
}

.section-subtitle {
    letter-spacing: 0.4px;
    line-height: 28px;
    max-width: 550px;
}

.section-title-border {
    background-color: #000;
    height: 1 3px;
    width: 44px;
}

.section-title-border-white {
    background-color: #fff;
    height: 2px;
    width: 100px;
}
.text_custom {
    color: #00bd2a;
}

.about_icon i {
    font-size: 22px;
    height: 65px;
    width: 65px;
    line-height: 65px;
    display: inline-block;
    background: #fff;
    border-radius: 35px;
    color: #00bd2a;
    box-shadow: 0 8px 20px -2px rgba(158, 152, 153, 0.5);
}

.about_header_main .about_heading {
    max-width: 450px;
    font-size: 24px;
}

.about_icon span {
    position: relative;
    top: -10px;
}

.about_content_box_all {
    padding: 28px;
}

  </style>
  <br>
  <br>
  <br>
  <br>
          <section class="headings" style="background: linear-gradient(rgba(18, 27, 34, 0.6), rgba(18, 27, 34, 0.6)), url('images/bg-testimonials-2.jpg') no-repeat center center;    background-size: cover;
    height: 30vh;">
            <div class="text-heading text-center">
                <div class="container pt-5">
                    <h1 style=";">About Us</h1>
                    <h2 class=" " ><a href="index.php" style="color: white;">Home </a> &nbsp;/&nbsp; About Us</h2>
                </div>
            </div>
        </section>
<section class="section_all bg-light" id="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title_all text-center">
                            <h3 class="font-weight-bold" style="color: #3e276d; font-size: 40px;">About US </h3>
                            <p class="section_subtitle mx-auto text-muted">Goyama Finserv</p>
                            <div class="">
                                <i class=""></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row vertical_content_manage mt-5">
                         <div class="col-lg-5">
                        <div class="img_about mt-3">
                            <img src="images/about-img.jpg" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about_header_main mt-3">
                       <?php echo $website['aboutdec'] ?>
                        </div>
                    </div>
               
                </div>

              
        </section>

 <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3" style="margin-top: -90px;margin-left: 140px;">Mission & Vision</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4" data-aos="fade-up">
           
                <img src="images/13146546_Happy people watching rocket launch.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-4">
          
     
            </div>
         
   
  
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4" data-aos="fade-up">
  <div class="accordion" id="accordionExample" >
  <div class="card" style="box-shadow: 0 0 6px 0 #d4cfcf !important;     border-radius: 10px;
">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="    color: black;
    font-size: 21px;
    font-weight: 500;
    border-bottom: 1px solid red;">
     Our Mission
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
Our mission is to be an integral part of your entire financial journey. We are dedicated to assisting you in creating long-term wealth predictably, while upholding the values of trust and compassion. We believe in a client-centric approach, where your needs take precedence over arbitrary targets. With our expertise and unwavering commitment, we aim to provide personalized solutions that align with your aspirations, ensuring a secure and prosperous future.      </div>
    </div>
  </div>
  <div class="card" style="box-shadow: 0 0 6px 0 #d4cfcf !important;     border-radius: 10px;
">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"  style="    color: black;
    font-size: 21px;
    font-weight: 500;
    border-bottom: 1px solid red;">
          Our Vision
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
At Goyama Financial Services, our name symbolizes our vision: to inspire wisdom, recognition, and trustworthiness. We strive to be a beacon of financial guidance, empowering our clients to achieve their goals through sound advice and expert assistance.
      </div>
    </div>
  </div>
  
</div>
          </div>
          
        </div>
      </div>
      
        <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fas fa-pencil-alt"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Creative Design</h5>
                                <p class="edu_desc mt-3 mb-0 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fab fa-angellist"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">We make Best Result</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">best platform </h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <?php
  include"footer.php"
  ?>