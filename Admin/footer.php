<?php
include ('connection.php');
$systemsetting = "SELECT * from systemsetting ";
$systemsettingsql = $conn->query($systemsetting);
$website = $systemsettingsql->fetch_assoc();

?>

		 
		   <!--Start footer-->
         <footer class="footer">
            <div class="container" style="margin:0;">
               <div class="text-center">
               <a href="#"> <span style="color:red;"><?php echo $website['companyname']?></span> </a> Copyright © <?php echo date('Y');?> Admin
               </div>
            </div>
         </footer>
         <!--End footer-->
      </div>

	  <script>
function closeMe(element) {
  $(element).parent().remove();
}

function addMore() {
  var container = $('#list');
  var item = container.find('.default').clone();
  item.removeClass('default');
  //add anything you like to item, ex: item.addClass('abc')....
  item.appendTo(container).show();
}
</script>
<!--End wrapper-->
<!-- Bootstrap core JavaScript-->
<!--<script src="assets/js/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- simplebar js -->
<script src="assets/plugins/simplebar/js/simplebar.js"></script>
<!-- waves effect js -->
<script src="assets/js/waves.js"></script>
<!-- sidebar-menu js -->
<script src="assets/js/sidebar-menu.js"></script>
<!-- Custom scripts -->
<script src="assets/js/app-script.js"></script>
<!-- Vector map JavaScript -->
<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Chart js -->
<script src="assets/plugins/Chart.js/Chart.min.js"></script>
<!-- Index js -->
<script src="assets/js/index.js"></script>
<script src="https://cdn.ckeditor.com/4.5.11/standard-all/ckeditor.js"></script>
<script>
const API_KEY = ''; // Put your API KEY here
CKEDITOR.config.embed_provider = `http://iframely.com/api/oembed?url={url}&callback={callback}&api_key={ ${API_KEY} }`;
CKEDITOR.replace('ckeditor', {
  extraPlugins: 'embed,autoembed,magicline' });
</script>	 
<script src="assets/plugins/fancybox/js/jquery.fancybox.min.js"></script>
<script src="assets/js/sweetalert2.all.min.js"></script>

    <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>

   </body>
  </html>