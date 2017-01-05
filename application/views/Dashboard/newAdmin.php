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
       <?php $this->load->view('Dashboard/message');?>
        <div class="row">
            <div class="col-xs-12">
                
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add New Admin</h3>
                    </div>
                    <form name="cityForm" class="" action="<?php echo site_url('dashboard/newAdmin'); ?>" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                       
                        <div class="row">
                            <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="fname" class="form-control col-lg-9 " value="<?php echo set_value('fname'); ?>" placeholder="Enter Full Name" required="">
                            <p style="color: red;"> <?php echo form_error('fname'); ?></p>
                        </div>
                        </div> 
                          <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control col-lg-9 " value="<?php echo set_value('email'); ?>" placeholder="Enter Email" required="">
                             <p style="color: red;"> <?php echo form_error('email'); ?></p>
                            </div>
                        </div> 
                            <div class="col-md-1">
                                <div class="form-group" style="padding-top: 7px;">
                           
                            <input type="submit" name="addAdmin" class="btn btn-success" value="Add">
                             <p style="color: red;"></p>
                        </div>
                        </div>
                        </div>
                       
                    </div>
                    
                </form>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">States</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class=" dataTables_wrapper table table-bordered table-responsive table-striped">
                <thead>
                <th>Name</th>
                <th>Name</th>
                <th>Action</th>
                </thead>
                <tbody>
                    <?php if(count($alladmins)){?>
                    <?php foreach ($alladmins as $admin){?>
                     <tr>
                        <td><?php echo $admin->fullName; ?></td>
                        <td><?php echo $admin->email; ?></td>
                        <td><a class="btn btn-warning btn-sm" href="<?php echo site_url('dashboard/resetAdmin').'/'.$admin->userID; ?>">Reset</a>
                        <a class="btn btn-danger btn-sm" href="<?php echo site_url('dashboard/deleteAdmin').'/'.$admin->userID; ?>">Delete</a>
                       
                      
                        </td>
                    </tr>
                    <?php }}?>
                   
                      
                     
                </tbody>
            </table>
            </div>
            
        </div>
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('Dashboard/footer'); ?> 