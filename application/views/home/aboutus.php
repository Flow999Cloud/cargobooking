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
    <div class="row breadcrumbswrp" style="margin-bottom:0px;">
             <center>
                 <h1>About us</h1>
                 <p><a href="#">Home</a>/About</p>
             </center>
         </div>
     </div>
 <div class="container-fluid">
     <div class="row topwrapperAbout">
         <div class="col-md-6">
             <h2>SERVICES ALL OVER THE WORLD</h2>
             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
             <p>There are many variations of passages of Lorem Ipsum available,</p>
             <p>Lorem Ipsum is simply dummy text of the printing.</p>
         </div>
         <div class="col-md-6" style="text-align: right;">
             <img src="<?php echo site_url('frontend/img/aboutus/about1.png'); ?>">
         </div>
     </div> 
     <div class="row aboutusWhite">
         <div class="col-md-5">
             
         </div>
         <div class="col-md-7 blackbg">
             
         </div>
     </div>
        <div class="row aboutusred">
         <div class="col-md-7">
             
         </div>
         <div class="col-md-5">
             
         </div>
     </div>
 </div>
  

    <?php $this->load->view('includes/footer'); ?>