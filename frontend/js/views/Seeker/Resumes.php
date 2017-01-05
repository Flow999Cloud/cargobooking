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
                 <h1>Resumes</h1>
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
                            <form name="side-search" class="side-search">
                                <div class="row">
                                    <h4>City</h4>
                                    <select name="category" class="form-control form-select">
                                        <option value="">Select City</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <h4>Experience Level</h4>
                                    <select name="category" class="form-control form-select">
                                        <option value="">Select experience level</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <h4>Education Level</h4>
                                    <select name="category" class="form-control form-select">
                                        <option value="">Select Category</option>
                                    </select>
                                </div>
                                 <div class="row">
                                     <div class="height-margin5"></div>
                                     <input type="submit" class=" btn btn-default btn-search" value="Update Search" name="submit"/>
                                </div>
                            </form>
                             
                        </div>
                    </div>   
                </div>
                <div class="col-md-9 list-content-wrapper">
                    <div class="container-fluid">
                        <div class="row height-margin20"></div>
                        <?php if(count($allusers)){
                            foreach($allusers as $user){
                            ?>
                         <div class="row listing-box">
                            <div class="row title-outer">
                                <div class="col-md-1 profile-section" >
                                    <img src="<?php echo site_url('themes/images/user profile/user.png'); ?>" alt="" title="<?php echo $user->user_fname.' '.$user->user_lastname; ?>"/>  ;
                                </div> 
                                 <div class="col-md-8">
                                     <a href="<?php echo site_url('resumes/fulldetail').'/'.$user->user_id; ?>"><h3 class="post-title"><?php echo $user->user_fname.' '.$user->user_lastname; ?></h3></a>
                            <p>City: ,<?php echo $user->u_city; ?>, Experience: <?php echo $user->exp_total; ?></p>
                                </div>
                        <div class="col-md-3 date-area">
                            <p class="post-date">Register on: 7/28/2011</p>
                        </div>
                            </div>
                            <div class="row desc-outer">
                            <div class="col-md-12 description">
                            <p class="post-detail">
                           <?php
                           echo $user->u_summary;
                           ?></p>
                            <a href="<?php echo site_url('resumes/fulldetail').'/'.$user->user_id; ?>" class="more">More >></a>
                        </div>
                            </div>
                 
                        </div>
                        <?php } }else{?>
                        <p>Sorry no resume found this time.</p>
                        <?php }?>
                       
                        
                        <div class="row">
                            
                                
                          
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('includes/footer')?>

