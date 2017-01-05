<?php $this->load->view('includes/head'); ?>
<body>

 <style type="text/css">
     body{
          background:#ffffff;  
     } 
</style>
<div calss="container-fluid">
<?php $this->load->view('includes/menuWrap'); ?>
 
    
</div>
<div class="container-fluid">
    <div class="row breadcrumbswrp" style="margin-bottom:33px;">
             <center>
                 <h1>Customer</h1>
                 <p><a href="#">Home</a>/Reset password</p>
             </center>
         </div>
     </div>
 <div class="container-fluid">
    <div class="row">
        <form class="" action="" method="post" enctype="multipart/form-data">
            <div class="col-md-4 col-md-offset-4 userFormArea">
                <div class="row userFormInner">
                    <i class="glyphicon glyphicon-user userIcon"></i>
                </div>
                <div class="row userFormInner">
                    <h1>Reset Password</h1>
                </div>
                <div class="row userFormInner">
                    <input class="form-control customInput" placeholder="Enter Your Email" type="email">
                </div>
                
                 <div class="row userFormInner">
                     <input class="btn loginbtn" type="submit" name="login" value="Reset Password">
                </div>
                <div class="row userFormInner">
                    <p><a href="<?php echo site_url('account'); ?>">Login</a></p>
                    <p><a href="<?php echo site_url('account/register'); ?>">Sign Up</a></p>
                </div>
            </div>
         
        </form>
             
    </div>
     
    </div>
  

    <?php $this->load->view('includes/footer'); ?>