<?php $this->load->view('includes/head'); ?>
<?php $this->load->view('includes/header'); ?>
 <?php if($this->session->userdata('error'))
    {
      $error=$this->session->userdata('error');
        $this->session->unset_userdata('error');
    }
    if($this->session->userdata('success'))
        {
        $success=$this->session->userdata('success');
         $this->session->unset_userdata('success');
        }
    ?> 
<div class="container-fluid top-bg-yellow">
    <div class="row height-margin30">
        
    </div>
   <div class="row">
        <div class="col-md-12 black-bg-outer">
            <div class="row black-bg-title">
                 <h1>Basic Information</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 Jobs-listing-wrapper-outer">
            <div class="row login-wrapper">
                <div class="col-md-3">
                   <?php echo validation_errors(); ?>  
                    <div class="height-margin30"></div>
                    <?php if(!empty($error)){?>
                    <p><?php echo $error; ?></p>
                    <?php }?>
                     <?php if(!empty($success)){?>
                    <p><?php echo $success; ?></p>
                    <?php }?>
                </div>
                <div class="col-md-9">
                    <div class="container-fluid">
                         <div class="row height-margin30"></div>
                        <div class="row height-margin30"></div>
                        <form name="login-from" class="field-form" action="<?php echo site_url('user/experience'); ?>" method="post" enctype="multipart/form-data">
                             <div class="row">
              <div class="col-md-10">
                <label>Company Name*</label>
                <input type="text" class="form-control" value="<?php echo $experience->exp_company_name; ?>" name="cname" required="">
              </div>
         </div>
            <div class="row">
              <div class="col-md-5">
                <label>Start Date*</label>
                <input type="text" class="form-control datepicker" value="<?php echo $experience->exp_start_date; ?>" name="sdate" required="">
              </div>
                 <div class="col-md-5">
                <label>Start Date</label>
                <input type="text" class="form-control datepicker" value="<?php echo $experience->exp_start_date; ?>" name="edate" required="">
              </div>
         </div>
         <div class="row">
              <div class="col-md-10">
                <label>Detail*</label>
                <textarea name="desc" class="form-control" required=""><?php echo $experience->exp_detail; ?></textarea>
                <input type="hidden" value="<?php echo $experience->exp_id; ?>" name="expid">
              </div>
         </div>
                           
                            <div class="row">
                                <button type="submit" name="update_experience" class="btn btn-primary">Save</button>
                            </div>
                        </form>  
                      
                     
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('includes/footer');
?>


