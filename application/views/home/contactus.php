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
                 <h1>Contact Us</h1>
                 <p><a href="#">Home</a>/Contact US</p>
             </center>
         </div>
     </div>
 <div class="container-fluid contactusPage">
     <div class="row">
         <div class="col-md-12">
             <div class="row">
                 <div class="col-md-6">
                     <div class="row cntredbg">
                         <div class="col-md-12">
                             <div class="cntheading">
                                   <h2>Get in Touch</h2>
                             </div>
                             <div class="cntinfoarea">
                                  <p>If you are in the middle of something and 
you don’t want to miss that important call.If you are in the middle of something and 
you don’t want to miss that important call.</p>
                             <br/>
                             <p><span class="glyphicon glyphicon-map-marker"></span> 1234 Lorum Street, AK 9976</p>
                             <p><span class="glyphicon glyphicon-phone-alt"> </span> +44 2088 111445</p>
                             <p><span class="glyphicon glyphicon-envelope"> </span> info@yourmail.com</p>
                             </div>
                         </div>
                         <div class="col-md-12">
                              <div class="row footerSocial">
                     <ul>
                         <li><a href="" class="fa fa-facebook" aria-hidden="true"></a></li>
                     <li><a href="" class="fa fa-twitter" aria-hidden="true"></a></li>
                     <li><a href="" class="fa fa-google-plus" aria-hidden="true"></a></li>
                      <li><a href="" class="fa fa-linkedin" aria-hidden="true"></a></li>
                       <li><a href="" class="fa fa-instagram" aria-hidden="true"></a></li>
                        <li><a href="" class="fa fa-youtube" aria-hidden="true"></a></li>
                         <li><a href="" class="fa fa-vimeo" aria-hidden="true"></a></li>
                          <li><a href="" class="fa fa-rss" aria-hidden="true"></a></li>
                </ul>
                </div>
                         </div>
                     </div>
                     
                 </div>
                 <div class="col-md-6">
                     <div class="row">
                         <div class="col-md-12">
      
            <div class="row">
                
                <div class="col-md-12">
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
                 
             </div>
         </div>
     </div> 
 </div>
  

    <?php $this->load->view('includes/footer'); ?>