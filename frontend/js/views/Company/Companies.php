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
                 <h1>Companies</h1>
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
                             <h3>Search Companies</h3>
                        </div>
                        <div class="row quick-search">
                            <form name="side-search" class="side-search" action="<?php echo site_url('companies/quicksearch'); ?>" method="post" enctype="multipart/form-data">
                               
                                 <div class="row">
                                    <h4>Job City</h4>
                                    <select name="locaation" class="form-control form-select">
                                        <option value="">Select City</option>
                                        <option value="Lahore">Lahore</option>
                                         <option value="Karachi">Karachi</option>
                                    </select>
                                </div>
                                 <div class="row">
                                    <h4>Category</h4>
                                    <select name="category" class="form-control form-select">
                                        <option value="">Select Category</option>
                                          <option value="IT">IT</option> 
                                         <option value="Business">Business</option>
                                          <option value="Ecommerce">Ecommerce</option>
                                         
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
                        <?php foreach($allcompanies as $company) {?>
                        <div class="row listing-box">
                            <div class="row title-outer">
                                <div class="col-md-1 profile-section" >
                                    <img src="<?php echo site_url('themes/images/user profile/user.png'); ?>" alt="" title="<?php echo $company->cmp_name; ?>"/>  
                                </div> 
                                 <div class="col-md-8">
                            <a href="<?php echo site_url('companies/cmpdetail').'/'.$company->cmp_id; ?>"><h3 class="post-title"><?php echo $company->cmp_name; ?></h3></a>
                            <p>City: <?php echo $company->cmp_location; ?></p>
                                </div>
                        <div class="col-md-3 date-area">
                            <p class="post-date">Register on: <?php echo $company->user_reg_date; ?></p>
                        </div>
                            </div>
                            <div class="row desc-outer">
                            <div class="col-md-12 description">
                            <p class="post-detail">
                                <?php echo $company->cmp_detail_summary; ?>
                            </p>
                            <a href="<?php echo site_url('companies/cmpdetail').'/'.$company->cmp_id; ?>" class="more">More >></a>
                        </div>
                            </div>
                 
                        </div>
                        <?php }?>
                        
                     
                      
                        <div class="row">
                            
                                
                          
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('includes/footer'); ?>

