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
                 <h1>Blogs</h1>
                 <p><a href="#">Home</a>/Blogs</p>
             </center>
         </div>
     </div>
 <div class="container-fluid blogPagewrap">
      
        <div class="row">
            <div class="col-md-9">
                <?php if(count($blogs)){
                foreach($blogs as $blog){?>
                <div class="col-md-6 blogBoxes">
               <div class="blogwhitebg">
                     <img src="<?php echo site_url('upload').'/'.$blog->blog_image; ?>" alt="no image">
               <h4><?php echo $blog->blog_heading; ?></h4>
               <p>
                  
                    <?php echo substr($blog->blog_text, 0,200); ?>
                </p>
                <hr style=" margin-top: 7px;margin-bottom: 0px;"/>
                <p class="crumbarea">
                    <span class="comment pull-left">23423 Comments</span>
                    <a href="<?php echo site_url('blogs/singleBlog').'/'.$blog->blog_id; ?>" class="pull-right">Read More</a>
                </p>
                 </div>
            </div>
                <?php }} else {?>
                 <div class="col-md-6 blogBoxes">
               <div class="blogwhitebg">
                     <img src="<?php echo site_url('frontend/img/blogs/postimg.png'); ?>" alt="no image">
               <h4>Lorum inspum</h4>
               <p>
                  
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                <hr style=" margin-top: 7px;margin-bottom: 0px;"/>
                <p class="crumbarea">
                    <span class="comment pull-left">23423 Comments</span>
                <a href="" class="pull-right">Read More</a>
                </p>
                 </div>
            </div>
                 <div class="col-md-6 blogBoxes">
               <div class="blogwhitebg">
                   
                        <img src="<?php echo site_url('frontend/img/blogs/postimg.png'); ?>" alt="no image">
               <h4>Lorum inspum</h4>
               <p>
                  
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                   <hr style=" margin-top: 7px;margin-bottom: 0px;"/>
                <p class="crumbarea">
                    <span class="comment pull-left">23423 Comments</span>
                <a href="" class="pull-right">Read More</a>
                </p>
                 </div>
            </div>
                 <div class="col-md-6 blogBoxes">
               <div class="blogwhitebg">
                     <img src="<?php echo site_url('frontend/img/blogs/postimg.png'); ?>" alt="no image">
               <h4>Lorum inspum</h4>
               <p>
                  
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                <hr style=" margin-top: 7px;margin-bottom: 0px;"/>
                <p class="crumbarea">
                    <span class="comment pull-left">23423 Comments</span>
                <a href="" class="pull-right">Read More</a>
                </p>
                 </div>
            </div>
                 <div class="col-md-6 blogBoxes">
               <div class="blogwhitebg">
                   
                        <img src="<?php echo site_url('frontend/img/blogs/postimg.png'); ?>" alt="no image">
               <h4>Lorum inspum</h4>
               <p>
                  
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales 
                    orci id viverra ultrices.
                    Aenean fringilla neque vel lectus imperdiet placerat. 
                </p>
                <hr style=" margin-top: 7px;margin-bottom: 0px;"/>
                <p class="crumbarea">
                    <span class="comment pull-left">23423 Comments</span>
                <a href="" class="pull-right">Read More</a>
                </p>
                 </div>
            </div>
                <?php } ?>
            </div>
            <div class="col-md-3">
                <h2>Recent Blog Posts</h2>
                <hr/>
                <?php if(count($recentblogs)){ 
                    foreach($recentblogs as $recent){?>
                    <div class="row marginBottom sidebarBlog">
                        <img src="<?php echo site_url('upload').'/'.$recent->blog_image; ?>">
                        <h5><a href="<?php echo site_url('blogs/singleBlog').'/'.$recent->blog_id; ?>"><?php echo $recent->blog_heading; ?></a></h5>
                        <p><?php echo substr($recent->blog_text,0,100); ?></p>
                    </div>
                <?php }}?>
                
            </div>
            
             
    </div>
     
    </div>
  

    <?php $this->load->view('includes/footer'); ?>