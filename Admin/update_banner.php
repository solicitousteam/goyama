<?php include('header.php'); 
	include('sidebar.php'); 
	
	
	$id = $_GET['viewinfo'];
	
	if(isset($_POST['submit'])){
		

		$tagline = $_POST['tagline'];
		$title = $_POST['title'];




$Foldername = "uploads/banners/";

if ($_FILES["image"]["name"]){
$filename = basename($_FILES["image"]["name"]);
$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
$image = time().'image.'.$imageFileType;
$imaguplodimage = $Foldername . $image;
move_uploaded_file($_FILES["image"]["tmp_name"], $imaguplodimage);
}else{
    
    $image = $_POST['imagehidden'];
}




$systemsetting = "update banners SET title='$title',tagline='$tagline',image='$image' where id='$id'";

$result =  mysqli_query($conn,$systemsetting);

if($result){ ?>

<script>
         setTimeout(function() {
            swal({
                title: "Successfully Updated",
                text: "Thanks!",
                type: "success"
              }).then(function() {
                window.location.href = 'view_banner.php';
              });
          }, 1000);
        </script>


<?php 
}
}

$sql = "SELECT * FROM banners where id='$id'";
$resultss = $conn->query($sql);
$Active = $resultss->fetch_assoc();

?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

	    <div class="row">
           <div class="col-lg-12">
		     <div class="card">
			   <div class="card-header text-uppercase"> Banners</div>
			     <div class="card-body">
  <form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
      
        <div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Banner Title</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<input type="text" class="form-control" name="title" placeholder="some text" value="<?php echo $Active['title'] ?>">
							  </div>
						  </div>
						</div>
						<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Banner Tagline</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<textarea type="text" class="form-control" name="tagline" placeholder="some text"><?php echo $Active['tagline'] ?></textarea>
							  </div>
						  </div>
						</div>
						
								<div class="form-group row">
						  <label for="basic-input" class="col-sm-3 col-form-label">Banner image</label>
						  <div class="col-sm-9">
							<div class="input-group mb-3">
								<input type="file" class="form-control" name="image" placeholder="some text">
															    <a href="uploads/banners/<?php echo $Active['image'];?>" data-fancybox="id_proof">
    <img src="uploads/banners/<?php echo $Active['image'];?>" alt="lightbox" class="lightbox-thumb img-thumbnail" style="width: 70px; height: 35px;">
</a>
<input type="hidden" class="form-control" name="imagehidden" placeholder="single_img" value="<?php echo $Active['image']?>" >
							  </div>
						  </div>
						</div>
						<p class="text-center"><input type="submit" value="submit"  class="btn btn-success" name="submit"></p>
  </form>


	    </div>


    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

<?php include('footer.php'); ?>