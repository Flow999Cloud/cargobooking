<?php $this->load->view('Dashboard/header'); ?> 
<!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('Dashboard/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        StreetexCod
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin Area</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <?php //$this->load->view('Dashboard/message');?>
        <div class="row">
            <div class="col-md-12">
                
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Detail Blog</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2> Title:</h2> <?php echo $blog->blog_heading; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <h2>Category: </h2><?php if(isset($cat)){
                                       foreach($cat as $ct) {
                                           if($blog->cat_id == $ct->cat_id){
                                         ?>
                                       <?php if(!($ct->cat_name)){echo "No category Found"; }else{ echo $ct->cat_name; }?>
                                           <?php }
                                           ?>
                                       <?php }
                                           } ?>
                    </div>
                     <div class="col-md-3">
                        <h2>Tags: </h2>  <?php
                                            $tags = implode(",",$tag);
                                            echo $tags;
                                    ?>
                    </div>
                </div>
                
              <div class="row">
                    <div class="col-md-12">
                        <h2> Description</h2> <?php echo $blog->blog_text; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <img src="<?php echo site_url().'/upload/'.$blog->blog_image; ?>" alt="Blog Image" height="200" width="200">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <h2> Status</h2> 
                       <?php if($blog->status==0){ 
                                 echo "Inactive";}
                             else{ echo "Active";}?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-md-offset-4">
                        <a href="<?php echo site_url('dashboard/editblog').'/'.$blog->blog_id; ?>" class="btn btn-info">Edit Blog</a>
                    </div>
                    <div class="col-md-1">
                        <a href="<?php echo site_url('dashboard/deleteblog').'/'.$blog->blog_id; ?>" class="btn btn-info">Delete Blog</a>
                    </div>
                </div>
                
                <h1>Comments</h1>
                <?php foreach($comnt as $cm){
                            if($cm->status == 1){
                    ?>
                
                <div class="row">
                    <div class="col-md-8">
                        <h2> <?php echo $cm->fname." ".$cm->lname; ?></h2> 
                        <p>
                            <?php  echo $cm->blogc_comment; ?>
                        </p>
                    </div>
                    <p><a href="<?php echo site_url('dashboard/deletecomment').'/'.$cm->blogc_id.'/'.$blog->blog_id; ?>" class="btn btn-info">Delete Comment</a></p>
                </div>
                            <?php } } ?>
            </div>
        </div>
       
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('Dashboard/footer'); ?> 
