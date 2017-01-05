<div class="container-fluid header-wrapper">
        <div class="row top-wrapper">
            <div class="col-md-3 logo-wrapper">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo site_url('themes/images/careerspak.png'); ?>" title="Careerspak">
                </a>
            </div>
             <div class="col-md-9">
                 <div class="row">
                     <div class="col-md-12 top-menu-wrapper">
                         <ul class="top-menu">
                             <?php if($this->session->userdata('seekerid')){?>
                                <li><a href="<?php echo site_url('user'); ?>">Dashboard</a></li>
                             <?php }?>
                                  <?php if($this->session->userdata('cmpid')){?>
                                <li><a href="<?php echo site_url('company'); ?>">Dashboard</a></li>
                             <?php }?>
                             <?php if($this->session->userdata('userid')) {?>
                               <li><a href="<?php echo site_url('login/logout'); ?>">Log Out</a></li>
                             <?php } else {?>
                             <li><a href="<?php echo site_url('login'); ?>">Sign In</a></li>
                             <li><a href="<?php echo site_url('register'); ?>">Sign Up</a></li>
                             <?php } ?>
                         </ul>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-12 main-menu-wrapper">
   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left main-nav">
          <li><a href="<?php echo site_url(); ?>">Home</a></li>
          <li><a href="<?php echo site_url('jobs'); ?>">All Jobs</a></li>
          <li><a href="<?php echo site_url('resumes'); ?>">Resumes</a></li>
         <li><a href="<?php echo site_url('companies'); ?>">Companies</a></li>
         <li style="display: none;"><a href="#">Search</a></li>
         <li><a href="<?php echo site_url('about_us'); ?>">About Us</a></li>
       <li><a href="<?php echo site_url('contact_us'); ?>">Contact us</a></li>
       <li style="display:none;"><a href="<?php echo site_url('terms_and_conditions'); ?>">Terms & Conditions</a></li>
        <li class="dropdown" style="display: none;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
     
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 
                     </div>
                 </div>
            </div>
        </div>
    </div>