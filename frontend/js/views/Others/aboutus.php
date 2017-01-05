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
                 <h1>About Us</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 Jobs-listing-wrapper-outer">
            <div class="row contact-form-wrapper">
               
                <div class="col-md-8 col-md-offset-2">
                    <div class="container-fluid">
                        <div class="row height-margin20"></div>
                        <p>
                           CareersPak is Pakistan’s largest jobs website. It helps job seekers in finding betteropportunities for their future. It also provides easy and effective ways for employers to advertise different career opportunities available in their organization and collect resumes from qualified and potential candidates online.
                        </p> 
                        <p>
                            CareersPak is known as the reliable and perfect place to apply online containing user friendly interface, fastest browsing experience and rich features set etc.This is the reason we are able to gain and maintain the interest of our respected users.
                        </p>
                        <p>
                            The development team of CareersPak is continuously working for the improvement of the website and adding new features periodically to give users a better and quality experience.
                        </p>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('includes/footer');
?>

