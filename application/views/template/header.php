<?php
if (!function_exists('active_link')) {
  function activate_menu($controller)
  {
    // Getting CI class instance.
    $CI = get_instance();
    // Getting router class to active.
    $class = $CI->router->fetch_class();
    $is_active = FALSE;
    if (is_array($controller)) {
      foreach ($controller as $cont) {
        if ($cont == $class) {
          $is_active = TRUE;
        }
      }
    } else {
      if ($controller == $class) {
        $is_active = TRUE;
      }
    }

    return ($is_active) ? "active" : "";
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>โปรแกรมคำนวณเที่ยวดิน | V.5</title>

  <link rel="icon" type="image/png" href="<?php echo base_url('img/logoITD.png'); ?>" />
  <!-- Google Font: Source Sans Pro -->
  <link href='https://fonts.googleapis.com/css?family=Sarabun:wght@200;300&display=swap' rel='stylesheet' type='text/css'>
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome Icons -->
  <?php echo link_tag('bootstrap/plugins/fontawesome-free/css/all.min.css'); ?>
  <!-- Theme style -->
  <?php echo link_tag('bootstrap/dist/css/adminlte.min.css'); ?>

  <!-- SweetAlert2 -->
  <?php echo link_tag('bootstrap/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'); ?>
  <!-- Toastr -->
  <link rel="stylesheet" href="bootstrap/plugins/toastr/toastr.min.css">

  <!-- Daterange picker -->
  <?php echo link_tag('bootstrap/zebra_datepicker/dist/css/bootstrap/zebra_datepicker.min.css'); ?>


  <!-- DataTables -->
  <?php echo link_tag('bootstrap/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>
  <?php echo link_tag('bootstrap/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>
  <?php echo link_tag('bootstrap/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>



  <script src="<?php echo base_url('jsconfig/cal.js?v1'); ?>"></script>

  <style>
    body {
      font-family: 'Sarabun', sans-serif;
    }

    .active {
      text-decoration: none;
      border-bottom: solid;
      border-width: 2px;
      color: white;
    }
  </style>








</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">


    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-dark navbar-navy">
      <div class="container">

        <a href="<?php echo site_url('main'); ?>" class="navbar-brand">
          <img src="<?php echo base_url('img/logoITD.png'); ?>" alt="" class="brand-image img-circle" <span class="brand-text font-weight-light">โปรแกรมบันทึกเที่ยวดิน <sup class="text-danger">V.5</sup></span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="<?php echo site_url('main'); ?>" class="nav-link <?php echo activate_menu('main'); ?>"><i class="nav-icon fas fa-calculator"></i> บันทึกข้อมูล</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('table'); ?>" class="nav-link <?php echo activate_menu('table'); ?>"><i class="nav-icon fas fa-table"></i> ตารางข้อมูล</a>
            </li>

            <!-- <li class="nav-item">

              <a href="<?php echo site_url('report'); ?>" class="nav-link <?php echo activate_menu('report'); ?>"><i class="nav-icon fas fa-print"></i> รายงาน</a>
            </li> -->
            <li class="nav-item">
              <button class="nav-link btn <?php echo activate_menu('report'); ?>" data-toggle="modal" data-target="#reportModal">
                <i class="nav-icon fas fa-print"></i> รายงาน
              </button>
            </li>
            <li class="nav-item">
              <button class="nav-link btn text-danger" data-toggle="modal" data-target="#exampleModal">
                <i class="nav-icon fas fa-cogs"></i> ตั้งค่าระบบสายพาน
              </button>
            </li>

          </ul>


        </div>

        <!-- Right navbar links -->
        <!-- <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
         Messages Dropdown Menu -->
        <!-- <li class="nav-item dropdown">

            <i class="nav-icon fas fa-cogs"></i> ตั้งค่าระบบสายพาน

          </li> -->




        <!-- </ul> -->
      </div>
    </nav>
    <!-- /.navbar -->