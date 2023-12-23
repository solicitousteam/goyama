  <?php
  include"header.php"
  ?>
  
  <style>
      section#team-section {
    margin-top: -220px;
}

section.site-section {
    margin-top: -90px;
}

.desc{
        font-weight: 700 !important;
    font-size: 30px !important;
}

  .unit-4{
      text-align:center !important;
    box-sizing: border-box !important;
    box-shadow: 0 0 55px 0 #9e9999 !important;
    padding: 50px 0 !important;
    border-radius: 10px !important;
        height: 90%  !important;

  }


.single-banner-slide {
	height: 81vh;
	width: 100vw;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	position: relative;
	z-index: 2;
}
.single-banner-slide span {
	color: #fff;
	text-transform: uppercase;
	font-weight: 600;
}
.single-banner-slide h2 {
	color: #fff;
	text-transform: uppercase;
	font-size: 60px;
}
.single-banner-slide::after {
	content: "";
	position: absolute;
	left: 0;
	top: 0;
	background: rgba(0, 0, 0, 0.4);
	z-index: -1;
	width: 100%;
	height: 100%;
}
.single-banner-slide p {
	color: #fff;
	font-size: 15px;
	max-width: 50%;
	margin: 0 auto;
	text-align: center;
}
.single-banner-slide a {
	color: #000;
	background: #fff;
	padding: 10px 45px;
	border-radius: 100px;
	text-decoration: none;
	font-size: 15px;
	font-weight: 600;
	margin-top: 30px;
	transition: 0.3s;
}
.single-banner-slide a:hover {
	color: #fff;
	background: #000;
}
.owl-dots {
	display: none !important;
}

.unit-41{
        text-align: unset !important;

}
.img-fluid1{
        height: 260px !important;
    width: 100%;

}
@media(max-width:768px){
    
    
    .single-banner-slide p {
    color: #fff;
    font-size: 15px;
    max-width: 100%;
    margin: 0 auto;
    text-align: center;
}

.single-banner-slide h2 {
    color: #fff;
    text-transform: uppercase;
    font-size: 40px;
    text-align: center;
}

}

.h-entry h2 a {
    color: #3e276d;
}


  </style>
<section class="banner-area">
	<div class="container-fluid" style="padding:0px">
		<div class="all-banner-slide owl-carousel">
		    <?php
		    $base_url="https://main.solicitous.cloud/finances-master/Admin/";
		    include ('Admin/connection.php');
$bannres = "SELECT * from banners where status='1' ";
$bannresdata = $conn->query($bannres);
while($banner = $bannresdata->fetch_assoc())


{ ?>


			<div class="single-banner-slide" style="background-image: url('<?php echo $base_url ?>uploads/banners/<?php echo $banner['image']?>');">
				<!--<span>Discover The Colorful World</span>-->
				<h2><?php echo $banner['title'] ?></h2>
				<p><?php echo $banner['tagline'] ?></p>
				<!--<a href="#">Discover Now</a>-->
			</div>
			
			<?php } ?>
	
		</div>
	</div>
</section>


      </div>
    </div>

    

    
 

 
    <section class="site-section" style="margin-top: 0;">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">How It Works</h2>
          </div>
        </div>
        
        <div class="row align-items-lg-center" >
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">

            <div class="owl-carousel slide-one-item-alt">
              <img src="images/solution-proposal-great-job-goals-min.jpg" alt="Image" class="img-fluid">
              <img src="images/portrait-caucasian-unset-despair-man-watching-financial-economical-graphs-during-coronavirus-quarantine-problems-min.jpg" alt="Image" class="img-fluid">
              <img src="images/checking-accounting-report-business-table-calculator-min.jpg" alt="Image" class="img-fluid">
                            <img src="images/businessman-terrace-min.jpg" alt="Image" class="img-fluid">

            </div>
            <div class="custom-direction">
              <a href="#" class="custom-prev"><span><span class="icon-keyboard_backspace"></span></span></a><a href="#" class="custom-next"><span><span class="icon-keyboard_backspace"></span></span></a>
            </div>

          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            
            <div class="owl-carousel slide-one-item-alt-text">
              <div>
                <h2 class="section-title mb-3" style="font-size:35px;">01. Goal calculator</h2>
                <p>Goal calculators help individuals define and plan for specific financial objectives, such as buying a house, funding their child's education, saving for retirement, or taking a dream vacation.</p>

                <p><a href="goal.php" class="btn btn-primary mr-2 mb-2">Click</a></p>
              </div>
              <div>
                <h2 class="section-title mb-3" style="font-size:35px;">02. Human life calculator</h2>
                <p>It helps individuals understand how much they should be investing or saving to secure their financial future or achieve specific life goals, such as retirement or education</p>
                <p><a href="#" class="btn btn-primary mr-2 mb-2">Click</a></p>
              </div>
              <div>
                <h2 class="section-title mb-3" style="font-size:35px;">03. Top up calculator</h2>
                <p>
A "top-up calculator" in the context of Systematic Investment Plans (SIPs) typically refers to a tool or resource that helps investors determine the additional investments they can make to their existing SIPs.</p>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Click</a></p>
              </div>
              
                   <div>
                <h2 class="section-title mb-3" style="font-size:35px;">04. Future calculator</h2>
                <p>A Future Value Calculator in the context of a Systematic Investment Plan (SIP) helps you estimate the potential future value of your investments based on certain assumptions.
</p>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Click</a></p>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </section>

    
    

    <section class="site-section" id="services-section"  style=" margin-top:0px;
    background: #f6f6f6;">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Our Services</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/guidance.png" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Providing guidance to clients via personal consultation</h3>
                <!--<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione animi tempora sint hic quod!</p>-->
                <!--<p><a href="#">Learn More</a></p>-->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/technical-support.png" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Mutual Funds distribution</h3>
                <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nemo beatae minus incidunt voluptates?</p>-->
                <!--<p><a href="#">Learn More</a></p>-->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/venture.png" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Corporate Fixed Deposits</h3>
                <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio veritatis aperiam consequuntur qui.</p>-->
                <!--<p><a href="#">Learn More</a></p>-->
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/bond.png" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Corporate Bonds </h3>
                <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia labore suscipit distinctio inventore doloribus deserunt!</p>-->
                <!--<p><a href="#">Learn More</a></p>-->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/shield.png" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Life Insurance Policies (Term Plan only) </h3>
                <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque odio voluptatibus repellat hic officia quibusdam!</p>-->
                <!--<p><a href="#">Learn More</a></p>-->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/security.png" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Health and Personal Accidental Insurance</h3>
                <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, iusto eaque velit saepe nobis ipsa?</p>-->
                <!--<p><a href="#">Learn More</a></p>-->
              </div>
            </div>
          </div>
          <!--<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">-->
          <!--  <div class="unit-4">-->
          <!--    <div class="unit-4-icon">-->
          <!--      <img src="images/flaticon-svg/svg/004-cart.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">-->
          <!--    </div>-->
          <!--    <div>-->
          <!--      <h3>General Insurance (Home and Motor)</h3>-->
          <!--      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque odio voluptatibus repellat hic officia quibusdam!</p>-->
          <!--      <p><a href="#">Learn More</a></p>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          
        </div>
      </div>
    </section>


   
    <!--<section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade" style="margin-top: 0;">-->
    <!--  <div class="container">-->
    <!--    <div class="row mb-5">-->
    <!--      <div class="col-12 text-center">-->
    <!--        <h2 class="section-title mb-3">Happy Customers</h2>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--  <div class="slide-one-item home-slider owl-carousel">-->
    <!--      <div>-->
    <!--        <div class="testimonial">-->
              
    <!--          <blockquote class="mb-5">-->
    <!--            <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti tenetur ad perspiciatis quam atque eius quia suscipit repudiandae animi voluptatem.&rdquo;</p>-->
    <!--          </blockquote>-->

    <!--          <figure class="mb-4 d-flex align-items-center justify-content-center">-->
    <!--            <div><img src="images/person_1.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>-->
    <!--            <p>John Smith</p>-->
    <!--          </figure>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div>-->
    <!--        <div class="testimonial">-->

    <!--          <blockquote class="mb-5">-->
    <!--            <p>&ldquo;Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates exercitationem ut totam distinctio magnam quisquam, unde iure. Labore!.&rdquo;</p>-->
    <!--          </blockquote>-->
    <!--          <figure class="mb-4 d-flex align-items-center justify-content-center">-->
    <!--            <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>-->
    <!--            <p>Christine Aguilar</p>-->
    <!--          </figure>-->
              
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div>-->
    <!--        <div class="testimonial">-->

    <!--          <blockquote class="mb-5">-->
    <!--            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime eligendi odio nihil officia quasi nostrum, ipsa est? Culpa, ullam dolorem!&rdquo;</p>-->
    <!--          </blockquote>-->
    <!--          <figure class="mb-4 d-flex align-items-center justify-content-center">-->
    <!--            <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>-->
    <!--            <p>Robert Spears</p>-->
    <!--          </figure>-->

              
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div>-->
    <!--        <div class="testimonial">-->

    <!--          <blockquote class="mb-5">-->
    <!--            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil veniam tempora beatae animi in sapiente quos maiores ex aut.&rdquo;</p>-->
    <!--          </blockquote>-->
    <!--          <figure class="mb-4 d-flex align-items-center justify-content-center">-->
    <!--            <div><img src="images/person_1.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>-->
    <!--            <p>Bruce Rogers</p>-->
    <!--          </figure>-->

    <!--        </div>-->
    <!--      </div>-->

    <!--    </div>-->
    <!--</section>-->

    

    <section class="site-section" id="about-section"  style="margin-top: 0;
    ">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/img_4.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            

            <div class="row">

              
              
        
              <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="unit-41 d-flex">
                  <div class="unit-4-icon ml-4 mb-3" ></div>
                  <div>
                    <h3 style="color: #3e276d;">Banking Consulation </h3>
                    <p style="font-size: 17px;">Request you to refer the data content shared in earlier communications, 
Beyond Mutual Fund Investments, at GOYAMA FINANCIAL SERVICES we also have licensed tie ups to provide solutions for:
</p>
                    <ul >
                        <li style="font-size: 17px;">Corporate Fixed Deposits and Bonds</li>
                        <li style="font-size: 17px;">Life Insurance (Term Plan only)</li>
                         <li style="font-size: 17px;">Health/Mediclaim and Personal Accidental Insurance.</li>
<li style="font-size: 17px;"> General Insurance (Motor and Home).</li>

                    </ul>
                    <p class="text-center"><a href="disclaimers-and-disclosures.php" class="btn btn-primary mr-2 mb-2">Disclaimer & Disclosure</a></p>
                  </div>
                </div>
              </div>
            </div>


            
          </div>
        </div>

        
      </div>
    </section>
  
    
    

    <section class="site-section" id="blog-section" style="margin-top: 0;
    background: #f6f6f6;">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Our Blog</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="h-entry">
              <a href="single.php">
                <img src="images/4_reasons_financial_free4-min.jpg" alt="Image" class="img-fluid1">
              </a>
              <h2 class="font-size-regular"><a href="4-Reasons-Why-we-aren't-financially-free.php">4 Reasons Why we aren't financially free</a></h2>
            
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="h-entry">
              <a href="single.php">
                <img src="images/best_way_to_plan_tax_saving_1-min.jpg" alt="Image" class="img-fluid1">
              </a>
              <h2 class="font-size-regular"><a href="The_Best_Ways_To_Plan_Your_Tax_Saving.php">The Best Ways To Plan Your Tax Saving</a></h2>
       
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="h-entry">
              <a href="single.php">
                <img src="images/SIP_Topup_-3-min.jpg" alt="Image" class="img-fluid1">
              </a>
              <h2 class="font-size-regular"><a href="Aim_for_Greater_wealth_with_SIP_Top_Up.php">Aim for Greater wealth with SIP Top Up</a></h2>
          
            </div> 
          </div>
          <br>
          <br>
        </div>
          <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="h-entry">
              <a href="single.php">
                <img src="images/Compound_Annual_Growth_rate-1-min (1).jpg" alt="Image" class="img-fluid1">
              </a>
              <h2 class="font-size-regular"><a href="What_is_CAGR(Compound_Annual_Growth_Rate).php">What is CAGR(Compound Annual Growth Rate)</a></h2>
           
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="h-entry">
              <a href="single.php">
                <img src="images/WhatsApp Image 2023-10-06 at 1.54.31 PM (1).jpeg" alt="Image" class="img-fluid1">
              </a>
              <h2 class="font-size-regular"><a href="Investing_Mistakes_to_avoid.php">7 Investing Mistakes to avoid</a></h2>
           
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="h-entry">
              <a href="single.php">
                <img src="images/WhatsApp Image 2023-10-06 at 1.54.31 PM.jpeg" alt="Image" class="img-fluid1">
              </a>
              <h2 class="font-size-regular"><a href="Save-tax-income.php">Save 100% Tax On Income Upto RS 10 Lakh Per Annum</a></h2>
           
            </div> 
          </div>
          
        </div>
      </div>
    </section>

   


    <!--<section class="site-section bg-light" id="contact-section" data-aos="fade">-->
    <!--  <div class="container">-->
    <!--    <div class="row mb-5">-->
    <!--      <div class="col-12 text-center">-->
    <!--        <h2 class="section-title mb-3">Contact Us</h2>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--    <div class="row mb-5">-->
          


    <!--      <div class="col-md-4 text-center">-->
    <!--        <p class="mb-4">-->
    <!--          <span class="icon-room d-block h2 icon-phone"></span>-->
    <!--          <span>203 Fake St. Mountain View, San Francisco, California, USA</span>-->
    <!--        </p>-->
    <!--      </div>-->
    <!--      <div class="col-md-4 text-center">-->
    <!--        <p class="mb-4">-->
    <!--          <span class="icon-phone d-block h2 "></span>-->
    <!--          <a href="#" class="icon-phone">+1 232 3235 324</a>-->
    <!--        </p>-->
    <!--      </div>-->
    <!--      <div class="col-md-4 text-center">-->
    <!--        <p class="mb-0">-->
    <!--          <span class="icon-mail_outline d-block h2 icon-phone"></span>-->
    <!--          <a href="#" class="icon-phone">youremail@domain.com</a>-->
    <!--        </p>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--      <div class="col-md-12 mb-5">-->

            

    <!--        <form action="#" class="p-5 bg-white">-->
              
    <!--          <h2 class="h4 text-black mb-5">Contact Form</h2> -->

    <!--          <div class="row form-group">-->
    <!--            <div class="col-md-6 mb-3 mb-md-0">-->
    <!--              <label class="text-black" for="fname">First Name</label>-->
    <!--              <input type="text" id="fname" class="form-control">-->
    <!--            </div>-->
    <!--            <div class="col-md-6">-->
    <!--              <label class="text-black" for="lname">Last Name</label>-->
    <!--              <input type="text" id="lname" class="form-control">-->
    <!--            </div>-->
    <!--          </div>-->

    <!--          <div class="row form-group">-->
                
    <!--            <div class="col-md-12">-->
    <!--              <label class="text-black" for="email">Email</label> -->
    <!--              <input type="email" id="email" class="form-control">-->
    <!--            </div>-->
    <!--          </div>-->

    <!--          <div class="row form-group">-->
                
    <!--            <div class="col-md-12">-->
    <!--              <label class="text-black" for="subject">Subject</label> -->
    <!--              <input type="subject" id="subject" class="form-control">-->
    <!--            </div>-->
    <!--          </div>-->

    <!--          <div class="row form-group">-->
    <!--            <div class="col-md-12">-->
    <!--              <label class="text-black" for="message">Message</label> -->
    <!--              <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>-->
    <!--            </div>-->
    <!--          </div>-->

    <!--          <div class="row form-group">-->
    <!--            <div class="col-md-12">-->
    <!--              <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">-->
    <!--            </div>-->
    <!--          </div>-->

  
    <!--        </form>-->
    <!--      </div>-->
          
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->
    <section>
    <div class="popup-overlay" id="popupOverlay">
        <div class="popup">
            <span class="close" id="closePopup">&times;</span>
            <h2 class="mt-3">Disclaimer!</h2>
            <p>Goyama Financial is an AMFI-registered mutual fund distributor. We suggest investment products keeping in mind the suitability profile of the client. Mutual fund investments are subject to market risks. Returns are not guaranteed in mutual funds. We urge investors to go through offer documents/key information memorandum before deciding to make investments. Investors are encouraged to conduct their own due diligence before making investment decisions. As an AMFI-registered Mutual Fund Distributor, Viral Kothari deals with 'Regular' Plans of mutual fund schemes. When an investor subscribes to such schemes, Viral Kothari is entitled to receive a commission on the same. We are not registered as Investment Advisors as defined per the SEBI (Investment Advisers) Regulations, 2013  & do not provide any investment advice on other SEBI-regulated products. Nothing contained in this website should be construed as investment advice or recommendation.</p>
        </div>
    </div>
    </section>
      <?php
  include"footer.php"
  ?>
  