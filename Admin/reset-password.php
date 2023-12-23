<!doctype html>
<html lang="en">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="uploads/Logo/logo.jpg" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="assets/css/app-style.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
		<!--<script src="https://kit.fontawesome.com/da3af72861.js" crossorigin="anonymous"></script>-->
	<title>Admin</title>
	
	
	
<style>
    .eyefafa{
 position: absolute;
    right: 1px;
    top: 4px;
    }
</style>
	
	
</head>

<body class="bg-login">
						
										<?php
if($_GET['key'] && $_GET['token'])
{
include('connection.php');


$email = $_GET['key'];
$token = $_GET['token'];
$query = mysqli_query($conn,
"SELECT * FROM `admin` WHERE `reset_link_token`='".$token."' and `email`='".$email."';"
);
$curDate = date("Y-m-d H:i:s");
if (mysqli_num_rows($query) > 0) {
$row= mysqli_fetch_array($query);
if($row['exp_date'] >= $curDate){ ?>
	<div class="wrapper">
		<div class="authentication-reset-password d-flex align-items-center justify-content-center">
		    
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card">
						<div class="row g-0">
							<div class="col-lg-12 border-end">
								<div class="card-body">
								    
									<div class="p-5">
										<div class="text-start">
										</div>
										<h4 class="mt-5 font-weight-bold">Genrate New Password</h4>
										<p class="text-muted">We received your reset password request. Please enter your new password!</p>

										<form action="update-forget-password.php" method="post" id="myform">
<input type="hidden" name="email" value="<?php echo $email;?>">
<input type="hidden" name="reset_link_token" value="<?php echo $token;?>">
										<div class="mb-3 mt-5">
											<label class="form-label">New Password</label>
											<input type="text" name="password" required class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="password" placeholder="Enter new password" />
										</div>
										<div class="mb-3">
											<label class="form-label">Confirm Password</label>
											<input type="text" name="cpassword" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required onBlur="checkpass()" id="confirm_password" placeholder="Confirm password" />
										</div>
											<span id='message'></span>
										<div class="d-grid gap-2">
											<button type="submit" name="new-password" class="btn btn-primary">Change Password</button> 
										
									</div>
									</form>
									<?php } } else{?>
									    
									    							   <script>
    setTimeout(function() {
    swal({
    title: "Link Expired",
    text: "Thanks!",
    type: "error"
    }).then(function() {
    window.location.href = 'Forgotpassword.php';
    });
    }, 1000);
    </script>
									    
  <?php
}
}
?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</body>
	</html>
	
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/js/sweetalert2.all.min.js"></script>
	
	<!--Password show & hide js -->
	<script>
	
	
	
	function checkpass() {		
	if ($('#password').val() != $('#confirm_password').val()){
		//alert('Password Length 6 Chars minimum');
		$("#message").html('Password Not Matching').css('color', 'red');
		$('#confirm_password').val("");
	} else if($('#password').val() === $('#confirm_password').val()){
		$("#message").html('');
	}
}

	
	
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<script>
    $(function(){
  
  $('#eye').click(function(){
       
        if($(this).hasClass('fa-eye-slash')){
           
          $(this).removeClass('fa-eye-slash');
          
          $(this).addClass('fa-eye');
          
          $('#password').attr('type','text');
            
        }else{
         
          $(this).removeClass('fa-eye');
          
          $(this).addClass('fa-eye-slash');  
          
          $('#password').attr('type','password');
        }
    });
});
</script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
$(document).ready(function() {
$("#myform").validate();
});
</script>


	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>



</html>