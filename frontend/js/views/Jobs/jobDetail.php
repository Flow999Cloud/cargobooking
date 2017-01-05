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
                 <h1>Job Detail</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 Jobs-listing-wrapper-outer">
            <div class="row Jobs-listing-wrapper">
                <div class="col-md-2 left-sidebar">
                    <div class="row height-margin20"></div>
                    <div class="row left-sidebar-contents">
                        <div class="row height-margin20"></div>
                        <div class="row company-logo">
                            <h4>Posted By</h4>
                            <img src="<?php echo site_url('themes/images/careerspak.png'); ?>" alt="careerspak" title="careerspak">
                        </div>
                        
                        <div class="row company_contact">
                            
                           <p><strong>Name: </strong><?php  echo $jobdata->cmp_name; ?></p>
                           <p><strong>City: </strong><?= $jobdata->cmp_location; ?></p>
                            <p><strong>Address: </strong><?= $jobdata->cmp_office_address; ?></p>
                        </div>
                    </div>   
                </div>
                <div class="col-md-10 list-content-wrapper">
                    <div class="container-fluid">
                        <div class="row height-margin30"></div>
                        <div class="row listing-box">
                            <div class="row title-outer">
                             
                                 <div class="col-md-8">
                                <h3 class="post-title"><?= $jobdata->job_title; ?></h3>
                            
                                </div>
                        <div class="col-md-3 date-area">
                            <p class="post-date">Posted on: <?= $jobdata->job_post_date; ?></p>
                        </div>
                            </div>
                            <div class="row desc-outer">
                            <div class="col-md-12 description">
                                
                                 <div class="row desc-bg">
                                <h4>Job Description</h4>
                                 </div>
                                 
                                 <div class="height-margin10"></div>
                            <p class="post-detail">
                          <?= $jobdata->job_description; ?>
                            </p>
                              <div class="height-margin10"></div>
                              
                        </div>
                                
                            </div>
                       <div class="row jobs_outer">
                             <div class="col-md-12 description">
                                  
                                
                                 <div class="row desc-bg">
                                  <h4>Requirements</h4>
                                 </div>
                                 
                                    <table class="table-bordered table-responsive jobs_table job-details-wrapper">
                                     <tbody>
                                        <tr>
                                        <td>Required Experience</td>
                                        <td><?= $jobdata->job_experience; ?></td>
                                        </tr>
                                         <tr>
                                        <td>Required Skills</td>
                                        <td><?= $jobdata->job_skills; ?></td>
                                        </tr>
                                        <tr>
                                        <td>Job Category</td>
                                        <td><?= $jobdata->job_category; ?></td>
                                        </tr>
                                        <tr>
                                        <td>Salary Range</td>
                                        <td><?= $jobdata->job_min_salary; ?> - <?= $jobdata->job_max_salary; ?></td>
                                        </tr>
                                         <tr>
                                             
                                        <td>Required Education</td>
                                        <td><?= $jobdata->job_min_education; ?></td>
                                        </tr>
                                         <tr>
                                        <td>Posted On</td>
                                        <td><?= $jobdata->job_post_date; ?></td>
                                        </tr>
                                       <tr>
                                        <td>Apply From</td>
                                        <td><?= $jobdata->job_start_date; ?></td>
                                        </tr>
                                         <tr>
                                        <td>Apply To</td>
                                        <td><?= $jobdata->job_end_date; ?></td>
                                        </tr>
                                        <tr>
                                        <td>Job Timing</td>
                                        <td><?= $jobdata->job_timing; ?></td>
                                        </tr>
                                        <tr>
                                        <td>Job Type</td>
                                        <td><?= $jobdata->job_type; ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                  <div class="height-margin10"></div>
                                 <div class="row" style="text-align: right;margin: 0px;">
                                     <a href="<?php echo site_url('jobs/apply').'/'.$jobdata->job_id; ?>" class="btn btn-success">Apply For Job</a>
                                 </div>
                                 <div class="height-margin10"></div>
                                </div>   
                            </div>
                            
                        </div>
                        
                         
                      
                        <div class="row">
                            
                                
                          
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('includes/footer'); ?>




