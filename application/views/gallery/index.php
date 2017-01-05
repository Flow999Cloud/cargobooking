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
         <div class="row breadcrumbswrp">
             <center>
                 <h1>Gallery</h1>
                 <p><a href="#">Home</a>/Gallery</p>
             </center>
         </div>
     </div>
 <div class="container-fluid gallerywraperapp">
        <div class="row">
            <div class="col-md-12 headingWrap">
                <h2 class="boxtitle"><span class="whiteheading">Our Gallery</span></h2>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-md-3 gallery">
                <a href=""> <img src="<?php echo site_url('frontend/img/gallery/img1.png');?>"></a>
            </div>
             <div class="col-md-3 gallery">
                 <a href=""> <img src="<?php echo site_url('frontend/img/gallery/img2.png');?>"></a>
            </div>
             <div class="col-md-3 gallery">
                 <a href=""><img src="<?php echo site_url('frontend/img/gallery/img3.png');?>"></a>
            </div>
             <div class="col-md-3 gallery">
                 <a href=""><img src="<?php echo site_url('frontend/img/gallery/img4.png');?>"></a>
            </div>
            <div class="col-md-3 gallery">
                <a href=""><img src="<?php echo site_url('frontend/img/gallery/img1.png');?>"></a>
            </div>
             <div class="col-md-3 gallery">
                 <a href=""> <img src="<?php echo site_url('frontend/img/gallery/img2.png');?>"></a>
            </div>
             <div class="col-md-3 gallery">
                 <a href=""><img src="<?php echo site_url('frontend/img/gallery/img3.png');?>"></a>
            </div>
             <div class="col-md-3 gallery">
                 <a href=""><img src="<?php echo site_url('frontend/img/gallery/img4.png');?>"></a>
            </div>
            
             
             
    </div>
     
    </div>
   <?php $this->load->view('includes/footer'); ?>