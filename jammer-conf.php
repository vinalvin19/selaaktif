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
    <a class="navbar-brand" href="index.html">SelaAktif</a>
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
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    //$filename = "/usr/local/etc/yate/ybts.conf";
    $filename = "ybts.conf";
    $fd = fopen($filename,"r");
    $textFileContents = fread($fd,filesize($filename));
    fclose($fd);
    $valueMCI = substr($textFileContents, strpos($textFileContents, "Identity.MNC=")+13, 2);

    if($valueMCI==10)
      $_SESSION["operator"] = "Telkomsel";
    else if($valueMCI == 11)
      $_SESSION["operator"] = "XL/AXIS";
    else
      $_SESSION["operator"] = "Indosat";
    
    if (isset($_POST['frmSub'])) {
      echo ('<script>alert("aaa")</script>');
      session_destroy();
    }
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">SelaAktif</a>
        </li>
        <li class="breadcrumb-item active">Jammer Configuration</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="form-row">
      <div class="card mb-3 col-md-4" style="margin:0 0 10px 0">
        <div class="card-header">
          <i class="fa fa-podcast"></i> Jammer A</div>
        <div class="card-body">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group row">
              <label for="baseband_id" class="col-sm-5 col-form-label">Baseband (MHz)</label>
              <div class="col-sm-7">
                <select name="baseband_name" id="baseband_id" class="form-control" style="width: 90%">
                  <option value="1800">1800</option>
                  <option value="2100">2100</option>
                  <option value="2300" selected>2300</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="bandwidth_id" class="col-sm-5 col-form-label">Bandwidth (MHz)</label>
              <div class="col-sm-7">
                <select name="bandwidth_name" id="bandwidth_id" class="form-control" style="width: 90%">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="15">15</option>
                  <option value="20">20</option>
                  <option value="25">25</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="modulasi_id" class="col-sm-5 col-form-label">Tipe Modulasi</label>
              <div class="col-sm-7">
                <select name="modulasi_name" id="modulasi_id" class="form-control" style="width: 90%">
                  <option value="bpsk" selected>BPSK</option>
                  <option value="qpsk">QPSK</option>
                  <option value="dpsk">DPSK</option>
                  <option value="qam16">16-QAM</option>
                  <option value="qam64">64-QAM</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="power_id" class="col-sm-5 col-form-label">Power (dB)</label>
              <div class="col-sm-7">
                <input type="number" name="power_name" placeholder="dB" class="form-control" style="width: 90%" value="10">
              </div>
            </div>
            <br>
            <div class="form-group row">
                <input class="btn btn-primary btn-block" type="submit" name="frmSub" value="SUBMIT" style="width: 50%; display: block; margin: 0 auto">                
            </div>
          </form>
        </div>
      </div>
      <div class="card mb-3 col-md-4" style="margin:0 0 10px 0">
        <div class="card-header">
          <i class="fa fa-podcast"></i> Jammer B</div>
        <div class="card-body">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group row">
              <label for="baseband_id" class="col-sm-5 col-form-label">Baseband (MHz)</label>
              <div class="col-sm-7">
                <select name="baseband_name" id="baseband_id" class="form-control" style="width: 90%">
                  <option value="1800" selected>1800</option>
                  <option value="2100">2100</option>
                  <option value="2300">2300</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="bandwidth_id" class="col-sm-5 col-form-label">Bandwidth (MHz)</label>
              <div class="col-sm-7">
                <select name="bandwidth_name" id="bandwidth_id" class="form-control" style="width: 90%">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="15">15</option>
                  <option value="20" selected>20</option>
                  <option value="25">25</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="modulasi_id" class="col-sm-5 col-form-label">Modulasi</label>
              <div class="col-sm-7">
                <select name="modulasi_name" id="modulasi_id" class="form-control" style="width: 90%">
                  <option value="bpsk">BPSK</option>
                  <option value="qpsk">QPSK</option>
                  <option value="dpsk">DPSK</option>
                  <option value="qam16" selected>16-QAM</option>
                  <option value="qam64">64-QAM</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="power_id" class="col-sm-5 col-form-label">Power (dB)</label>
              <div class="col-sm-7">
                <input type="number" name="power_name" placeholder="dB" class="form-control" style="width: 90%" value="15">
              </div>
            </div>
            <br>
            <div class="form-group row">
                <input class="btn btn-primary btn-block" type="submit" name="frmSub" value="SUBMIT" style="width: 50%; display: block; margin: 0 auto">                
            </div>
          </form>
        </div>
      </div>
      <div class="card mb-3 col-md-4" style="margin:0 0 10px 0">
        <div class="card-header">
          <i class="fa fa-podcast"></i> Jammer C</div>
        <div class="card-body">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group row">
              <label for="baseband_id" class="col-sm-5 col-form-label">Baseband (MHz)</label>
              <div class="col-sm-7">
                <select name="baseband_name" id="baseband_id" class="form-control" style="width: 90%">
                  <option value="1800">1800</option>
                  <option value="2100" selected>2100</option>
                  <option value="2300">2300</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="bandwidth_id" class="col-sm-5 col-form-label">Bandwidth (MHz)</label>
              <div class="col-sm-7">
                <select name="bandwidth_name" id="bandwidth_id" class="form-control" style="width: 90%">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="15" selected>15</option>
                  <option value="20">20</option>
                  <option value="25">25</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="modulasi_id" class="col-sm-5 col-form-label">Modulasi</label>
              <div class="col-sm-7">
                <select name="modulasi_name" id="modulasi_id" class="form-control" style="width: 90%">
                  <option value="bpsk" selected>BPSK</option>
                  <option value="qpsk">QPSK</option>
                  <option value="dpsk"selected>DPSK</option>
                  <option value="qam16">16-QAM</option>
                  <option value="qam64">64-QAM</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="power_id" class="col-sm-5 col-form-label">Power (dB)</label>
              <div class="col-sm-7">
                <input type="number" name="power_name" placeholder="dB" class="form-control" style="width: 90%" value="3">
              </div>
            </div>
            <br>
            <div class="form-group row">
                <input class="btn btn-primary btn-block" type="submit" name="frmSub" value="SUBMIT" style="width: 50%; display: block; margin: 0 auto">                
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="card mb-3 col-md-4" style="margin:0 0 10px 0">
        <div class="card-header">
          <i class="fa fa-podcast"></i> Jammer D</div>
        <div class="card-body">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group row">
              <label for="baseband_id" class="col-sm-5 col-form-label">Baseband (MHz)</label>
              <div class="col-sm-7">
                <select name="baseband_name" id="baseband_id" class="form-control" style="width: 90%">
                  <option value="1800"selected>1800</option>
                  <option value="2100">2100</option>
                  <option value="2300">2300</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="bandwidth_id" class="col-sm-5 col-form-label">Bandwidth (MHz)</label>
              <div class="col-sm-7">
                <select name="bandwidth_name" id="bandwidth_id" class="form-control" style="width: 90%">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="15">15</option>
                  <option value="20">20</option>
                  <option value="25" selected>25</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="modulasi_id" class="col-sm-5 col-form-label">Modulasi</label>
              <div class="col-sm-7">
                <select name="modulasi_name" id="modulasi_id" class="form-control" style="width: 90%">
                  <option value="bpsk" selected>BPSK</option>
                  <option value="qpsk">QPSK</option>
                  <option value="dpsk"selected>DPSK</option>
                  <option value="qam16">16-QAM</option>
                  <option value="qam64">64-QAM</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="power_id" class="col-sm-5 col-form-label">Power (dB)</label>
              <div class="col-sm-7">
                <input type="number" name="power_name" placeholder="dB" class="form-control" style="width: 90%" value="6">
              </div>
            </div>
            <br>
            <div class="form-group row">
                <input class="btn btn-primary btn-block" type="submit" name="frmSub" value="SUBMIT" style="width: 50%; display: block; margin: 0 auto">                
            </div>
          </form>
        </div>
      </div>
      <div class="card mb-3 col-md-4" style="margin:0 0 10px 0">
        <div class="card-header">
          <i class="fa fa-podcast"></i> Jammer E</div>
        <div class="card-body">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group row">
              <label for="baseband_id" class="col-sm-5 col-form-label">Baseband (MHz)</label>
              <div class="col-sm-7">
                <select name="baseband_name" id="baseband_id" class="form-control" style="width: 90%">
                  <option value="1800">1800</option>
                  <option value="2100" selected>2100</option>
                  <option value="2300">2300</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="bandwidth_id" class="col-sm-5 col-form-label">Bandwidth (MHz)</label>
              <div class="col-sm-7">
                <select name="bandwidth_name" id="bandwidth_id" class="form-control" style="width: 90%">
                  <option value="5">5</option>
                  <option value="10" selected>10</option>
                  <option value="15">15</option>
                  <option value="20">20</option>
                  <option value="25">25</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="modulasi_id" class="col-sm-5 col-form-label">Modulasi</label>
              <div class="col-sm-7">
                <select name="modulasi_name" id="modulasi_id" class="form-control" style="width: 90%">
                  <option value="bpsk">BPSK</option>
                  <option value="qpsk">QPSK</option>
                  <option value="dpsk">DPSK</option>
                  <option value="qam16">16-QAM</option>
                  <option value="qam64"selected>64-QAM</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="power_id" class="col-sm-5 col-form-label">Power (dB)</label>
              <div class="col-sm-7">
                <input type="number" name="power_name" placeholder="dB" class="form-control" style="width: 90%" value="4">
              </div>
            </div>
            <br>
            <div class="form-group row">
                <input class="btn btn-primary btn-block" type="submit" name="frmSub" value="SUBMIT" style="width: 50%; display: block; margin: 0 auto">                
            </div>
          </form>
        </div>
      </div>
      <div class="card mb-3 col-md-4" style="margin:0 0 10px 0">
        <div class="card-header">
          <i class="fa fa-podcast"></i> Jammer F</div>
        <div class="card-body">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group row">
              <label for="baseband_id" class="col-sm-5 col-form-label">Baseband (MHz)</label>
              <div class="col-sm-7">
                <select name="baseband_name" id="baseband_id" class="form-control" style="width: 90%">
                  <option value="1800">1800</option>
                  <option value="2100">2100</option>
                  <option value="2300" selected>2300</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="bandwidth_id" class="col-sm-5 col-form-label">Bandwidth (MHz)</label>
              <div class="col-sm-7">
                <select name="bandwidth_name" id="bandwidth_id" class="form-control" style="width: 90%">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="15">15</option>
                  <option value="20" selected>20</option>
                  <option value="25">25</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="modulasi_id" class="col-sm-5 col-form-label">Modulasi</label>
              <div class="col-sm-7">
                <select name="modulasi_name" id="modulasi_id" class="form-control" style="width: 90%">
                  <option value="bpsk">BPSK</option>
                  <option value="qpsk">QPSK</option>
                  <option value="dpsk"selected>DPSK</option>
                  <option value="qam16">16-QAM</option>
                  <option value="qam64">64-QAM</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="power_id" class="col-sm-5 col-form-label">Power (dB)</label>
              <div class="col-sm-7">
                <input type="number" name="power_name" placeholder="dB" class="form-control" style="width: 90%" value="10">
              </div>
            </div>
            <br>
            <div class="form-group row">
                <input class="btn btn-primary btn-block" type="submit" name="frmSub" value="SUBMIT" style="width: 50%; display: block; margin: 0 auto">                
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="card mb-3 col-md-4" style="margin:0 0 10px 0">
        <div class="card-header">
          <i class="fa fa-podcast"></i> Jammer G</div>
        <div class="card-body">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group row">
              <label for="baseband_id" class="col-sm-5 col-form-label">Baseband (MHz)</label>
              <div class="col-sm-7">
                <select name="baseband_name" id="baseband_id" class="form-control" style="width: 90%">
                  <option value="1800">1800</option>
                  <option value="2100">2100</option>
                  <option value="2300">2300</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="bandwidth_id" class="col-sm-5 col-form-label">Bandwidth (MHz)</label>
              <div class="col-sm-7">
                <select name="bandwidth_name" id="bandwidth_id" class="form-control" style="width: 90%">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="15">15</option>
                  <option value="20">20</option>
                  <option value="25">25</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="modulasi_id" class="col-sm-5 col-form-label">Modulasi</label>
              <div class="col-sm-7">
                <select name="modulasi_name" id="modulasi_id" class="form-control" style="width: 90%">
                  <option value="bpsk" selected>BPSK</option>
                  <option value="qpsk">QPSK</option>
                  <option value="dpsk"selected>DPSK</option>
                  <option value="qam16">16-QAM</option>
                  <option value="qam64">64-QAM</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="power_id" class="col-sm-5 col-form-label">Power (dB)</label>
              <div class="col-sm-7">
                <input type="number" name="power_name" placeholder="dB" class="form-control" style="width: 90%" value="11">
              </div>
            </div>
            <br>
            <div class="form-group row">
                <input class="btn btn-primary btn-block" type="submit" name="frmSub" value="SUBMIT" style="width: 50%; display: block; margin: 0 auto">                
            </div>
          </form>
        </div>
      </div>
      <div class="card mb-3 col-md-4" style="margin:0 0 10px 0">
        <div class="card-header">
          <i class="fa fa-podcast"></i> Jammer H</div>
        <div class="card-body">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group row">
              <label for="baseband_id" class="col-sm-5 col-form-label">Baseband (MHz)</label>
              <div class="col-sm-7">
                <select name="baseband_name" id="baseband_id" class="form-control" style="width: 90%">
                  <option value="1800"selected>1800</option>
                  <option value="2100">2100</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="bandwidth_id" class="col-sm-5 col-form-label">Bandwidth (MHz)</label>
              <div class="col-sm-7">
                <select name="bandwidth_name" id="bandwidth_id" class="form-control" style="width: 90%">
                  <option value="5">5</option>
                  <option value="10" selected>10</option>
                  <option value="15">15</option>
                  <option value="20">20</option>
                  <option value="25">25</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="modulasi_id" class="col-sm-5 col-form-label">Modulasi</label>
              <div class="col-sm-7">
                <select name="modulasi_name" id="modulasi_id" class="form-control" style="width: 90%">
                  <option value="bpsk" >BPSK</option>
                  <option value="qpsk"selected>QPSK</option>
                  <option value="dpsk">DPSK</option>
                  <option value="qam16">16-QAM</option>
                  <option value="qam64">64-QAM</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="power_id" class="col-sm-5 col-form-label">Power (dB)</label>
              <div class="col-sm-7">
                <input type="number" name="power_name" placeholder="dB" class="form-control" style="width: 90%" value="20">
              </div>
            </div>
            <br>
            <div class="form-group row">
                <input class="btn btn-primary btn-block" type="submit" name="frmSub" value="SUBMIT" style="width: 50%; display: block; margin: 0 auto">                
            </div>
          </form>
        </div>
      </div>
      <div class="card mb-3 col-md-4" style="margin:0 0 10px 0">
        <div class="card-header">
          <i class="fa fa-podcast"></i> Jammer I</div>
        <div class="card-body">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group row">
              <label for="baseband_id" class="col-sm-5 col-form-label">Baseband (MHz)</label>
              <div class="col-sm-7">
                <select name="baseband_name" id="baseband_id" class="form-control" style="width: 90%">
                  <option value="1800">1800</option>
                  <option value="2100"selected>2100</option>
                  <option value="2300">2300</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="bandwidth_id" class="col-sm-5 col-form-label">Bandwidth (MHz)</label>
              <div class="col-sm-7">
                <select name="bandwidth_name" id="bandwidth_id" class="form-control" style="width: 90%">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="15" selected>15</option>
                  <option value="20">20</option>
                  <option value="25">25</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="modulasi_id" class="col-sm-5 col-form-label">Modulasi</label>
              <div class="col-sm-7">
                <select name="modulasi_name" id="modulasi_id" class="form-control" style="width: 90%">
                  <option value="bpsk" selected>BPSK</option>
                  <option value="qpsk">QPSK</option>
                  <option value="dpsk">DPSK</option>
                  <option value="qam16">16-QAM</option>
                  <option value="qam64">64-QAM</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="power_id" class="col-sm-5 col-form-label">Power (dB)</label>
              <div class="col-sm-7">
                <input type="number" name="power_name" placeholder="dB" class="form-control" style="width: 90%" value="10">
              </div>
            </div>
            <br>
            <div class="form-group row">
                <input class="btn btn-primary btn-block" type="submit" name="frmSub" value="SUBMIT" style="width: 50%; display: block; margin: 0 auto">                
            </div>
          </form>
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