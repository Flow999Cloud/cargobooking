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
                 <h1>Add Education</h1>
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
                        <form name="login-from" class="field-form" action="<?php echo site_url('user/addNewEducation'); ?>" method="post" enctype="multipart/form-data">
                            
                            <div class="row">
              <div class="col-md-5">
                <label>Degree Name*</label>
                <select name="dname" class="form-control" required="">
                    <option value="">Select Degree</option>
                    <option value="B.sc">B.sc</option>
                    <option value="M.sc">M.sc</option>
                     <option value="M.phil">M.phil</option>
                    <option value="PHD">PHD</option>
                    
                </select>
              </div>
         </div>
         <div class="row">
              <div class="col-md-5">
                <label>College/University Name*</label>
                <select name="uname" class="form-control" required="">
                    <option value="">Select College/University</option>
                    <option value="University Of Punjab">University Of Punjab</option>
                    <option value="Islamia University Of Bahawalpur">Islamia University Of Bahawalpur</option>
                    
                </select>
              </div>
         </div>
          <div class="row">
              <div class="col-md-5">
                <label>Passing Date*</label>
                <input type="text" class="form-control datepicker" name="pdate" required="">
              </div>
         </div> 
                            
                           
                            <div class="row">
                                <button type="submit" name="addedu" class="btn btn-primary">Save</button>
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


