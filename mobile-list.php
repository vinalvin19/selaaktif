<?php  
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="root" >
  <title>SelaAktif Configuration</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">SelaAktif</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-gears"></i>
            <span class="nav-link-text">Settings</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="send-sms.php">
            <i class="fa fa-fw fa-send"></i>
            <span class="nav-link-text">Send SMS</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="mobile-list.php">
            <i class="fa fa-fw fa-mobile"></i>
            <span class="nav-link-text">Mobile List</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="restart.php">
            <i class="fa fa-fw fa-refresh"></i>
            <span class="nav-link-text">Restart Device</span>
          </a>
        </li> 
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="jammer-conf.php">
            <i class="fa fa-fw fa-signal"></i>
            <span class="nav-link-text">Jammer Configuration</span>
          </a>
        </li> 
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li> -->
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">SelaAktif</a>
        </li>
        <li class="breadcrumb-item active">Mobile List - <?php echo $_SESSION["operator"]; ?></li>
      </ol>
      <!-- Area Chart Example-->
      <?php
      ini_set('display_errors', 'On');
      error_reporting(E_ALL);

      //$filename = "/usr/local/etc/yate/tmsidata.conf";
      $filename = "tmsidata.conf";
      $fd = fopen($filename,"r");
      $textFileContents = fread($fd,filesize($filename));
      $ues = substr($textFileContents, strpos($textFileContents, "[ues]")+5);
      fclose($fd);

      $rowResult = array();
      $imsi = array();
      $imei = array();
      $msisdn = array();
      $tmsi = array();
      $dump =  explode("\n", $ues);
      foreach (array_filter($dump) as $item) {
          array_push($imsi, explode(",",$item)[0]);
          array_push($imei, explode(",",$item)[1]);
          array_push($msisdn, explode(",",$item)[2]);
          array_push($tmsi, explode(",",$item)[3]);
      }
      
      ?>
      <div class="form-row">
        <div class="card mb-3 col-md-3" style="text-align: center;">
          <div class="card-header">IMSI</div>
          <div class="card-body">
            <?php 
            foreach ($imsi as $imsiItem) {
              echo explode("=",$imsiItem)[0];
              echo "<hr>";
            }
            ?>
          </div>
        </div>
        <!-- Area Chart Example-->
        <div class="card mb-3 col-md-3" style="text-align: center;">
          <div class="card-header">IMEI</div>
          <div class="card-body">
            <?php 
            foreach ($imei as $imeiItem) {
              echo $imeiItem;
              echo "<hr>";
            }
            ?>
          </div>
        </div>
        <div class="card mb-3 col-md-3" style="text-align: center;">
          <div class="card-header">Local MSISDN</div>
          <div class="card-body">
            <?php 
            foreach ($msisdn as $msisdnItem) {
              echo $msisdnItem;
              echo "<hr>";
            }
            ?>
          </div>
        </div>
        <div class="card mb-3 col-md-3" style="text-align: center;">
          <div class="card-header">TMSI</div>
          <div class="card-body">
            <?php 
            foreach ($tmsi as $tmsiItem) {
              echo $tmsiItem;
              echo "<hr>";
            }
            ?>
          </div>
        </div>
      </div>
      
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © ITB 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
