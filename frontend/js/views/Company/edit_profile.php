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
                 <h1>Create Company Profile</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 Jobs-listing-wrapper-outer">
            <div class="row login-wrapper">
                <div class="col-md-3">
                      
                </div>
                <div class="col-md-9">
                    <div class="container-fluid">
                         <div class="row height-margin30"></div>
                        <div class="row height-margin30"></div>
                        <form name="login-from" class="field-form" action="<?php echo site_url('companies/save_profile'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Company Name*</label>
                                    <input type="text" class="form-control" value="" name="cname">
                                </div>
                           </div>
                            <div class="row">
                               <div class="col-md-5">
                                    <label>Company Category*</label>
                                    <select name="account" class="form-control">
                                        <option value="">Select Category Type</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Banking">Banking</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label>Company Location*</label>
                                    <select name="account" class="form-control">
                                        <option value="">Select Location</option>
                                        <option value="Lahore">Lahore</option>
                                        <option value="Karachi">Karachi</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Company Address*</label>
                                   <textarea name="address" class="form-control" required=""></textarea>
                                </div>
                                <div class="col-md-5">
                                    <label>Company Detail*</label>
                                 <textarea name="detail" class="form-control" required=""></textarea>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Company Contact*</label>
                                      <input type="text" class="form-control" value="" name="phone">
                                </div>
                                
                            </div>
                             
                            <div class="row">
                                <input type="submit" value="Save" class="btn btn-default form-submit">
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


