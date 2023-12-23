<?php 
include('header.php');
include('sidebar.php');
?>
 
  
 <div class="clearfix"></div>
         <div class="content-wrapper">
            <div class="container-fluid">

               <div class="row">
                  <div class="col-12 col-lg-6 col-xl-6">
                     <div class="card">
                        <div class="card-header">
                           Countries we Captured
                           <div class="card-action">
                              <div class="dropdown">
                                 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                                 <i class="icon-options"></i>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void();">Action</a>
                                    <a class="dropdown-item" href="javascript:void();">Another action</a>
                                    <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="row">
                              <div class="col-lg-12 col-xl-12 ">
                                 <div id="dashboard-map" style="height: 235px"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-6">
                     <div class="card">
                        <div class="card-header">
                           Call Logs 
                           <div class="card-action">
                              <div class="dropdown">
                                 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                                 <i class="icon-options"></i>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void();">Action</a>
                                    <a class="dropdown-item" href="javascript:void();">Another action</a>
                                    <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <canvas id="dashboard-chart-1"></canvas>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End Row-->
              </div>
             </div>
         <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
         
		 <?php include('footer.php'); ?>
		