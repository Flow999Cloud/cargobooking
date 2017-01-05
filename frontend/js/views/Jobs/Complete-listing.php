<?php $this->load->view('includes/head'); ?>
<?php $this->load->view('includes/header'); ?>
<?php if($this->session->userdata('error'))
    {
      $error=$this->session->userdata('error');
        $this->session->unset_userdata('error');
    }
    if($this->session->userdata('success'))
        {
        $success=$this->session->userdata('success');
         $this->session->unset_userdata('success');
        }
    ?> 
<div class="container-fluid top-bg-yellow">
    <div class="row height-margin30">
        
    </div>
   <div class="row">
        <div class="col-md-12 black-bg-outer">
            <div class="row black-bg-title">
                 <h1>All Jobs</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 Jobs-listing-wrapper-outer">
            <div class="row Jobs-listing-wrapper">
                <div class="col-md-3 left-sidebar">
                    <div class="row height-margin20"></div>
                    <div class="row left-sidebar-contents">
                        <div class="row side-title">
                             <h3>Search Jobs</h3>
                        </div>
                        <div class="row quick-search">
                            <form name="side-search" class="side-search" method="post" action="<?php echo site_url('jobs/quicksearch'); ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <h4>Job Type</h4>
                                    <ul class="side-search-list">
                                        <li><input type="radio" name="jtype" checked="" value="Part Time">Part Time</li>
                                        <li><input type="radio" name="jtype" value="Full Time">Full Time</li>
                                        <li><input type="radio" name="jtype" value="Free Lancing">Free Lancing</li>
                                    </ul>
                                </div>
                                 <div class="row">
                                    <h4>Job City</h4>
                                    <select name="location" class="form-control form-select">
                                        <option value="">Select City</option>
                                        <option value="Lahore">Lahore</option> 
                                        <option value="Karachi">Karachi</option> 
                                         <option value="Multan">Multan</option> 
                                    </select>
                                </div>
                                 <div class="row">
                                    <h4>Job Category</h4>
                                    <select name="category" class="form-control form-select">
                                        <option value="">Select Category</option>
                                         <option value="IT">IT</option> 
                                         <option value="Business">Business</option>
                                          <option value="Ecommerce">Ecommerce</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <h4>Experience Level</h4>
                                    <select name="experience" class="form-control form-select">
                                        <option value="">Select experience level</option>
                                         <option value="No Experience">No Experience</option>
                                         <option value="Less than one year">Less than one year</option>
                                          <option value="One year">One year</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <h4>Education Level</h4>
                                    <select name="education" class="form-control form-select">
                                        <option value="">Select Education</option>
                                          <option value="Metric">Metric</option>
                                          <option value="F.sc">F.sc</option>
                                    </select>
                                </div>
                                 <div class="row">
                                     <div class="height-margin5"></div>
                                     <input type="submit" class=" btn btn-default btn-search" value="Quick Search" name="submit"/>
                                </div>
                            </form>
                             
                        </div>
                    </div>   
                </div>
                <div class="col-md-9 list-content-wrapper">
                    <div class="container-fluid">
                        <div class="row height-margin20"></div>
                        <?php if(count($jobdata)){
                            foreach($jobdata as $job){
                            ?>
                         <div class="row listing-box">
                            <div class="row title-outer">
                                <div class="col-md-9">
                                    <a href="<?php echo site_url('jobs/jobdetail').'/'.$job->job_id; ?>"><h3 class="post-title"><?= $job->job_title;?></h3></a>
                            <p><?= $job->cmp_name;?></p>
                        </div>
                        <div class="col-md-3 date-area">
                            <p class="post-date">Posted: <?= $job->job_post_date;?></p>
                        </div>
                            </div>
                            <div class="row desc-outer">
                            <div class="col-md-12 description">
                            <p class="post-detail">
                            <?= $job->job_description;?>
                            </p>
                            <a href="<?php echo site_url('jobs/jobdetail').'/'.$job->job_id; ?>" class="more">More >></a>
                        </div>
                            </div>
                 
                        </div>
                        <?php }} else{?>
                        <p>there are no jobs available...</p>
                        <?php }?>
                        <div class="row">
                            
                                
                          
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('includes/footer');
?>

