<?php 
include('header.php'); 
include('sidebar.php'); 


	if(isset($_GET['deletedetails'])){
		$deletedetails = $_GET['deletedetails'];
 $sql = "DELETE FROM `banners` WHERE id='$deletedetails '";
 
 
 if ($conn->query($sql) === TRUE) {
?>
<script>
         setTimeout(function() {
            swal({
                title: "Successfully Deleted",
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
	.active1{
  background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%);
}

.inactive{
	  background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);
}

.active1:hover {
  background-position: right center; /* change the direction of the change here */
}

.inactive:hover {
  background-position: right center; /* change the direction of the change here */
}



.active1 {
  flex: 1 1 auto;
  margin: 10px;
  padding: 8px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: white;
 /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
  box-shadow: 0 0 20px #eee;
  border-radius: 10px;
 }
 
 .inactive {
  flex: 1 1 auto;
  margin: 10px;
  padding: 8px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: white;
 /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
  box-shadow: 0 0 20px #eee;
  border-radius: 10px;
 }

</style>

<div class="content-wrapper">
    
<div class="container-fluid">
    
    <div class="row pt-2 pb-2">
     <div class="col-sm-12">
       <div class="btn-group float-sm-right">
        <a href="add_banner.php">
         <button type="button" class="btn btn-primary waves-effect waves-light m-1">Add &nbsp;<i class="fa fa-plus"></i></button> 
        </a>
      </div>
     </div>
     </div>
     
<div class="col-sm-12">

 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Banners</div>
            <div class="card-body">
              <div class="table-responsive">
			         <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr.No.</th>
                        <th>Banner Title</th>
						<th>Banner Image</th>
						<th>Banner Tagline</th>
                      <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
<?php 
$i = 1;


$sql = "SELECT * FROM banners";
$resultss = $conn->query($sql);
while($Active = $resultss->fetch_assoc()) {


?>
<tr role="row" class="odd">
<td><?php echo $i++ ; ?></td>
<td><?php echo $Active['title'];?></td>
<td >
<a href="uploads/banners/<?php echo $Active['image'];?>" data-fancybox="single_img">
    <img src="uploads/banners/<?php echo $Active['image'];?>" alt="lightbox" class="lightbox-thumb img-thumbnail" style="width: 70px; height: 35px; margin-bottom: 3px;">
</a></td>

<td><?php echo $Active['tagline'];?></td>
<td><?php if($Active['status']=='1'){?>

<small class="active1">Active</small>
<?php } else{?>

<small class="inactive">Inactive</small>
<?php } ?></td>


<td>


<a title="View This Row"  href="update_banner.php?viewinfo=<?php echo $Active['id']?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
<a title=" Delete This Row" onclick="return confirm('Are You Sure?')" href="view_banner.php?deletedetails=<?php echo $Active['id']?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>


</td>
</tr>

<?php } ?>
                </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
            </div>
            

</div>
<br>




</div>


</div>
  <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	

<?php 
include('footer.php'); 
?>