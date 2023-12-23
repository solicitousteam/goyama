<?php  
session_start();  
include('connection.php');

if(isset($_SESSION['username']))   
 {
    header("Location:index.php"); 
 }else{
	
 }
if(isset($_POST['submit']) && $_POST['captcha'] == $_SESSION['captcha'])  
{

$result = mysqli_query($conn,"SELECT * FROM admin WHERE (username='" . $_POST["username_or_email"] . "' or email='" . $_POST["username_or_email"] . "') and password = '". md5($_POST["password"])."'");
$row = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["username"] = $row['username']; 
$_SESSION["username"] = $row['email']; 

echo '<script type="text/javascript"> window.open("index.php","_self");</script>';          
}else{?>
<script>
 setTimeout(function() {
    swal({
        title: "Invalid UserName or Password",
        text: "Try Again",
        type: "error"
      }).then(function() {
        window.location.href = 'Login.php';
      });
  }, 1000);
</script><?php }
}else{ 
      $msg = 'Invalid Captcha please try again!';   
    
    }
?>

<?php

$systemsetting = "SELECT * from systemsetting ";
$systemsettingsql = $conn->query($systemsetting);
$website = $systemsettingsql->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title><?php echo $website['companyname']?></title>
  <!--favicon-->
  <link rel="icon" href="uploads/SystemSettingimg/<?php echo $website['logo']?>" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="uploads/SystemSettingimg/<?php echo $website['logo']?>" width="42%">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign In</div>
		    <form class="form" method="post" action="">
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="exampleInputUsername" class="sr-only">Username</label>
				  <input type="text" name="username_or_email" id="exampleInputUsername" class="form-control form-control-rounded" placeholder="Username or Email">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="exampleInputPassword" class="sr-only">Password</label>
				  <input type="password" name="password" id="exampleInputPassword" class="form-control form-control-rounded" placeholder="Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
              <a href=""><img src="captcha.php"></a>
            </div>
            <div class="form-group">
              <label for="captcha">Captch</label>
              <input type="text" class="form-control" name="captcha" placeholder="Captch" required>
            </div>
			<div class="form-row mr-0 ml-0">
			 <div class="form-group col-6 text-right">
			  <a href="Forgotpassword.php">Reset Password</a>
			 </div>
			</div>
			 <input value="Sign In" name="submit" type="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">
			 </form>
			 
		   </div>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/sweetalert2.all.min.js"></script>
  
</body>


</html>
