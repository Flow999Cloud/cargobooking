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
                 <h1>Change Password</h1>
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
                        <form name="login-from" class="field-form" action="" method="post" enctype="multipart/form-data">
                           <div class="row">
                                <div class="col-md-5">
                                    <label>Email Address*</label>
                                    <input type="email" class="form-control" value="" name="email">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>New Password*</label>
                                    <input type="password" class="form-control" value="" name="pass1">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Re Enter New Password*</label>
                                    <input type="password" class="form-control" value="" name="pass2">
                                </div>
                                
                            </div>
                           
                            <div class="row">
                                <input type="submit" value="Login" class="btn btn-default form-submit"> 
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


