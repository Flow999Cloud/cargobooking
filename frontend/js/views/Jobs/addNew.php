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
    <?php if(!empty($this->session->userdata('error')))
    {
      $error=$this->session->userdata('error');
        $this->session->unset_userdata('error');
    }
    if(!empty($this->session->userdata('success')))
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
                 
                <div class="col-md-5"><h1>New Job</h1></div>
                <div class="col-md-7" style="text-align: right;"><h1><?php echo $companyName; ?></h1></div>
                
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
                       
                        <form name="login-from" class="field-form" action="<?php echo site_url('company/savejob'); ?>" method="post" enctype="multipart/form-data">
                           <div class="row">
                                <div class="col-md-5">
                                    <label>Category*</label>
                                    <select name="category" class="form-control" required="">
                                        <option value="">Select Category</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Banking">Banking</option>
                                        <option value="Ecommerce">Ecommerce</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Job Title*</label>
                                    <input type="text" class="form-control" value="<?php echo set_value('jtitle'); ?>" name="jtitle"  required="">
                                    <input type="hidden" name="cmpid" value="<?php echo $cmpid ?>">
                                </div>
                                
                            </div>
                            <div class="row">
                               <div class="col-md-7">
                                    <label>Description*</label>
                                    <textarea name="desc" class="form-control" required=""><?php echo set_value('desc'); ?></textarea>
                                </div>
                                
                            </div>
                            <div class="row">
                               <div class="col-md-5">
                                    <label>Location*</label>
                                    <select name="location" class="form-control" required="">
                                        <option value="">Select Location</option>
                                        <option value="Lahore">Lahore</option>
                                        <option value="Karachi">Karachi</option>
                                    </select>
                                </div>
                                
                            </div>
                             <div class="row">
                                <div class="col-md-5">
                                    <label>Minimum Salary*</label>
                                    <input type="text" class="form-control" value="<?php echo set_value('minsalary'); ?>" name="minsalary"  required="">
                                </div>
                                 <div class="col-md-5">
                                    <label>Maximum Salary*</label>
                                    <input type="text" class="form-control" value=""<?php echo set_value('maxsalary'); ?> name="maxsalary"  required="">
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-5">
                                    <label>Job Timing*</label>
                                    <select name="timing" class="form-control" required="">
                                        <option value="">Select Timing</option>
                                        <option value="Morning">Morning</option>
                                        <option value="Afternoon">Afternoon</option>
                                        <option value="Evening">Evening</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Start Date*</label>
                                    <input type="text" class="form-control datepicker" value="<?php echo set_value('stdate'); ?>" name="stdate"  required="">
                                </div>
                                 <div class="col-md-5">
                                    <label>End Date*</label>
                                    <input type="text" class="form-control datepicker" value="<?php echo set_value('enddate'); ?>" name="enddate"  required="">
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-5">
                                    <label>Required Education*</label>
                                    <select name="education" class="form-control" required="">
                                        <option value="">Select Education</option>
                                        <option value="B.sc">B.sc</option>
                                        <option value="M.sc">M.sc</option>
                                    </select>
                                </div>
                                  <div class="col-md-5">
                                    <label>Required Experience*</label>
                                    <select name="experience" class="form-control" required="">
                                        <option value="">Select Experience</option>
                                        <option value="No Expereince">No Experience</option>
                                        <option value="Less Than one year">Less Than one year</option>
                                          <option value="one year">one year</option>
                                            <option value="Less Than two year">Less Than two year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                               
                                <div class="col-md-5">
                                    <label>Required Skills*</label>
                                    <textarea name="skills" class="form-control" style="height: 100px;" required="" placeholder="php, wordpress, joomla, Java"><?php echo set_value('skills'); ?></textarea>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Job Type*</label>
                                    <select name="jtype" class="form-control" required="">
                                        <option value="">Select Job Type</option>
                                        <option value="Full Time">Full Time</option>
                                        <option value="Part Time">Part Time</option>
                                        <option value="Part Time">Part Time</option>
                                    </select>
                                </div>
                               
                            </div>
                            <div class="row">
                                <input type="submit" name="savebtn" value="Post Job" class="btn btn-default form-submit">
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


