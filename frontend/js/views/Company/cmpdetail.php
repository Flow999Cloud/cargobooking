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
                 <h1>Dashboard</h1>
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
                            <img src="<?php echo site_url('themes/images/company/websphere.png'); ?>" alt="" title="">
                            <div class="height-margin5"></div>
                           
                        </div>
                        
                        <div class="row company_contact">
                             <div class="modal fade" id="profileImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <form name="login-from" class="field-form" action="<?php echo site_url('company/addlogo'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Company Logo</h3>
      </div>
     <div class="modal-body">
         <div class="row">
              <div class="col-md-10">
                <label>Select Logo*</label>
                <input type="file" name="profile" required="" class="custom_file">
              </div>
         </div>
            
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="add_image" class="btn btn-primary">Save</button>
      </div>
    </div>
          </form>
  </div>
</div>
                           <!--- if condition to check empty user information. if information is missing add button otherwise edit --> 
                           <span class="basic-info">
                            <p><strong>Phone: </strong><?php if(!empty($cmpInfo->cmp_contact)){echo $cmpInfo->cmp_contact;} ?></p>
                            <p><strong>City: </strong><?php if(!empty($cmpInfo->cmp_location)){echo $cmpInfo->cmp_location;} ?></p>
                            <p><strong>Address: </strong><?php if(!empty($cmpInfo->cmp_office_address)){echo $cmpInfo->cmp_office_address;} ?></p>
                           
                           </span>
                            <!--if information is missing show add information button---->
                          
                        </div>
                    </div>  
                </div>
                <div class="col-md-10 list-content-wrapper">
                    <div class="container-fluid">
                        <div class="row height-margin30"></div>
                        <div class="row listing-box">
                            <div class="row title-outer">
                             
                                 <div class="col-md-8">
                                <h3 class="post-title"><?php if($cmpInfo->cmp_name){echo $cmpInfo->cmp_name;};?></h3>
                            
                                </div>
                        <div class="col-md-3 date-area">
                            <p class="post-date">Register on: 7/28/2011</p>
                        </div>
                            </div>
                            <div class="row desc-outer">
                            <div class="col-md-12 description">
                                 <div class="row desc-bg">
                                <h4>Company Detail</h4>
                                 </div>
                                <div class="height-margin10"></div>
                            <p class="post-detail">
                            <?php if($cmpInfo->cmp_detail_summary){ ?>
                                <?php echo $cmpInfo->cmp_detail_summary; ?>
                            <?php }?>
                            </p>
                            
                        </div>
                                
                            </div>
                            <div class="row jobs_outer">
                             <div class="col-md-12 description">
                                   <div class="row desc-bg">
                               <h4>Recent Jobs Posted</h4>
                                 </div>
                                 <div class="height-margin10"></div>
                                 
                                 <div class="height-margin10"></div>
                                <table class="table-bordered table-responsive jobs_table">
                                      
                                        <thead>
                                        
                                        <th>Job Title</th>
                                        <th>Posted Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        </thead>
                                         <tbody>
                                             <?php if(count($jobs)){?>
                                             <?php foreach($jobs as $job){ ?>
                                             <tr>
                                           
                                             <td><?php echo $job->job_title; ?></td>
                                              <td><?php echo $job->job_post_date; ?></td>
                                              <td><?php echo $job->job_end_date; ?></td>
                                              <td><?php echo $job->job_status; ?></td>
                                              
                                              <td>
                                                  <a href="<?php echo site_url('jobs/apply').'/'.$job->job_id; ?>">Apply</a> 
                                                  
                                        </tr>
                                             <?php } } else{?>
                                        <tr>
                                            <td colspan="4">
                                                No Jobs Posted.
                                            </td>
                                        </tr>
                                             <?php }?>
                                       
                                        </tbody>
                                    </table>
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


