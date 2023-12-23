<?php
include ('connection.php');
$systemsetting = "SELECT * from systemsetting ";
$systemsettingsql = $conn->query($systemsetting);
$website = $systemsettingsql->fetch_assoc();

?>

<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
<div class="brand-logo">
<a href="index.php">
<img src="uploads/SystemSettingimg/<?php echo $website['logo']?>" class="logo-icon" alt="logo icon">
<h5 class="logo-text">Dashboard</h5>
</a>
</div>
<ul class="sidebar-menu do-nicescrol">
<li>
<a href="index.php" class="waves-effect">
<i class="icon-home"></i> <span>Dashboard</span></i>
</a>
</li>

<li>
<a href="view_site_setting.php" class="waves-effect">
<i class="fa fa-magnet" aria-hidden="true"></i>
<span>Site Setting</span>
</a>
</li>

<li>
<a href="view_banner.php" class="waves-effect">
<i class="fa fa-picture-o" aria-hidden="true"></i>
<span>Banners</span>
</a>

</li>

<!--<li>-->
<!--<a href="view_tour.php" class="waves-effect">-->
<!--<i class="fa fa-plane" aria-hidden="true"></i>-->
<!--<span>Tour</span>-->
<!--</a>-->

<!--</li>-->

<!--<li>-->
<!--<a href="view_car.php" class="waves-effect">-->
<!--<i class="fa fa-car" aria-hidden="true"></i>-->
<!--<span>Car</span>-->
<!--</a>-->
<!--</li>-->



<!--<li>-->
<!--<a href="view_tourcart.php" class="waves-effect">-->
<!--<i class="fa fa-car" aria-hidden="true"></i>-->
<!--<span>Tourcatdetails</span>-->
<!--</a>-->
<!--</li>-->



 <!-- <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-note"></i> <span>Management</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    		  <li><a href="view_service.php"><i class="fa fa-circle-o"></i> Services</a></li>
    		  <li><a href="view_employee.php"><i class="fa fa-circle-o"></i> Employees</a></li>
    		  <li><a href="view_package.php"><i class="fa fa-circle-o"></i> Package</a></li>
    		  <li><a href="view_document.php"><i class="fa fa-circle-o"></i> Documents</a></li>
    		
        </ul>
      </li>
      
        <li>
        <a href="javaScript:void();" class="waves-effect">
           <i class="icon-envelope"></i> <span>Client Manage</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    		  <li><a href="view_client.php"><i class="fa fa-circle-o"></i> Client</a></li>
    		  <li><a href="view_cashstudy.php"><i class="fa fa-circle-o"></i> Casestudy</a></li>
    		  <li><a href="view_eprocure.php"><i class="fa fa-circle-o"></i> eProcure AC</a></li>
    		  <li><a href="view_clientdocument.php"><i class="fa fa-circle-o"></i> Documents</a></li>
    		
        </ul>
      </li>
      
            <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-layers"></i><span>Milestone Manage</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    		  <li><a href="view_mailstone.php"><i class="fa fa-circle-o"></i>  Milestone</a></li>
    
    		
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-fire"></i> <span>Call Logs Manager</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    		  <li><a href="view_calllog.php"><i class="fa fa-circle-o"></i>  Call Logs</a></li>
    
    		
        </ul>
      </li>


 <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-fire"></i> <span>Sales</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    		  <li><a href="view_lead.php"><i class="fa fa-circle-o"></i>  Leads</a></li>
    		   <li><a href="add_reports.php"><i class="fa fa-circle-o"></i>  Reports</a></li>
    
    		
        </ul>
      </li>

-->


</ul>
</li>
</ul>
</div>