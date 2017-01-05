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
                 <h1>Full Review</h1>
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
                            <img src="<?php echo site_url('themes/images/user profile/user.png'); ?>" alt="Muhammad Azam" title="Muhammad Azam">
                            <div class="height-margin5"></div>
                            
                        </div>
                        
                        <div class="row company_contact">
                       
                           <!--- if condition to check empty user information. if information is missing add button otherwise edit --> 
                           <span class="basic-info">
                            <p><strong>Phone: </strong><?php if(!empty($basics->u_phone)){echo $basics->u_phone;} ?></p>
                            <p><strong>City: </strong><?php if(!empty($basics->u_city)){echo $basics->u_city;} ?></p>
                            <p><strong>Address: </strong><?php if(!empty($basics->u_address)){echo $basics->u_address;} ?></p>
                           
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
                                <h3 class="post-title"><?php echo $basics->user_fname.' '.$basics->user_lastname ?></h3>
                            
                                </div>
                        <div class="col-md-3 date-area">
                            <p class="post-date">Register on: 7/28/2011</p>
                        </div>
                            </div>
                            <div class="row desc-outer">
                            <div class="col-md-12 description">
                                
                                 <div class="row desc-bg">
                                <h4>Career Summary</h4>
                                 </div>
                                 
                                 <div class="height-margin10"></div>
                            <p class="post-detail">
                            <?php if(!empty($basics->u_summary))
                            {
                                echo $basics->u_summary;
                            }
                            else 
                                {
                                echo"Add your career summary here";
                                }
                            ?>
                            </p>
                              <div class="height-margin10"></div>
                            <!--- model window to edit career summary-->
                       
                            <!--- end model window--->
                        </div>
                                
                            </div>
                       <div class="row jobs_outer">
                             <div class="col-md-12 description">
                                  
                                
                                 <div class="row desc-bg">
                                  <h4>Experience</h4>
                                 </div>
                                 
                                    <table class="table-bordered table-responsive jobs_table user_dashboard_table">
                                     
                                        <thead>
                                        <th>Company Name</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Total Experience</th>
                                        <th>Action</th>
                                        </thead>
                                          <tbody>
                                            <?php foreach ($experience as $exp){ ?>
                                               <tr>
                                        <td><?php echo $exp->exp_company_name; ?></td>
                                        <td><?php echo $exp->exp_start_date; ?></td>
                                         <td><?php  echo $exp->exp_end_date;?></td>
                                         <td><?php echo $exp->exp_total; ?></td>
                                         <td><a href="<?php echo site_url('user/editexperience').'/'.$exp->exp_id; ?>">Edit</a> | <a href="<?php echo site_url('user/deletexperience').'/'.$exp->exp_id; ?>">Delete</a> </td>
                                        </tr>
                                            <?php }?>
                                        
                                        </tbody>
                                    </table>
                                  <div class="height-margin10"></div>
                                
                                 <div class="height-margin10"></div>
         
                                </div>   
                            </div>
                            <div class="row jobs_outer">
                             <div class="col-md-12 description">
                                  
                                 <div class="row desc-bg">
                                     <h4>Skills and Expertise</h4>
                                 </div>
                                    <table class="table-bordered table-responsive jobs_table expertise user_dashboard_table">
                                     
                                        <thead>
                                        <th>Skill Name</th>
                                        <th>Experience Level</th>
                                        <th>Action</th>
                                        </thead>
                                          <tbody>
                                              <?php if(!empty($skills)){ ?>
                                              <?php foreach($skills as $skill){?>
                                              <tr>
                                                  <td><?php echo $skill->skill_name;?></td>
                                                  <td><?php echo $skill->skill_level; ?></td>
                                                  <td><a class="btn-danger" href="<?php echo site_url('user/deleteskill').'/'.$skill->skill_id; ?>">Delete</a></td>
                                              </tr>
                                              <?php } }else{ ?>
                                              <tr>
                                                  <td colspan="3">
                                                      NO skills available
                                                  </td>
                                              </tr>
                                              <?php }?>
                                        
                                        
                                        </tbody>
                                    </table>
                                   <div class="height-margin10"></div>
                
                                </div>   
                            </div>
                               <div class="row jobs_outer">
                             <div class="col-md-12 description">
                                  
                                 <div class="row desc-bg">
                                     <h4>Education</h4>
                                 </div>
                                    <table class="table-bordered table-responsive jobs_table user_dashboard_table">
                                     
                                        <thead>
                                        <th>Degree Name</th>
                                        <th>Institute</th>
                                         <th>Passing Year</th>
                                        <th>Action</th>
                                        </thead>
                                          <tbody>
                                        <?php if(!empty($education)){ ?>
                                              <?php foreach($education as $edu){?>
                                              <tr>
                                                  <td><?php echo $edu->edu_degree_title;?></td>
                                                  <td><?php echo $edu->edu_institute;?></td>
                                                  <td><?php echo $edu->edu_passing_year; ?></td>
                                                  <td>
                                                      <a class="btn-danger" href="<?php echo site_url('user/deleteedu').'/'.$edu->edu_id; ?>">Delete</a>
                                                  
                                                  </td>
                                              </tr>
                                              <?php } }else{ ?>
                                              <tr>
                                                  <td colspan="4">
                                                      NO Education  available
                                                  </td>
                                              </tr>
                                              <?php }?>
                                        
                                        </tbody>
                                    </table>
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


