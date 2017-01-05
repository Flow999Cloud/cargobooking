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
                        <h3 class="box-title">New Customer</h3>
                    </div>
                    <form class="form-horizontal"  action="<?php echo site_url('customers/newCustomer');?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Customer Detail</h3>
                            <hr/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="" class="form-control" placeholder="Name" required="">
                       <p style="color: red;"> <?php echo form_error('name'); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            <textarea name="address" class="form-control" placeholder="Address" required=""></textarea>
                        <p style="color: red;"> <?php echo form_error('address'); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="" class="form-control" placeholder="Email" required="">
                           
                            <p style="color: red;"> <?php echo form_error('email'); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">State</label>
                        <div class="col-sm-4">
                           
                            <select class="form-control"name="state" required="">
                                <option value="">--Select State--</option>
                               <?php if(count($states)){
                                    foreach ($states as $state){
                                    ?>
                                <option value="<?php echo $state->StateId;?>"><?php echo $state->StateName;?></option>
                                <?php }}?>
                            </select>
                             <p style="color: red;"> <?php echo form_error('state'); ?></p>
                        </div>
                        <label class="col-sm-2 control-label">City</label>

                        <div class="col-sm-4">
                            <select class="form-control"name="cityid">
                                <option value="">--Select City--</option>
                                <?php if(count($cities)){
                                    foreach ($cities as $city){
                                    ?>
                                <option value="<?php echo $city->cityid;?>"><?php echo $city->cityname;?></option>
                                <?php }}?>
                                 
                            </select>
                            <p style="color: red;"> <?php echo form_error('cityid'); ?></p>
                        </div>
                    </div>
                         <div class="form-group">
                        <label class="col-sm-2 control-label">Account Type</label>
                        <div class="col-sm-4">
                           
                            <select class="form-control"name="actype" required="">
                                <option value="" selected="selected" >--Account Type--</option>
                                 <option value="COD">COD</option>
                                  <option value="General">General</option>

                            </select>
                             <p style="color: red;"> <?php echo form_error('actype'); ?></p>
                        </div>
                        <label class="col-sm-2 control-label">Client Type</label>

                        <div class="col-sm-4">
                            <select class="form-control"name="ctype">
                                <option value="">--Client Type--</option>
                                 <option value="Registered">Registered</option>
                                  <option value="Non-Registered">Non-Registered</option>
                                   <option value="Un-Registered">Un-Registered</option>
                            </select>
                            <p style="color: red;"> <?php echo form_error('ctype'); ?></p>
                        </div>
                    </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">GST</label>
                        <div class="col-sm-4">
                           
                            <input type="text" name="gst" value="" class="form-control" required="">
                             <p style="color: red;"> <?php echo form_error('gst'); ?></p>
                        </div>
                     

                        
                    </div> 
                        
                        <div class="row factorclass">
                             <div class="col-md-12">
                                 <hr/>
                            <h3>Fuel Factor</h3>
                            <hr/>
                        </div>
                        </div>
                        <div class="row-fluid factorclass">
                            <div class="form-group">
                        <label class="col-sm-2 control-label">Effect Date</label>
                        <div class="col-sm-4">
                           
                            <input type="date" name="sedate" value="" class="form-control">
                             <p style="color: red;"> <?php echo form_error('sedate'); ?></p>
                        </div>
                        <label class="col-sm-2 control-label">Charges</label>

                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="factorcharges">
                            <p style="color: red;"> <?php echo form_error('factorcharges'); ?></p>
                        </div>
                    </div>
                        </div>
                          
                       <div class="row">
                        <div class="col-md-12">
                            <h3>Contact Detail</h3>
                            <hr/>
                        </div>
                    </div>
                         
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Contact Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="cname" value="" class="form-control" placeholder="Contact Name">
                       <p style="color: red;"> <?php echo form_error('cname'); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Designation</label>
                        <div class="col-sm-10">
                            <input type="text" name="designation" value="" class="form-control" placeholder="Designation">
                        <p style="color: red;"> <?php echo form_error('designation'); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-4">
                            <input type="text" name="phone" value="" class="form-control" placeholder="Phone">
                       <p style="color: red;"> <?php echo form_error('phone'); ?></p>
                        </div>
                        <label class="col-sm-2 control-label">Mobile</label>

                        <div class="col-sm-4">
                            <input type="text" name="mobile" value="" class="form-control" placeholder="Mobile">
                        <p style="color: red;"> <?php echo form_error('mobile'); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                                <label class="col-sm-2 control-label">Contact between </label>
                                <div class="col-sm-2">
                                    <input type="text" id="contactForm" name="contactForm" value="" class="form-control">
                                <p style="color: red;"> <?php echo form_error('contactForm'); ?></p>
                                </div>
                                <div style="float: left">
                                    <label>To</label>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" name="contactTimeTo" value="" class="form-control">
                                <p style="color: red;"> <?php echo form_error('contactTimeTo'); ?></p>
                                </div>
                            </div>
                        <div class="row">
                        <div class="col-md-12">
                            <h3>Other Detail</h3>
                            <hr/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Business Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="bname" value="" class="form-control" placeholder="Business Name">
                        <p style="color: red;"> <?php echo form_error('bname'); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Product Nature</label>
                        <div class="col-sm-10">
                            <input type="text" name="pnature" value="" class="form-control" placeholder="Product Nature">
                       <p style="color: red;"> <?php echo form_error('pnature'); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Web URL</label>
                        <div class="col-sm-4">
                            <input type="url" name="weburl" value="" class="form-control" placeholder="Web URL">
                        <p style="color: red;"> <?php echo form_error('weburl'); ?></p>
                        </div>
                        <label class="col-sm-2 control-label">Business Description</label>

                        <div class="col-sm-4">
                               <textarea name="bdescription" class="form-control" placeholder="Business Description"></textarea>
                        <p style="color: red;"> <?php echo form_error('bdescription'); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                                <label class="col-sm-2 control-label">Comment</label>
                                <div class="col-sm-10">
                                    <textarea name="comment" class="form-control" placeholder="Comment"></textarea>
                               <p style="color: red;"> <?php echo form_error('comment'); ?></p>
                                </div>
                               
                            </div>
                        <div class="row-fluide">
                            <hr/>
                            <h3>Charges Detail</h3>
                             <hr/>  
                        </div>
                        <div class="row-fluide">
                           
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <h3>Inter City</h3></div>
                                    <div class="col-sm-2"  style="text-align: right">
                                        <label>Half KG</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" name="halfkg" class="form-control">
                                        <p style="color: red;"> <?php echo form_error('halfkg'); ?></p>
                                    </div>
                                    <div class="col-sm-2" style="text-align: right">
                                        <label>Full KG</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" name="fullkg" class="form-control">
                                        <p style="color: red;"> <?php echo form_error('fullkg'); ?></p>
                                    </div>
                                     <div class="col-sm-2"  style="text-align: right">
                                         <label class="form-label">Extra KG</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" name="extrakg" class="form-control">
                                        <p style="color: red;"> <?php echo form_error('extrakg'); ?></p>
                                    </div>
                                </div>
                           
                            
                        </div>
                       
                        <div class="row-fluide">
                           
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <h3>Outer City</h3></div>
                                    <div class="col-sm-2"  style="text-align: right">
                                        <label>Half KG</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" name="ohalfkg" class="form-control">
                                         <p style="color: red;"> <?php echo form_error('ohalfkg'); ?></p>
                                    </div>
                                    <div class="col-sm-2" style="text-align: right">
                                        <label>Full KG</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" name="ofullkg" class="form-control">
                                         <p style="color: red;"> <?php echo form_error('ofullkg'); ?></p>
                                    </div>
                                     <div class="col-sm-2"  style="text-align: right">
                                         <label class="form-label">Extra KG</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" name="oextrakg" class="form-control">
                                         <p style="color: red;"> <?php echo form_error('oextrakg'); ?></p>
                                    </div>
                                </div>
                           
                            
                        </div>
                     <div class="row">
                        <div class="col-md-12">
                            <h3>Payment Detail</h3>
                            <hr/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">CNIC Number</label>
                        <div class="col-sm-4">
                            <input type="text" name="cnic" class="form-control" value="" placeholder="CNIC Number">
                        <p style="color: red;"> <?php echo form_error('cnic'); ?></p>
                        </div>
                         <label for="inputEmail3" class="col-sm-2 control-label">NTN Number</label>
                        <div class="col-sm-4">
                            <input type="text" name="ntn" value="" class="form-control" placeholder="NTN Number">
                        <p style="color: red;"> <?php echo form_error('ntn'); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Bank Name</label>
                        <div class="col-sm-4">
                            <input type="text" name="bankname" value="" class="form-control" placeholder="Bank Name">
                            <input type="hidden" name="CustomerBankDetaiIid" value="">
                            <p style="color: red;"> <?php echo form_error('bankname'); ?></p>
                        </div>
                         <label for="inputEmail3" class="col-sm-2 control-label">Branch Name</label>
                        <div class="col-sm-4">
                            <input type="text" name="branch" value="" class="form-control" placeholder="Branch Name">
                       <p style="color: red;"> <?php echo form_error('branch'); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Account Title</label>
                        <div class="col-sm-4">
                            <input type="text" name="actitle" value="" class="form-control" placeholder="Account Title">
                       <p style="color: red;"> <?php echo form_error('actitle'); ?></p>
                        </div>
                         <label for="inputEmail3" class="col-sm-2 control-label">Account Number</label>
                        <div class="col-sm-4">
                            <input type="text" name="accnumber" value="" class="form-control" placeholder="Account Number">
                        <p style="color: red;"> <?php echo form_error('accnumber'); ?></p>
                        </div>
                    </div>
                    <div class="row-fluide">
                        <a href="<?php  echo site_url();?>"><button type="button" class="btn btn-default">Cancel</button></a>
                        <button type="submit" name="bntsubmit" class="btn btn-success">Save</button>
                    </div>
                </form>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            
            
        </div>
     
    </section>
    <!-- /.content -->
   
  </div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('Dashboard/footer'); ?> 