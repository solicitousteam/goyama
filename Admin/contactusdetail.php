<?php 
include('header.php'); 
include('sidebar.php'); 
$viewinfo = $_GET['viewinfo'];
?>


<style>
.select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
    width: 100% !important;
}
</style>

<!-- Header End --> 
<div id="wrapper">
<div class="clearfix"></div>
<!-- End Breadcrumb-->
<div class="content-wrapper">
<div class="container-fluid">
<div class="card">
<div class="card-body">
<?php
$query = "SELECT * FROM contactus WHERE id='$viewinfo'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

while($result = mysqli_fetch_assoc($data))
{ 
?>
		<div class="row">
			<div class="col-md-6">
				<h4>Name</h4>
				<p><?php echo $result['name'];?></p>
			</div>
			<div class="col-md-6">
				<h4>Email</h4>
				<p><td><?php echo $result['email'];?></td></p>
			</div>

			<div class="col-md-6">
				<h4>Subject</h4>
				<p><td><?php echo $result['subject'];?></td></p>
			</div>
			<div class="col-md-12">
				<h4>Message</h4>
				<p><td><?php echo $result['message'];?></td></p>
			</div>
		</div>

<?php

}

?>

</div></div></div></div>

<?php 
include('footer.php'); 
?>

