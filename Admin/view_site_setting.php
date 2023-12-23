<?php 
include('header.php'); 
include('sidebar.php'); 

 ?>
 
 <style>
     
     tr:nth-child(even) {
  background-color: #D6EEEE;
}


 </style>
<!-- Header End --> 
<div id="wrapper">
<div class="clearfix"></div>
<!-- End Breadcrumb-->
<div class="card">
<div class="card-body">
<div class="content-wrapper">
<div class="container-fluid">
<form id="signupForm" action="#" method="POST">
<h4 class="form-header text-uppercase"><i class="fa fa-address-book-o"></i>View Websetting</h4>
<a href="Site-Setting.php"><button type="button" class="btn btn-primary waves-effect waves-light m-1">Update &nbsp;<i class="fa fa-pencil"></i></button></a>
<table class="table table-bordered" style="width:100%">
<thead>
    <?php
$query = "SELECT * FROM systemsetting";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

while($result = mysqli_fetch_assoc($data))
{ 
?>
 <tr>
    <th style="width:20%"><b>ID</b></th>
    <td ><?php echo $result['id'];?></td>
  </tr>
 <tr>
    <th style="width:20%"><b>Company Name</b></th>
    <td><?php echo $result['companyname'];?></td>
  </tr>
  
   <tr>
    <th style="width:20%"><b>Email</b></th>
    <td ><?php echo $result['email'];?></td>
  </tr>
 <tr>
     
     
    <th style="width:20%"><b>Mobile</b></th>
    <td ><?php echo $result['mobile'];?></td>
  </tr>
 <tr>
     
    
    <th style="width:20%"><b>Address</b></th>
    <td ><?php echo $result['address'];?></td>
  </tr>
 
     
      <tr>
    <th style="width:20%"><b>Tagline</b></th>
    <td ><?php echo $result['tagline'];?></td>
  </tr>

     
     
      <tr>
    <th style="width:20%"><b>About Title</b></th>
    <td ><?php echo $result['abouttitle'];?></td>
  </tr>
 
     
     
      <tr>
    <th style="width:20%"><b>About Description</b></th>
    <td ><?php echo $result['aboutdec'];?></td>
  </tr>

           <tr>
    <th style="width:20%"><b>Footer Description</b></th>
    <td ><?php echo $result['footer_des'];?></td>
  </tr>
      <tr>
    <th style="width:20%"><b>Iframe</b></th>
    <td class="Iframe"><?php echo $result['Iframe'];?></td>
  </tr>

     
     
      <tr>
    <th style="width:20%"><b>Facebbok</b></th>
    <td ><?php echo $result['facebook'];?></td>
  </tr>
 <tr>
     
      <tr>
    <th style="width:20%"><b>Instagram</b></th>
    <td ><?php echo $result['instagram'];?></td>
  </tr>
 
     
     
      <tr>
    <th style="width:20%"><b>Twitter</b></th>
    <td ><?php echo $result['twitter'];?></td>
  </tr>

     
      <tr>
    <th style="width:20%"><b>Linkdin</b></th>
    <td ><?php echo $result['linkdin'];?></td>
  </tr>

     
      <tr>
    <th style="width:20%"><b>Youtube</b></th>
    <td ><?php echo $result['youtube'];?></td>
  </tr>

     
     
      <tr>
    <th style="width:20%"><b>Logo</b></th>
    <td ><img src="uploads/SystemSettingimg/<?php echo $result['logo'];?>" width="10%"></td>
  </tr>

     
       <tr>
    <th style="width:20%"><b>Favicon</b></th>
    <td ><img src="uploads/SystemSettingimg/<?php echo $result['favicon'];?>" width="10%"></td>
  </tr>
     
      <tr>
    <th style="width:20%"><b>Footer Logo</b></th>
    <td ><img src="uploads/SystemSettingimg/<?php echo $result['footerlogo'];?>" width="10%"></td>
  </tr>
     

 
 

<?php

}

?>
</thead>
</table>
</div>
<br>
</form>
</div>
</div>
</div>
</div>
</div>
</div>


<?php include('footer.php'); ?>
