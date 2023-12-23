<?php include('header.php'); 
	include('sidebar.php'); 
	
	if(isset($_POST['submit'])){
		
		$companyname = $_POST['companynames'];
		$tagline = $_POST['tagline'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		$facebook = $_POST['facebook'];
		$instagram = $_POST['instagram'];
		$twitter = $_POST['twitter'];
		$linkdin = $_POST['linkdin'];
		$youtube = $_POST['youtube'];
		$abouttitle = $_POST['abouttitle'];
		$iframe = $_POST['Iframe'];
		$footerdec = $_POST['footer_des'];
		$aboutdec = $_POST['ckeditor'];
		$date = date('d-m-Y h:i:s a');



$Foldername = "uploads/SystemSettingimg/";

if ($_FILES["logo"]["name"]){
$filename = basename($_FILES["logo"]["name"]);
$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
$logo = time().'logo.'.$imageFileType;
$imaguplodlogo = $Foldername . $logo;
move_uploaded_file($_FILES["logo"]["tmp_name"], $imaguplodlogo);
}else{
$logo = $_POST['logohidden'];	
}

if ($_FILES["favicon"]["name"]){
$filenameHeaderLogo = basename($_FILES["favicon"]["name"]);
$imageFileTypeHeaderLogo = pathinfo($filenameHeaderLogo,PATHINFO_EXTENSION);
$favicon = time().'favicon.'.$imageFileTypeHeaderLogo;
$imaguplodfavicon = $Foldername . $favicon;
move_uploaded_file($_FILES["favicon"]["tmp_name"], $imaguplodfavicon);
}else{
$favicon = $_POST['faviconhidden'];	
}

if ($_FILES["footerlogo"]["name"]){
$filenameFooterLogo = basename($_FILES["footerlogo"]["name"]);
$imageFileTypeFooterLogo = pathinfo($filenameFooterLogo,PATHINFO_EXTENSION);
$footerlogo = time().'footerlogo.'.$imageFileTypeFooterLogo;
$imaguplodfooterlogo = $Foldername . $footerlogo;
move_uploaded_file($_FILES["footerlogo"]["tmp_name"], $imaguplodfooterlogo);
}else{
$footerlogo = $_POST['footerlogohidden'];	
} 

  


$systemsetting = "UPDATE systemsetting SET footer_des='$footerdec', aboutdec = '$aboutdec', abouttitle = '$abouttitle', companyname = '$companyname', tagline = '$tagline', email = '$email', mobile = '$mobile', address = '$address', logo ='$logo', favicon = '$favicon', footerlogo = '$footerlogo', facebook = '$facebook', instagram = '$instagram', twitter = '$twitter', linkdin = '$linkdin', youtube = '$youtube', creatdate = '$date', updatedate = '$date', Iframe = '$iframe'  WHERE id='1'";

$result =  mysqli_query($conn,$systemsetting);

if($result){ ?>

<script>
         setTimeout(function() {
            swal({
                title: "Successfully Submitted",
                text: "Thanks!",
                type: "success"
              }).then(function() {
                window.location.href = 'view_site_setting.php';
              });
          }, 1000);
        </script>


<?php 
}
}


$sql = "SELECT * FROM systemsetting WHERE id='1'";
$resultss = $conn->query($sql);

?>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

	    <div class="row">
           <div class="col-lg-12">
		     <div class="card">
			   <div class="card-header text-uppercase"> System Setting</div>
			     <div class="card-body">
				    <form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
				        <?php 
  while($row = $resultss->fetch_assoc()) {

?>
					    <div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Company Name</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<input type="text" class="form-control" name="companynames" placeholder="some text" value="<?php echo $row['companyname']?>">
							  </div>
						  </div>
						</div>
						<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Tagline</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<textarea type="textarea" class="form-control" name="tagline" placeholder="some text"><?php echo $row['tagline']?></textarea>
							  </div>
						  </div>
						</div>
						
						<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Email</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
							<textarea type="text" class="form-control" name="email" placeholder="Email"><?php echo $row['email']?></textarea>
						  </div>
						  </div>
						</div>
						
						<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Mobile Number</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<input type="text" class="form-control" name="mobile" placeholder="some text" value="<?php echo $row['mobile']?>">
							  </div>
						  </div>
						</div>
						
						<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Address</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<textarea type="text" class="form-control" name="address" placeholder="some text"><?php echo $row['address']?></textarea>
							  </div>
						  </div>
						</div>
						
						<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Logo</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
				<a href="uploads/SystemSettingimg/<?php echo $row['logo']?>" data-fancybox="images" data-caption="This image has a caption">
                 <img src="uploads/SystemSettingimg/<?php echo $row['logo']?>" alt="lightbox" class="lightbox-thumb img-thumbnail" style="width: 40px;">
                </a>	  							    
								<input type="hidden" class="form-control" name="logohidden" value="<?php echo $row['logo']?>">
								<input type="file" class="form-control"  name="logo">
							  </div>
						  </div>
						</div>
						
						<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Favicon</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
				<a href="uploads/SystemSettingimg/<?php echo $row['favicon']?>" data-fancybox="images" data-caption="This image has a caption">
                 <img src="uploads/SystemSettingimg/<?php echo $row['favicon']?>" alt="lightbox" class="lightbox-thumb img-thumbnail" style="width: 40px;">
                </a>	    
								<input type="hidden" class="form-control" name="faviconhidden" placeholder="some text" value="<?php echo $row['favicon']?>">
								<input type="file" class="form-control"  name="favicon">
							  </div>
						  </div>
						</div>
						
						<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Footer Logo</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
				<a href="uploads/SystemSettingimg/<?php echo $row['footerlogo']?>" data-fancybox="images" data-caption="This image has a caption">
                 <img src="uploads/SystemSettingimg/<?php echo $row['footerlogo']?>" alt="lightbox" class="lightbox-thumb img-thumbnail" style="width: 40px;">
                </a>
								<input type="hidden" class="form-control" name="footerlogohidden" placeholder="some text" value="<?php echo $row['footerlogo']?>">
								<input type="file" class="form-control"  name="footerlogo">
							  </div>
						  </div>
						</div>
						
							<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">AboutUs title</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<textarea type="text" class="form-control" name="abouttitle" placeholder="some text"><?php echo $row['abouttitle']?></textarea>
							  </div>
						  </div>
						</div>
						
                     				<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Footer Description</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<textarea type="text" class="form-control" name="footer_des" placeholder="some text"><?php echo $row['footer_des']?></textarea>
							  </div>
						  </div>
						</div>


		<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Aboutus Description</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<textarea name="ckeditor"><?php echo $row['aboutdec']?></textarea>
							  </div>
						  </div>
						</div>
						
						
						
							<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Facebook</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<textarea type="text" class="form-control" name="facebook" placeholder="some text"><?php echo $row['facebook']?></textarea>
							  </div>
						  </div>
						</div>
						
							<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Instagram</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<textarea type="text" class="form-control" name="instagram" placeholder="some text"><?php echo $row['instagram']?></textarea>
							  </div>
						  </div>
						</div>
						
							<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Twitter</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<textarea type="text" class="form-control" name="twitter" placeholder="some text"/><?php echo $row['twitter']?></textarea>
							  </div>
						  </div>
						</div>
						<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Iframe</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<textarea type="text" class="form-control" name="Iframe" placeholder="some text"/><?php echo $row['Iframe']?></textarea>
							  </div>
						  </div>
						</div>
							<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Pinterest</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<textarea type="text" class="form-control" name="linkdin" placeholder="some text"><?php echo $row['linkdin']?></textarea>
							  </div>
						  </div>
						</div>
						
						<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Youtube</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<textarea type="text" class="form-control" name="youtube" placeholder="url"><?php echo $row['youtube']?></textarea>
								<div class="input-group-append">
							  </div>
						  </div>
						</div>
						</div>
<p class="text-center"><input type="submit" value="submit"  class="btn btn-success" name="submit"></p>
<?php } ?>
					</form>
		   
	    </div>


    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
 

<?php include('footer.php'); ?>
	


