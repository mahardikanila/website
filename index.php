<!DOCTYPE html>
<html lang="en">
<head>
<title>Physiopreneur</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<?php include 'header.php';?>

<?php include 'navbar.php';?>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
	       <div id="search"></div>
        <li class="bg_lb"> <a href="tambah-pasien.php"> <i class="icon-plus"></i>Tambah Pasien</a> </li>
        <li class="bg_lg" data-toggle = "modal" data-target = "#myModal"> <a href="#"> <i class="icon-search"></i> Cari Pasien</a> </li>
      </ul>
    </div>
<!--End-Action boxes-->

<!-- Modal -->
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog"
   aria-labelledby = "myModalLabel" aria-hidden = "true">

   <div class = "modal-dialog">
      <div class = "modal-content">

         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>

            <h4 class = "modal-title" id = "myModalLabel">
               Input ID Pasien
            </h4>
         </div>

         <div class = "modal-body">
            <center><input type="text" name="id_pasien" value="" placeholder="ID Pasien"/></center>
         </div>

         <div class = "modal-footer">
            <button type = "button" class = "btn btn-default" data-dismiss = "modal">
               Close
            </button>
            <a href="rekam-medik.php">
              <button type = "button" class = "btn btn-primary">
                <i class="icon-search"></i>
                 Search
              </button>
            </a>
         </div>

      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->

</div><!-- /.modal -->

<!--Chart-box-->



      </div>
    </div>
  </div>
</div>
<!--Chart-box-->

<!--End-Chart-box-->


<!--end-main-container-part-->

<!--Footer-part-->



<!--end-Footer-part-->

<script src="js/excanvas.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flot.min.js"></script>
<script src="js/jquery.flot.resize.min.js"></script>
<script src="js/jquery.peity.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/matrix.js"></script>
<script src="js/matrix.dashboard.js"></script>
<script src="js/jquery.gritter.min.js"></script>
<script src="js/matrix.interface.js"></script>
<script src="js/matrix.chat.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/matrix.form_validation.js"></script>
<script src="js/jquery.wizard.js"></script>
<script src="js/jquery.uniform.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/matrix.popover.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/matrix.tables.js"></script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();
          }
          // else, send page to designated URL
          else {
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
