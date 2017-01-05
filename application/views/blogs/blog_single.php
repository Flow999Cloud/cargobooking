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
                 <h1>Blogs</h1>
                 <p><a href="#">Home</a>/Blogs</p>
             </center>
         </div>
     </div>
 <div class="container-fluid SingleBlogPage">
    <div class="row">
            <div class="col-md-9">
                 <div class="col-md-12 blogBoxes">
               <div class="blogwhitebg">
                   <img class="largImage" src="<?php echo site_url('upload').'/'.$singleBlog->blog_image; ?>" alt="no image">
               <h4><?php echo $singleBlog->blog_heading; ?></h4>
               <hr/>
               <div class="col-md-12">
                   <div class="leftsmall">
                   <img class="smallroundpic" src="<?php echo site_url('frontend/img/blogs/roundpic.png'); ?>">
                   <p><b>Muhammad Azam</b></p>
                   <p>20 Comments</p>
               </div>
               <div class="rightpanel">
                    <p>Category: News / Tags:news,tip news</p>
               </div>
               </div>
               <div class="col-md-12">
                   <?php echo $singleBlog->blog_text; ?>
               </div>
                 </div>
            </div>
        
                 
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