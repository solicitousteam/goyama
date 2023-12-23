
<?php


include ('Admin/connection.php');
$systemsetting = "SELECT * from systemsetting ";
$systemsettingsql = $conn->query($systemsetting);
$website = $systemsettingsql->fetch_assoc();

$base_url="https://main.solicitous.cloud/finances-master/Admin/";

?>
<style>
    img.log-cle {
    border-radius: 100%;
}

  .float{
  position:fixed;
  width:60px;
  height:60px;
  bottom:40px;
  right:40px;
  background-color:#25d366;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  font-size:30px;
  box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
  margin-top:16px;
}

footer.site-footer {
    padding: 23px;
}
.site-footer .footer-heading {
    font-size: 16px;
    color: #fff;
    margin-top: 29px;
}

.pt-5, .py-5 {
    padding-top: 0rem!important;
}

</style>
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <a href="https://wa.me/+917304948075" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p><?php echo $website['footer_des'] ?></p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="termsandpolicy.php" class="smoothscroll">T&C</a></li>
                  <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                  <li><a href="#services-section" class="smoothscroll">Services</a></li>
                  <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                  <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3 footer-social">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="<?php echo $website['facebook'] ?>" class="pl-0 pr-3" target="_blank"><span class="icon-facebook"></span></a>
                <a href="<?php echo $website['instagram'] ?>" class="pl-3 pr-3" target="_blank"><span class="icon-instagram"></span></a>
                <a href="<?php echo $website['linkdin'] ?>" class="pl-3 pr-3" target="_blank"><span class="icon-linkedin"></span></a>
                <a href="<?php echo $website['twitter'] ?>" class="pl-3 pr-3" target="_blank"><span class="icon-twitter"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              <p>Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Solicitous</a>
              </p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        
            </div>
          </div>
          
        </div>
      </div>
    </footer>
    
    
    <style>
.popup-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    align-items: center;
    justify-content: center;
    z-index: 1;

}



@media(max-width:768px){
    
/*    .popup-overlay {*/
/*padding-top:400px;*/
/*}*/
    
}

.popup {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    position: relative;
    text-align: center;
    max-width: 96%;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    max-height: 500px; 
    overflow-y: auto; 

}

.popup p{
            text-align: justify;
    font-size: 13px;

}

.close {
    position: absolute;
    top: 0;
    right: 10px;
    font-size: 52px;
    cursor: pointer;
}
    </style>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>
  <script>
//     document.addEventListener('contextmenu', function(event) {
//       event.preventDefault(); // Prevent the context menu from appearing
//     });
  </script>

<script>
//     document.addEventListener('keydown', function(event) {
//         // Check if Ctrl (or Command on Mac) key is pressed along with the 'U' key
//         if ((event.ctrlKey || event.metaKey) && event.key === 'u') {
//             event.preventDefault(); // Prevent the default action (viewing page source)
//         }
//     });
 </script>
 <script>


  document.addEventListener("DOMContentLoaded", function() {
        var popupOverlay = document.getElementById("popupOverlay");
        var closePopup = document.getElementById("closePopup");

        // Check if the popupSeen flag is set in sessionStorage
        var popupSeen = sessionStorage.getItem("popupSeen");

        if (!popupSeen) {
            // If the flag is not set, display the popup
            popupOverlay.style.display = "flex";

            closePopup.addEventListener("click", function() {
                // Hide the popup
                popupOverlay.style.display = "none";
                // Set the flag in sessionStorage to indicate that the user has seen the popup
                sessionStorage.setItem("popupSeen", "true");
            });
        }
    });


        
        
        $(".all-banner-slide").owlCarousel({
	items: 1,
	smartSpeed: 1000,
	autoplay: true,
	lazyLoad: true,
	dots: false,
	autoplayTimeout: 3000,
	loop:true
});
    </script>
  
  </body>
</html>