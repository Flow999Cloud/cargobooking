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
                        <h3 class="box-title">Edit Service</h3>
                    </div>
                    <form name="form" class="" action="<?php echo site_url('dashboard/saveEditService'); ?>" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                       
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="hidden" name="sid" value="<?php echo $serv->ser_id; ?>" >
                                    <input type="text" name="btitle" class="form-control col-lg-9 " value="<?php echo $serv->servheading; ?>" placeholder="Enter Service Title">
                                    <p style="color: red;"> <?php echo form_error('btitle'); ?></p>
                                </div>
                        </div> 
                        </div>
                        
                        <div class="row">
                            <div class=" col-md-10">
                                <label for="pcontent">Service Content</label>
                                <!-- Main content -->
                                  <section class="content">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="box box-info">
                                          <div class="box-header">
                                            <h3 class="box-title">Editor
                                              <small>For Page Content</small>
                                            </h3>
                                          </div>
                                          <!-- /.box-header -->
                                          <div class="box-body pad">

                                                  <textarea id="pcontent" name="pcontent" rows="10" cols="80">
                                                         <?php echo $serv->servtext; ?>               
                                                  </textarea>

                                          </div>
                                        </div>
                                      </div>
                                      <!-- /.col-->
                                    </div>
                                    <!-- ./row -->
                                  </section>
                                  <!-- /.content -->
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                                 <label>Status</label>
                  <select class="form-control" name="status" id="status">
                      <option  value="">Select Option</option>
                      <option <?php if($serv->status == 1){ echo 'selected';} ?> value="1">Active</option>
                    <option <?php if($serv->status == 0){ echo 'selected';} ?> value="0">InActive</option>
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
  <script>
  $(function () {
    CKEDITOR.replace('pcontent');
    
  });
</script>