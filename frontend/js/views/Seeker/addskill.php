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
                 <h1>Add New Skill</h1>
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
                        <form name="login-from" class="field-form" action="<?php echo site_url('user/saveskills'); ?>" method="post" enctype="multipart/form-data">
              <div class="row">
              <div class="col-md-10">
                <label>Skill Name*</label>
                <select name="skill" class="form-control" required="">
                    <option value="">Select any skill</option>
                    <option value="PHP">PHP</option>
                    <option value="Codeigniter">Codeigniter</option>
                    
                </select>
              </div>
         </div>
            <div class="row">
              <div class="col-md-10">
                <label>Expertise Level*</label>
                <select name="level" class="form-control" required="">
                    <option value="">Select Experience Level</option>
                    <option value="Student">Student</option>
                    <option value="Expert">Expert</option>
                    
                </select>
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


