<?php $this->load->view('Dashboard/header'); ?> 
<!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('Dashboard/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin Area</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <?php //$this->load->view('Dashboard/message');?>
        <div class="row">
            <div class="col-md-12">
                
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Detail Service</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2> Title:</h2> <?php echo $serv->servheading; ?>
                    </div>
                </div>
              <div class="row">
                    <div class="col-md-12">
                        <h2> Description</h2> <?php echo $serv->servtext; ?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-8">
                        <h2> Status</h2> 
                       <?php if($serv->status==0){ 
                                 echo "Inactive";}
                             else{ echo "Active";}?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-md-offset-4">
                       <a href="<?php echo site_url('dashboard/editservice').'/'.$serv->ser_id; ?>" class="btn btn-warning">Edit</a>
                    </div>
                    <div class="col-md-1">
                        <a href="<?php echo site_url('dashboard/deleteservices').'/'.$serv->ser_id; ?>" class="btn btn-warning">Delete</a>
                    </div>
                </div>
              
            </div>
        </div>
       
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('Dashboard/footer'); ?> 
