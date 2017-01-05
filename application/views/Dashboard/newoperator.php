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
                        <h3 class="box-title">New Operator</h3>
                    </div>
                    <form name="cityForm" class="" action="<?php echo site_url('operators/newoperator'); ?>" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                       
                        <div class="row">
                            <div class="col-md-5">
                        <div class="form-group">
                            <label>Branch Name</label>
                            <input type="text" name="bname" class="form-control " value="<?php echo set_value('bname'); ?>" placeholder="Branch Name" required="">
                            <p style="color: red;"> <?php echo form_error('bname'); ?></p>
                        </div>
                        </div> 
                          <div class="col-md-5">
                            <div class="form-group">
                                <label>Operator Name</label>
                                <input type="text" name="opname" class="form-control col-lg-9 " value="<?php echo set_value('opname'); ?>" placeholder="Operator Name" required="">
                             <p style="color: red;"> <?php echo form_error('opname'); ?></p>
                            </div>
                        </div> 
                            
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control col-lg-9 " value="<?php echo set_value('phone'); ?>" placeholder="Enter Phone Number" required="">
                            <p style="color: red;"> <?php echo form_error('phone'); ?></p>
                        </div>
                        </div> 
                          <div class="col-md-5">
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" name="mobile" class="form-control col-lg-9 " value="<?php echo set_value('mobile'); ?>" placeholder="Enter Mobile" required="">
                             <p style="color: red;"> <?php echo form_error('mobile'); ?></p>
                            </div>
                        </div> 
                           
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control col-lg-9 " value="<?php echo set_value('email'); ?>" placeholder="Enter Email" required="">
                            <p style="color: red;"> <?php echo form_error('email'); ?></p>
                        </div>
                        </div> 
                          <div class="col-md-10">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" class="form-control" required="" placeholder="Address"></textarea>
                                 <p style="color: red;"> <?php echo form_error('address'); ?></p>
                            </div>
                        </div> 
                            
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                        <div class="form-group">
                            <label>State</label>
                             <p style="color: red;"> <?php echo form_error('state'); ?></p>
                             <select name="state" class="form-control" required="">
                                    <option value="">Please Select</option>
                                    <?php if(count($states)){
                                    foreach ($states as $state){
                                    ?>
                                <option value="<?php echo $state->StateId;?>"><?php echo $state->StateName;?></option>
                                <?php }}?>
                                </select>
                          
                        </div>
                        </div> 
                          <div class="col-md-5">
                            <div class="form-group">
                                <label>City</label>
                                <p style="color: red;"> <?php echo form_error('city'); ?></p>
                                <select name="city" class="form-control" required="">
                                    <option value="">Please Select</option>
                                     <?php if(count($cities)){
                                    foreach ($cities as $city){
                                    ?>
                                <option value="<?php echo $city->cityid;?>"><?php echo $city->cityname;?></option>
                                <?php }}?>
                                </select>
                               
                             
                            </div>
                        </div> 
                            
                        </div>
                        <div class="row">
                            <div class="form-group">
                            <div class=" col-sm-10">
                              <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="soperator">is Supper Operator
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-10">
                                     <input type="submit" name="addnew" value="Add operator" class="btn btn-info">
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