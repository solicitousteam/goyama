<?php 
include('header.php'); 
include('sidebar.php'); 


	if(isset($_GET['deletedetails'])){
		$deletedetails = $_GET['deletedetails'];
 $sql = "DELETE FROM `contactus` WHERE id='$deletedetails '";
 
 
 if ($conn->query($sql) === TRUE) {
?>
<script>
         setTimeout(function() {
            swal({
                title: "Successfully Deleted",
                text: "Thanks!",
                type: "success"
              }).then(function() {
                window.location.href = 'contactus.php';
              });
          }, 1000);
        </script>
<?php
} else {
?>
<script>
         setTimeout(function() {
            swal({
                title: "Successfully Deleted",
                text: "Thanks!",
                type: "error"
              }).then(function() {
                window.location.href = 'contactus.php';
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
</style>

<div class="content-wrapper">
    
<div class="container-fluid">
    
    <div class="row pt-2 pb-2">
     <div class="col-sm-12">
       <div class="btn-group float-sm-right">
        <a href="Slider.php">
        <!-- <button type="button" class="btn btn-primary waves-effect waves-light m-1">Add &nbsp;<i class="fa fa-plus"></i></button> -->
        </a>
      </div>
     </div>
     </div>
     
<div class="col-sm-12">

 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Contact Us</div>
            <div class="card-body">
              <div class="table-responsive">
			         <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr.No.</th>
                        <th>Name</th>
						<th>Email</th>
                        <th>Subject</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
<?php 
$i = 1;


$sql = "SELECT * FROM contactus";
$resultss = $conn->query($sql);
while($Active = $resultss->fetch_assoc()) {


?>
<tr role="row" class="odd">
<td><?php echo $i++ ; ?></td>
<td><?php echo $Active['name'];?></td>
<td><?php echo $Active['email'];?></td>
<td><?php echo $Active['subject'];?></td>

<td>


<a title="Vier Full Information" href="contactusdetail.php?viewinfo=<?php echo $Active['id']?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
<a title=" Delete This Row" href="contactus.php?deletedetails=<?php echo $Active['id']?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>


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

