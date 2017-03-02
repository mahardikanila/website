<!DOCTYPE html>
<html lang="en">
<head>
<title>Tambah Pasien - Physiopreneur</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
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

<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="index.html"><i class="icon icon-plus-sign"></i> <span>Pendaftaran</span></a> </li>
    <li><a href="data-pasien.html"><i class="icon icon-book"></i> <span>Data Pasien</span></a> </li>
    <li><a href="pembayaran.html"><i class="icon icon-book"></i> <span>Pembayaran</span></a> </li>
  </ul>
</div>
<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Pendaftaran Pasien</a> </div>
    <h1>Pendaftaran Pasien</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Data Diri Pasien</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="rekam-medik.html" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">ID Pasien :</label>
                <div class="controls">
                  <input type="text" class="span11" disabled="" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Name :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Nama Lengkap" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label"> Tanggal Lahir :</label>
                <div class="controls">
                  <input type="date" class="span11" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Alamat</label>
                <div class="controls">
                  <textarea class="span11" ></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">No Handphone :</label>
                <div class="controls">
                  <input type="number" class="span11" placeholder="No Handphone" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Foto :</label>
                <div class="controls">
                  <input type="file" class="span11" />
                </div>
              </div>
              <div class="form-actions">
                <button class="btn btn-success">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end-main-container-part-->


<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--End-Footer-part-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.gritter.min.js"></script>
<script src="js/jquery.peity.min.js"></script>
<script src="js/matrix.js"></script>
<script src="js/matrix.interface.js"></script>
<script src="js/matrix.popover.js"></script>
</body>
</html>
