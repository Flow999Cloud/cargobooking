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
                            <img src="<?php if(isset($img->image_name)){echo site_url().'usersimg/'.$img->image_name;}else{echo site_url('themes/images/user profile/user.png');} ?>">
                            <div class="height-margin5"></div>
                            <a href="#" class="image-link btn-success"  data-toggle="modal" data-target="#profileImage">Add/Change</a>
                           
                        </div>
                        
                        <div class="row company_contact">
                             <div class="modal fade" id="profileImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <form name="login-from" class="field-form" action="<?php echo site_url('user/addProfileImage'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Add New Profile Image</h3>
      </div>
     <div class="modal-body">
         <div class="row">
              <div class="col-md-10">
                <label>Select Profile Image*</label>
                <input type="file" name="profile" required="" class="profile">
              </div>
         </div>
            
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="<?php if(isset($img->image_names)){ echo 'update_image';}else{echo 'add_image';}?>" class="btn btn-primary">Save</button>
      </div>
    </div>
          </form>
  </div>
</div>
                           <!--- if condition to check empty user information. if information is missing add button otherwise edit --> 
                           <span class="basic-info">
                            <p><strong>Phone: </strong><?php if(!empty($basics->u_phone)){echo $basics->u_phone;} ?></p>
                            <p><strong>City: </strong><?php if(!empty($basics->u_city)){echo $basics->u_city;} ?></p>
                            <p><strong>Address: </strong><?php if(!empty($basics->u_address)){echo $basics->u_address;} ?></p>
                           
                           </span>
                            <!--if information is missing show add information button---->
                           <?php if(!empty($basics->u_id)){?>
                             <a href="<?php echo site_url('user/update_basic').'/'.$basics->u_id; ?>" class="btn btn-success">Edit Basic information</a>
                            
                           <?php }else {?>
                             <a href="<?php echo site_url('user/basic_info'); ?>" class="btn btn-addition">Add Basic information</a>
                           <?php }?>
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
                             <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal"><?php  if(!empty($basics->u_id)){ echo"Edit Summary"; } else{ echo"Add Summary";} ?></a>
                              <div class="height-margin10"></div>
                            <!--- model window to edit career summary-->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <form name="login-from" class="field-form" action="<?php echo site_url('user/update_summary'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php if(!empty($basics->u_user_id)){ echo "Edit Career Summary"; } else {echo"Add Career Summary";} ?></h4>
      </div>
     <div class="modal-body">
        
         <textarea name="summary" class="form-control" required="" placeholder="Enter your career summary..."><?php if(!empty($basics->u_summary)){echo $basics->u_summary;}?></textarea>
         <input type="hidden" class="form-control summary-text" name="userid" value="<?php echo $this->session->userdata('userid'); ?>">
        <?php  if(!empty($basics->u_user_id)) {?>
         <input type="hidden" name="basicid" value="<?php echo $basics->u_id; ?>">
        <?php }?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="<?php  if(!empty($basics->u_id)){ echo"update_summary"; } else{ echo"add_summary";} ?>" class="btn btn-primary"><?php  if(!empty($basics->u_id)){ echo"Update"; } else{ echo"Save";} ?></button>
      </div>
    </div>
          </form>
  </div>
</div>
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
                                 <div class="row" style="text-align: right;margin: 0px;">
                                      <a href="#" class="btn btn-success" data-toggle="modal" data-target="#Experience">Add New Experience</a>
                                 </div>
                                 <div class="height-margin10"></div>
                                 <div class="modal fade" id="Experience" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <form name="login-from" class="field-form" action="<?php echo site_url('user/experience'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Experience</h3>
      </div>
     <div class="modal-body">
         <div class="row">
              <div class="col-md-10">
                <label>Company Name*</label>
                <input type="text" class="form-control" value="" name="cname" required="">
              </div>
         </div>
            <div class="row">
              <div class="col-md-5">
                <label>Start Date*</label>
                <input type="text" class="form-control datepicker" value="" name="sdate" required="">
              </div>
                 <div class="col-md-5">
                <label>Start Date</label>
                <input type="text" class="form-control datepicker" value="" name="edate" required="">
              </div>
         </div>
         <div class="row">
              <div class="col-md-10">
                <label>Detail*</label>
                <textarea name="desc" class="form-control" required=""></textarea>
              </div>
         </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="add_experience" class="btn btn-primary">Save</button>
      </div>
    </div>
          </form>
  </div>
</div>
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
                                 <div class="row" style="text-align: right;margin: 0px;">
                                      <a href="#" class="btn btn-success" data-toggle="modal" data-target="#Skill">Add New Skill</a>
                                 </div>
                                 <div class="height-margin10"></div>
                                  <div class="modal fade" id="Skill" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <form name="login-from" class="field-form" action="<?php echo site_url('user/saveskills'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Add New Skill</h3>
      </div>
     <div class="modal-body">
         <div class="row">
              <div class="col-md-10">
                <label>Skill Name*</label>
                <select name="skill" class="form-control" required="">
                    <option value="">Select any skill</option>
                    <option value="PHP">PHP</option>
                    <option value="Codeigniter">Codeigniter</option>
                    
                </select>
              </div>
         </div>
            <div class="row">
              <div class="col-md-10">
                <label>Expertise Level*</label>
                <select name="level" class="form-control" required="">
                    <option value="">Select Experience Level</option>
                    <option value="Student">Student</option>
                    <option value="Expert">Expert</option>
                    
                </select>
              </div>
         </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="btnskill" class="btn btn-primary">Save</button>
      </div>
    </div>
          </form>
  </div>
</div>
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
                                 <div class="row" style="text-align: right;margin: 0px;">
                                      <a href="#" class="btn btn-success" data-toggle="modal" data-target="#Education">Add New Education</a>
                                 </div>
                                 <div class="height-margin10"></div>
                                  <div class="modal fade" id="Education" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <form name="login-from" class="field-form" action="<?php echo site_url('user/addNewEducation'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Add Education</h3>
      </div>
     <div class="modal-body">
         <div class="row">
              <div class="col-md-10">
                <label>Degree Name*</label>
                <select name="dname" class="form-control" required="">
                    <option value="">Select Degree</option>
                    <option value="B.sc">B.sc</option>
                    <option value="M.sc">M.sc</option>
                     <option value="M.phil">M.phil</option>
                    <option value="PHD">PHD</option>
                    
                </select>
              </div>
         </div>
         <div class="row">
              <div class="col-md-10">
                <label>College/University Name*</label>
                <select name="uname" class="form-control" required="">
                    <option value="">Select College/University</option>
                    <option value="University Of Punjab">University Of Punjab</option>
                    <option value="Islamia University Of Bahawalpur">Islamia University Of Bahawalpur</option>
                    
                </select>
              </div>
         </div>
          <div class="row">
              <div class="col-md-10">
                <label>Passing Date*</label>
                <input type="text" class="form-control datepicker" name="pdate" required="">
              </div>
         </div> 
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="addedu" class="btn btn-primary">Save</button>
      </div>
    </div>
          </form>
  </div>
</div>
                                </div>   
                            </div>
                            <div class="row jobs_outer">
                             <div class="col-md-12 description">
                                  
                                 <div class="row desc-bg">
                                     <h4>Recent Applications</h4>
                                 </div>
                                    <table class="table-bordered table-responsive jobs_table user_dashboard_table">
                                     
                                        <thead>
                                        <th>Job Title</th>
                                        <th>Company Name</th>
                                         <th>Apply date</th>
                                        <th>Action</th>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            if(count($applications)){
                                            foreach ($applications as $app){
                                                ?>
                                        <tr>
                                        <td><?php echo $app->job_title; ?></td>
                                        <td><?php echo $app->cmp_name; ?></td>
                                        <td><?php echo $app->app_apply_date;?></td>
                                        <td><a href="<?php echo site_url('jobs/deleteapplication').'/'.$app->app_id; ?>">Delete</a></td>
                                        </tr>
                                            <?php } ?>
                                            <?php } else {?>
                                        no application found
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


