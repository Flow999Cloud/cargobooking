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
                        <h3 class="box-title">Logo</h3>
                    </div>
                    <form name="form" class="" action="<?php echo site_url('dashboard/savelogo'); ?>" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                      
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="userfile">Upload Image For Logo</label>
                                    <input type="file" name="userfile" id="userfile" size="20" />
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
                        <?php if(isset($logo)){ ?>
                            <div class="row">
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <img src="<?php echo site_url().'/upload/'.$logo->logo; ?>" alt="Logo Image" height="100" width="100">
                                   </div>
                               </div>
                           </div>
                        <?php } ?>
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