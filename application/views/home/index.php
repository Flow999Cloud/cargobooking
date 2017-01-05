<?php $this->load->view('includes/head'); ?>
<body>

<div calss="container-fluid">
<?php $this->load->view('includes/menuWrap'); ?>
    <div class="row-fluid">
        <div class="col-md-12 sliderwrap">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="<?php echo site_url('frontend/img/slider/1.jpg');?>" alt="Chania">
    </div>

    <div class="item">
      <img src="<?php echo site_url('frontend/img/slider/1.jpg');?>" alt="Chania">
    </div>

    
  </div>
        </div>
    </div>
</div>
    
     </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 headingWrap">
                <h2 class="boxtitle "><span class="whiteheading">About our Company</span></h2>
            </div>
        </div>
        <div class="row aboutcompanyDetail">
        <div class="col-md-6">
            <h3>Lorem Ipsum is simply dummy text </h3>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldu
                s PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        <div class="col-md-6 aboutimage">
            <img src="<?php echo site_url('frontend/img/homeabout.png');?>" alt="no image">
        </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 headingWrap">
                <h2 class="boxtitle"><span class="whiteheading">Our Services</span></h2>
            </div>
        </div>
        <div class="row-fluid">
            <?php 
            if(count($services)){
                $i=1;
              foreach($services as $service){  ?>
                   <div class="col-md-4 ">
                <div class="smallboxArea">
                    <img src="<?php echo site_url('frontend/img/icon'.$i.'.png'); ?>" alt="no image">
                <p>
                <h4><?php echo $service->servheading ?></h4>
                    <?php  echo substr($service->servtext, 100);?> 
                </p>
                </div>
            </div>
             
            <?php $i++;}} else{ ?>
             <div class="col-md-4">
                 <div class="smallboxArea">
               <img src="<?php echo site_url('frontend/img/icon6.png'); ?>" alt="no image">
               <p>
                   <h4>Lorum inspum</h4>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                 </div>
            </div>
             <div class="col-md-4">
                 <div class="smallboxArea">
                 <img src="<?php echo site_url('frontend/img/icon5.png'); ?>" alt="no image">
                <p>
                    <h4>Lorum inspum</h4>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                 </div>
            </div>
             <div class="col-md-4">
                 <div class="smallboxArea">
                 <img src="<?php echo site_url('frontend/img/icon8.png'); ?>" alt="no image">
                <p>
                    <h4>Lorum inspum</h4>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                 </div>
            </div>
             <div class="col-md-4">
                 <div class="smallboxArea">
                 <img src="<?php echo site_url('frontend/img/icon2.png'); ?>" alt="no image">
                <p>
                <h4>Lorum inspum</h4>
                    
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                 </div>
            </div>
            <div class="col-md-4">
                <div class="smallboxArea">
                <img src="<?php echo site_url('frontend/img/icon7.png'); ?>" alt="no image">
                <p>
                    <h4>Lorum inspum</h4>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="smallboxArea">
                <img src="<?php echo site_url('frontend/img/icon7.png'); ?>" alt="no image">
                <p>
                    <h4>Lorum inspum</h4>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                </div>
            </div>
            <?php }?>
            
    </div>
    </div>
     <div class="container-fluid whychoosearea">
       
        <div class="row whitewrap">
             <div class="col-md-12 headingWrap whychoosearea">
                <h2 class="boxtitle"><span class="whiteheading">Why Choose Us</span></h2>
            </div>
        <div class="col-md-3">
            <div class="row" style="height: 60px;">
                
            </div>
            <?php 
            if(count($services)){
                $i=1;
              foreach($services as $service){ 
                  if($i <= 3){
                  ?>
                   
                <div class="row smallleftpanel">
                    <img src="<?php echo site_url('frontend/img/icon'.$i.'.png'); ?>" alt="no image">
                <p>
                <h4><?php echo $service->servheading ?></h4>
                    <?php  echo substr($service->servtext, 0,90);?> 
                </p>
                </div>
           
             
                  <?php }$i++;}} else{?>
            <div class="row  smallleftpanel">
                <img src="<?php echo site_url('frontend/img/icon7.png'); ?>" alt="no image">
               <h4>Lorum inspum</h4>
                <p>
                    
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    
                </p>
            </div>
            <div class="row smallleftpanel">
                <img src="<?php echo site_url('frontend/img/icon7.png'); ?>" alt="no image">
               <h4>Lorum inspum</h4>
                <p>
                    
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                 
                </p>
            </div>
            <div class="row smallleftpanel">
                <img src="<?php echo site_url('frontend/img/icon7.png'); ?>" alt="no image">
               <h4>Lorum inspum</h4>
                <p>
                    
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                 
                </p>
            </div>  
            <?php }?>
        </div>
        <div class="col-md-9 whitewrap">
            <div class="row">
                <h2 class="col-md-offset-1">Request A Quote</h2>
            </div>
            <div class="row">
                
                <div class="col-md-11 col-md-offset-1">
                    <div class="row formWraper">
                   <form class="" action="<?php echo site_url('contact_us/saveMessage'); ?>" method="post" enctype="multipart/form-data">
                        <div class="row marginBottom">
                             <div class="col-md-6">
                                 <input required="" type="text" value="<?php echo set_value('name'); ?>" name="name" placeholder="Name" class="form-control customInput">
                         <?php echo form_error('name'); ?>
                    </div>
                    <div class="col-md-6">
                        <input required="" type="email" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>" class="form-control customInput">
                    </div>
                        </div>
                     <div class="row marginBottom">
                             <div class="col-md-6">
                                 <input required="" type="text" name="subject" value="<?php echo set_value('subject'); ?>" placeholder="Subject" class="form-control customInput">
                         <?php echo form_error('subject'); ?>
                    </div>
                    <div class="col-md-6">
                        <select  required="" name="cargotype" class="form-control customInput">
                            <option>Select Cargo Type</option>
                           <?php if(count($cargoType)){
                               foreach($cargoType as $type) {?>
                            <option value="<?php echo $type->cargo_type; ?>" <?php echo set_select('cargotype', $type->cargo_type); ?>><?php echo $type->cargo_type; ?></option>
                           <?php }}?>
                        </select>
                         <?php echo form_error('cargotype'); ?>
                    </div>
                        </div>
                       <div class="row marginBottom">
                             <div class="col-md-6">
                                 <select required="" name="location" class="form-control customInput">
                                  <option selected>Select Your Location</option>
                                <?php if(count($cargolocations)){
                               foreach($cargolocations as $loc) {?>
                            <option value="<?php echo $loc->loc_title; ?>" <?php echo set_select('location', $loc->loc_title); ?>><?php echo $loc->loc_title; ?></option>
                           <?php }}?>
                        </select>
                       <?php echo form_error('location'); ?>
                    </div>
                    <div class="col-md-6">
                        <select required="" name="destination" class="form-control customInput">
                            <option selected>Select Your Destination</option>
                            <?php if(count($cargolocations)){
                                
                               foreach($cargolocations as $loc) {?>
                            <option value="<?php echo $loc->loc_title; ?>"  <?php echo set_select('destination', $loc->loc_title); ?>><?php echo $loc->loc_title; ?></option>
                           <?php }}?>
                         
                        </select>
                         <?php echo form_error('destination'); ?>
                    </div>
                        </div>
                       <div class="row marginBottom">
                             <div class="col-md-12">
                                 <textarea required="" name="message" class="form-control customInput" placeholder="Message"><?php echo set_value('message'); ?></textarea>
                   <?php echo form_error('message'); ?>
                             </div>
                   
                        </div>
                        <div class="row marginBottom">
                             <div class="col-md-12">
                                 <button type="submit" name="bntsubmit" value="bntsubmit" class="btn btn-danger form-control customBtn">Send</button>
                    </div>
                   
                        </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid containerMarginBottom">
         <div class="row">
            <div class="col-md-12 headingWrap">
                <h2 class="boxtitle"><span class="whiteheading">Our Blog</span></h2>
            </div>
        </div>
        <div class="row nomargin">
            <?php
            if(count($blogs)){
                foreach ($blogs as $blog){
                    
            ?>
              <div class="col-md-4 blogBoxes">
               <div class="blogwhitebg">
                     <img src="<?php echo site_url('upload').'/'.$blog->blog_image; ?>" alt="no image">
               <h4><?php echo $blog->blog_heading; ?></h4>
               <p>
                  
                   <?php 
                   echo substr($blog->blog_text,0,200);
                   ?>
                </p>
                 </div>
            </div>
            <?php }} else{?>
            <div class="col-md-4 blogBoxes">
               <div class="blogwhitebg">
                     <img src="<?php echo site_url('frontend/img/blog.png'); ?>" alt="no image">
               <h4>Lorum inspum</h4>
               <p>
                  
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                 </div>
            </div>
             <div class="col-md-4 blogBoxes">
                 <div class="blogwhitebg">
                     <img src="<?php echo site_url('frontend/img/blog.png'); ?>" alt="no image">
               <h4>Lorum inspum</h4>
               <p>
                  
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                 </div>
            </div>
          <div class="col-md-4 blogBoxes">
               <div class="blogwhitebg">
                     <img src="<?php echo site_url('frontend/img/blog.png'); ?>" alt="no image">
               <h4>Lorum inspum</h4>
               <p>
                  
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                 </div>
            </div>
            <?php }?>
    </div>
    </div>
     <div class="container-fluid testimonialContainer">
        <div class="row">
            <div class="col-md-12 headingWrap">
                <h2 class="boxtitle"><span class="whiteheading">Testimonials</span></h2>
            </div>
        </div>
        <div class="row testimonialInner">
            <div class="col-md-6">
                <center>
               <div class="whitebg">
                   <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                <p class="arrowimg"></p>
                </div>
                    <div class="testimonialBottom">
                        <div class="userImg">
                             <img src="<?php echo site_url('frontend/img/testimonialp.png'); ?>" alt="no image">
                        </div>
                        <div class="userINfo">
                            <p><b>Muhammad Azam</b></p>
                            <p class="desg">Graphic designer</p>
                        </div>
                    </div>
                </center>
                
            </div>
            <div class="col-md-6">
                <center>
               <div class="whitebg">
                   <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                <p class="arrowimg"></p>
                </div>
                    <div class="testimonialBottom">
                        <div class="userImg">
                             <img src="<?php echo site_url('frontend/img/testimonialp.png'); ?>" alt="no image">
                        </div>
                        <div class="userINfo">
                            <p><b>Muhammad Azam</b></p>
                            <p class="desg">Graphic designer</p>
                        </div>
                    </div>
                </center>
                
            </div>
    </div>
    </div>
    <?php $this->load->view('includes/footer'); ?>