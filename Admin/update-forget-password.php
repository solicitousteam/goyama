<?php
if(isset($_POST['new-password']) && $_POST['reset_link_token'] && $_POST['email'])
{
include('connection.php');

$emailId = $_POST['email'];
$token = $_POST['reset_link_token'];
$password = md5($_POST['password']);
$query = mysqli_query($conn,"SELECT * FROM `admin` WHERE `reset_link_token`='".$token."' and `email`='".$emailId."'");
$row = mysqli_num_rows($query);
if($row){
mysqli_query($conn,"UPDATE admin set  password='" . $password . "', reset_link_token='" . NULL . "' ,exp_date='" . NULL . "' WHERE email='" . $emailId . "'");
{?>

	<script>
    setTimeout(function() {
    swal({
    title: "Sucessfully Password Updated",
    text: "Thanks!",
    type: "success"
    }).then(function() {
    window.location.href = 'Login.php';
    });
    }, 1000);
    </script><?php }
}else{
echo "<p>Something goes wrong. Please try again</p>";
}
}

?>
	<script src="assets/js/sweetalert2.all.min.js"></script>
