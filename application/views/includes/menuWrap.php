    <div class="row topwraper">
        <div class="col-md-3 logowrap">
            <div class="logo">
                <a href=""><img src="<?php echo site_url('frontend/img/logo.png'); ?>"></a>
            </div>
        </div>
        <div class="col-md-6 contactWrap">
            <ul>
                <li><span class="glyphicon glyphicon-map-marker"></span>1234 Lorum Street, AK 9976</li>
                <li><span class="glyphicon glyphicon-phone-alt"></span>(012) 345 - 8569</li>
                <li><span class="glyphicon glyphicon-flag"></span>
                    <select name="lng" class="lngWrap">
                        <option value="en" selected="">English</option>
                        <option value="ar" >Arabic</option>                    
                    </select>
                </li>
            </ul>
        </div>
        <?php if($this->session->userdata('userID')){ ?>
        <div class="col-md-3" style="padding-top: 20px;">
            <div class="dropdown  pull-right">
        <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $this->session->userdata('name'); ?>
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('user/dashboard'); ?>">DASHBOARD</a></li>
                  <li><a href="<?php echo site_url('account/logout'); ?>">LOGOUT</a></li>
                 
                </ul>
              </div>
        </div>
            <?php } else {?>
        <div class="col-md-3 btnwrap">
            
            <a href="<?php echo site_url('account'); ?>" class="pull-right"><span class="glyphicon glyphicon-log-in"></span> Signup |Login</a>
           
        </div>
            <?php }?>
    </div>
    <div class="row menuWrap">
        <div class="col-md-12 navWrapr">
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
      <ul class="nav navbar-nav navbar-left">
        
          <li><a href="<?php echo site_url(); ?>">Home</a></li>
          <li><a href="<?php echo site_url('about_us'); ?>">About</a></li>
         <li><a href="<?php echo site_url('blogs'); ?>">Blog</a></li>
         <li><a href="<?php echo site_url('booking'); ?>">Booking</a></li>
          <li><a href="#">Payment</a></li>
           <li><a href="#">Shipment Tracking</a></li>
        <li><a href="<?php echo site_url('gallery'); ?>">Gallery</a></li>
         <li><a href="<?php echo site_url('services'); ?>">Services</a></li>
          <li><a href="<?php echo site_url('contact_us'); ?>">Contact Us</a></li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        </div>
    </div>