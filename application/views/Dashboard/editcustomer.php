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
            <div class="col-xs-12">
                
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Customer</h3>
                    </div>
                    
                    <form name="cityForm" class="" action="<?php echo site_url('dashboard/saveEditCustomer'); ?>" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                       
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                     <input type="hidden" name="id" class="form-control col-lg-9 " value="<?php echo $customer->user_id; ?>">
                                    <input type="text" name="fname" class="form-control col-lg-9 " value="<?php echo $customer->fname; ?>">
                                    <p style="color: red;"> <?php echo form_error('fname'); ?></p>
                                </div>
                        </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="lname" class="form-control col-lg-9 " value="<?php echo $customer->lname; ?>" >
                                    <p style="color: red;"> <?php echo form_error('lname'); ?></p>
                                </div>
                        </div> 
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control col-lg-9 " value="<?php echo $customer->email; ?>">
                             <p style="color: red;"> <?php echo form_error('email'); ?></p>
                            </div>
                        </div> 
                         </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                                 <label>Status</label>
                  <select class="form-control" name="status" id="status">
                      <option  value="">Select Option</option>
                      <option <?php if (isset($customer->status) && $customer->status==1) echo "selected";?> value="1">Active</option>
                    <option <?php if (isset($customer->status) && $customer->status==0) echo "selected";?> value="0">InActive</option>
                  </select>
                             <p style="color: red;"> <?php echo form_error('status'); ?></p>
                            </div>
                        </div> 
                         </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group" style="padding-top: 7px;">
                           
                            <input type="submit" name="addAdmin" class="btn btn-success" value="Save">
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