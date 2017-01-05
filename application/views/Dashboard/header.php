<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cargo Booking Admin Portal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo site_url('Themes/bootstrap/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
   <link rel="stylesheet" href="<?php echo site_url('Themes/plugins/datatables/dataTables.bootstrap.css');?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="<?php echo site_url('Themes/dist/css/AdminLTE.min.css');?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo site_url('Themes/dist/css/skins/_all-skins.min.css');?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo site_url('Themes/plugins/iCheck/flat/blue.css');?>">
  <!-- Morris chart -->
 
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo site_url('Themes/plugins/jvectormap/jquery-jvectormap-1.2.2.css');?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo site_url('Themes/plugins/datepicker/datepicker3.css');?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo site_url('Themes/plugins/daterangepicker/daterangepicker.css');?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo site_url('Themes/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url(''); ?>" class="logo">
     
        <span class="logo-lg">
            <img src="<?php echo site_url('Themes/images/logo.png'); ?>" width="155">
        </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <span class="hidden-xs"> <?= $this->session->userdata('userName')?$this->session->userdata('userName'):''?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p>
                 <?= $this->session->userdata('userName')?$this->session->userdata('userName'):''?>
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
         
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  
                </div>
                <div class="pull-right">
                 <a href="<?php echo site_url('userLogin/customerlogout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>