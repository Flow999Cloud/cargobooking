<?php $this->load->view('Dashboard/header'); ?> 
<!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('Dashboard/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        StreetexCod
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
                        <h3 class="box-title">Add Category</h3>
                    </div>
                    <form name="form" class="" action="<?php echo site_url('dashboard/saveNewCategory'); ?>" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                       
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="cname" class="form-control col-lg-9 " value="<?php echo set_value('cname'); ?>" placeholder="Enter Category Name">
                                    <p style="color: red;"> <?php echo form_error('cname'); ?></p>
                                </div>
                        </div> 
                        </div>
                       
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                                 <label>Status</label>
                  <select class="form-control" name="status" id="status">
                      <option  value="">Select Option</option>
                      <option  value="1">Active</option>
                    <option value="0">InActive</option>
                  </select>
                             <p style="color: red;"> <?php echo form_error('status'); ?></p>
                            </div>
                        </div> 
                         </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group" style="padding-top: 7px;">
                           
                            <input type="submit" name="submit" class="btn btn-success" value="Save">
                             <p style="color: red;"></p>
                        </div>
                        </div>
                        </div>
                       
                    </div>
                    
                </form>
                </div>
                
            </div>
        </div>
       
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('Dashboard/footer'); ?> 