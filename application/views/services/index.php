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
                 <h1>Services</h1>
                 <p><a href="#">Home</a>/Services</p>
             </center>
         </div>
     </div>
 <div class="container-fluid servicesWrap">
        <div class="row">
            <div class="col-md-12 headingWrap">
                <h2 class="boxtitle"><span class="whiteheading">Our Services</span></h2>
            </div>
        </div>
        <div class="row-fluid">
            <?php 
            if(count($services)){
                $i=1;
                foreach($services as $service){
                    if($i>4){$i=1;}
            ?>
            <div class="col-md-3 ">
                <div class="servicesArea">
                    <center>
                        <img src="<?php echo site_url('frontend/img/services/icon'.$i.'.png'); ?>" alt="no image">
                 <h4>Lorum inspum</h4>
                        <p>
                   
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                <a href="#" class="readMoreLink">Read More</a>
                    </center>
                </div>
            </div>
                <?php $i++;}} else{?>
            <div class="col-md-3 ">
                <div class="servicesArea">
                    <center>
                        <img src="<?php echo site_url('frontend/img/services/icon2.png'); ?>" alt="no image">
                 <h4>Lorum inspum</h4>
                        <p>
                   
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                 <a href="#" class="readMoreLink">Read More</a>
                    </center>
                </div>
            </div>
             <div class="col-md-3 ">
                <div class="servicesArea">
                    <center>
                        <img src="<?php echo site_url('frontend/img/services/icon3.png'); ?>" alt="no image">
                 <h4>Lorum inspum</h4>
                        <p>
                   
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                 <a href="#" class="readMoreLink">Read More</a>
                    </center>
                </div>
            </div>
             <div class="col-md-3 ">
                <div class="servicesArea">
                    <center>
                        <img src="<?php echo site_url('frontend/img/services/icon4.png'); ?>" alt="no image">
                 <h4>Lorum inspum</h4>
                        <p>
                   
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                 <a href="#" class="readMoreLink">Read More</a>
                    </center>
                </div>
            </div>
             <div class="col-md-3 ">
                <div class="servicesArea">
                    <center>
                        <img src="<?php echo site_url('frontend/img/services/icon1.png'); ?>" alt="no image">
                 <h4>Lorum inspum</h4>
                        <p>
                   
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                 <a href="#" class="readMoreLink">Read More</a>
                    </center>
                </div>
            </div>
             <div class="col-md-3 ">
                <div class="servicesArea">
                    <center>
                        <img src="<?php echo site_url('frontend/img/services/icon2.png'); ?>" alt="no image">
                 <h4>Lorum inspum</h4>
                        <p>
                   
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                 <a href="#" class="readMoreLink">Read More</a>
                    </center>
                </div>
            </div>
             <div class="col-md-3 ">
                <div class="servicesArea">
                    <center>
                        <img src="<?php echo site_url('frontend/img/services/icon3.png'); ?>" alt="no image">
                 <h4>Lorum inspum</h4>
                        <p>
                   
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                 <a href="#" class="readMoreLink">Read More</a>
                    </center>
                </div>
            </div>
             <div class="col-md-3 ">
                <div class="servicesArea">
                    <center>
                        <img src="<?php echo site_url('frontend/img/services/icon4.png'); ?>" alt="no image">
                 <h4>Lorum inspum</h4>
                        <p>
                   
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                 <a href="#" class="readMoreLink">Read More</a>
                    </center>
                </div>
            </div>
                <?php }?>
            
             
             
    </div>
     
    </div>
    <div class="container-fluid">
         <div class="row quoteBg">
             <center>
                 <h3>Not Sure Which Solution Fits You Business Needs?</h3>
                  <a href="#" class="quotebtn">Read More</a>
             </center>
         </div>
     </div>

    <?php $this->load->view('includes/footer'); ?>