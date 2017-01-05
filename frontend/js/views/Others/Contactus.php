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
<style>
        .help-block{
            color: red;
            font-size: 13px;
            font-weight: 100;
        }
    </style>
<div class="container-fluid top-bg-yellow">
    <div class="row height-margin30">
        
    </div>
   <div class="row">
        <div class="col-md-12 black-bg-outer">
            <div class="row black-bg-title">
                 <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 Jobs-listing-wrapper-outer">
            <div class="row contact-form-wrapper">
                <div class="col-md-3 left-sidebar-cnt">
                    <div class="row height-margin20"></div>
                    <div class="row left-sidebar-contents-cnt">
                        <div class="row side-title">
                             <h3>Location</h3>
                        </div>
                        <div class="row quick-search">
                           <div class="row height-margin20"></div>
                                <div class="row">
                                    <p><strong>Phone:</strong> 03366746501</p>
                                     <p><strong>Address:</strong>mazang choongi lahore</p>
                                </div>
                                 
                             
                        </div>
                    </div>   
                </div>
                <div class="col-md-9">
                    <div class="container-fluid">
                        <div class="row height-margin20"></div>
                        <form name="contact-from" id="contactform" class="field-form" action="<?php echo site_url('contact_us/contactus_data'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Full Name*</label>
                                    <input type="text" class="validate[required] form-control" value="" id="fname" name="fname" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Email*</label>
                                    <input type="email" class="validate[required,custom[email]] form-control" value="" id="email" name="email" >
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Subject*</label>
                                    <input type="text" class="form-control" value="" id="subject" name="subject" >
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <label>Message*</label>
                                    <textarea name="detail" class="form-control" id="message" ></textarea>
                                </div>
                                
                            </div>
                            <div class="row">
                                <input type="submit" name="cnt" id="sendbtn" value="Send message" class="btn btn-default form-submit">
                            </div>
                        </form>  
                      
                     
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <script>
$(document).ready(function(){
    $("#contactform").validationEngine('attach', {promptPosition : "centerRight", scroll: false});
   });
</script>
</div>
<?php $this->load->view('includes/footer');
?>
