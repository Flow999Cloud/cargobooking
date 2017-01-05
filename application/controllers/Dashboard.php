<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
    public $userID = null;
    public function __construct()
        {
               
               parent::__construct();
               if(!$this->session->userdata('adminID'))
               {
                   
                   redirect('adminlogin');
               }
               else
               {
                   $this->userID=$this->session->userdata('adminID');  
               }
              
        }
	public function index()
	{
            $data['active']='dashboard';
		$this->load->view('dashboard/index',$data);
	}
        public function bookings()
        {
            
        }
        public function category(){
            $data['active']='category';
            $this->load->model('Admin');
          $data['cat'] = $this->Admin->getcategory();
            $this->load->view('dashboard/category',$data);
        }
         public function AddNewCategory(){
            $data['active']='category';
            $this->load->view('dashboard/addcategory',$data);
        }
        public function saveNewCategory(){
            {
                $this->form_validation->set_rules('cname', 'Category Name', 'required');
                $this->form_validation->set_rules('status', 'Status', 'required');
                $this->form_validation->set_error_delimiters('<div class="error" style="color: red;  padding: 1%;">', '</div>');
                
            }
            if ($this->form_validation->run() == FALSE)
		{
                    $data['active']='category';
                   $this->load->view('dashboard/addcategory',$data);
		}
		else
		{
               $cname= $this->input->post('cname');
               $status= $this->input->post('status');
               $this->load->helper('date');
                $currentdate = date("m.d.y");
               $data = array(
                   "cat_name"=>$cname,
                   "status"=>$status,
                   "created_at"=>$currentdate
                   
               );
               $this->load->model('Admin');
               $query= $this->Admin->addnewccategory($data);
               
               if($query){
                  redirect('dashboard/category');
               }
               else{
                   redirect('dashboard/AddNewCategory');
               }
            }
        }
        public function editcategory($id){
            $data['active']='category';
            $this->load->model('Admin');
          $data['cat'] = $this->Admin->getsinglecategory($id);
            $this->load->view('dashboard/editcategory',$data);
        }
        public function saveEditCategory(){
            {
                $this->form_validation->set_rules('cname', 'Category Name', 'required');
                $this->form_validation->set_rules('status', 'Status', 'required');
                $this->form_validation->set_error_delimiters('<div class="error" style="color: red;  padding: 1%;">', '</div>');
                
            }
            if ($this->form_validation->run() == FALSE)
		{
                    $data['active']='category';
                   $this->load->view('dashboard/addcategory',$data);
		}
		else
		{
               $id= $this->input->post('id');
               $cname= $this->input->post('cname');
               $status= $this->input->post('status');
               $this->load->helper('date');
                $currentdate = date("m.d.y");
               $data = array(
                   "cat_name"=>$cname,
                   "status"=>$status,
                   "created_at"=>$currentdate
                   
               );
               $this->load->model('Admin');
               $query= $this->Admin->updatecategory($data,$id);
               
               if($query){
                  redirect('dashboard/category');
               }
               else{
                   $data['active']='customers';
                   $this->load->model('Admin');
                    $data['cat'] = $this->Admin->getsinglecategory($id);
                      $this->load->view('dashboard/editcategory',$data);
               }
            }
        }       
        public function deletecategory($id){
            $this->load->model('Admin');
             $query = $this->Admin->deletecategory($id);
             if($query)
                    { 
                       redirect('dashboard/category');
                    }
                    else
                    {
                        redirect('dashboard/category');
                    }
        }
        public function blogs()
        {
            $data['active']='blog';
            $this->load->model('Admin');
            $data['blog'] = $this->Admin->getblog();
            $data['cat'] = $this->Admin->getcategory();
            $this->load->view('dashboard/blog',$data);
        }
        public function AddNewBlog(){
            $data['active']='category';
            $this->load->model('Admin');
            $data['cat'] = $this->Admin->getcategory();
            $this->load->view('dashboard/addblog',$data);
        }
        public function saveNewBlog(){
            {
                $this->form_validation->set_rules('btitle', 'Blog Title', 'required');
                $this->form_validation->set_rules('category', 'Blog Category', 'required');
                $this->form_validation->set_rules('pcontent', 'Blog Content', 'required');
                $this->form_validation->set_rules('status', 'Status', 'required');
                $this->form_validation->set_rules('tags', 'tags', 'required');
                $this->form_validation->set_error_delimiters('<div class="error" style="color: red;  padding: 1%;">', '</div>');
                
            }
            if ($this->form_validation->run() == FALSE)
		{
                    $data['active']='category';
                   $this->load->view('dashboard/AddNewBlog',$data);
		}
		else
		{
               $btitle= $this->input->post('btitle');
               $category= $this->input->post('category');
               $pcontent= $this->input->post('pcontent');
               $tags= $this->input->post('tags');
               $status= $this->input->post('status');
               $this->load->helper('date');
                $currentdate = date("m.d.y");
                $this->load->library('upload');
                   //upload image .............
                 $config['upload_path'] = FCPATH.'upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		

		
                $this->upload->initialize($config);  

		if ( ! $this->upload->do_upload('userfile'))
		{
                    //print_r($this->upload->display_errors());
                    $file_name = "";
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
                         $fullpath= $data['upload_data']['full_path'];
                          $file_name = $data['upload_data']['file_name'];
		}
               $data = array(
                   "user_id"=>'1',
                   "blog_heading"=>$btitle,
                   "cat_id"=>$category,
                   "blog_text"=>$pcontent,
                   "blog_image"=>$file_name,
                   "status"=>$status,
                   "created_at"=>$currentdate
                   
               );
               $this->load->model('Admin');
               $query= $this->Admin->addnewblog($data);
              $blogid = $this->db->insert_id();
              $tagg = explode(",",$tags);
              foreach($tagg as $tg){
                 
                $data2[] = array(
                   "blog_id"=>$blogid,
                   "tag_name"=>$tg,
                   "created_at"=>$currentdate
                   
               );
              }
             
               $query= $this->Admin->addnewtag($data2);
               if($query){
                  redirect('dashboard/blogs');
               }
               else{
                   redirect('dashboard/AddNewBlog');
               }
            }
        }
        public function editblog($id){
            $data['active']='blog';
            $this->load->model('Admin');
            $data['cat'] = $this->Admin->getcategory();
          $data['blog'] = $this->Admin->getsingleblog($id);
          $tags = $this->Admin->getblogtags($id);
          $tagname=array();
          foreach($tags as $tag)
          {
              $tagname[]=$tag->tag_name;
          }
          $data['tag'] = $tagname;
          $this->load->view('dashboard/editblog',$data);
        }
        public function saveEditBlog(){
            {
            $bid= $this->input->post('blogid');
                $this->form_validation->set_rules('btitle', 'Blog Title', 'required');
                $this->form_validation->set_rules('category', 'Blog Category', 'required');
                $this->form_validation->set_rules('pcontent', 'Blog Content', 'required');
                $this->form_validation->set_rules('status', 'Status', 'required');
               
                $this->form_validation->set_error_delimiters('<div class="error" style="color: red;  padding: 1%;">', '</div>');
                
            }
            if ($this->form_validation->run() == FALSE)
		{
                        redirect('editblog'.'/'.$bid);
		}
		else
		{
               $bid= $this->input->post('blogid');
               $btitle= $this->input->post('btitle');
               $imge= $this->input->post('imge');
               $category= $this->input->post('category');
               $pcontent= $this->input->post('pcontent');
               $tags= $this->input->post('tags');
               $status= $this->input->post('status');
               $this->load->helper('date');
                $currentdate = date("m.d.y");
                $this->load->library('upload');
                   //upload image .............
                 $config['upload_path'] = FCPATH.'upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		

		
                $this->upload->initialize($config);  

		if ( ! $this->upload->do_upload('userfile'))
		{
                    //print_r($this->upload->display_errors());
                    $file_name = $imge;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
                         $fullpath= $data['upload_data']['full_path'];
                          $file_name = $data['upload_data']['file_name'];
		}
               $data = array(
                   "user_id"=>$this->userID,
                   "blog_heading"=>$btitle,
                   "cat_id"=>$category,
                   "blog_text"=>$pcontent,
                   "blog_image"=>$file_name,
                   "status"=>$status,
                   "created_at"=>$currentdate
                   
               );
               $this->load->model('Admin');
               $query= $this->Admin->updateblog($data,$bid);
               $query= $this->Admin->deletetag($bid);
              $tagg = explode(",",$tags);
              foreach($tagg as $tg){
                 
                $data2[] = array(
                   "blog_id"=>$bid,
                   "tag_name"=>$tg,
                   "created_at"=>$currentdate
                   
               );
              }
               $query= $this->Admin->addnewtag($data2);
               if($query){
                  redirect('dashboard/blogs');
               }
               else{
                   redirect('dashboard/AddNewBlog');
               }
            }
        }
        public function detailblog($id){
            $data['active']='blog';
            $this->load->model('Admin');
            $data['cat'] = $this->Admin->getcategory();
          $data['blog'] = $this->Admin->getsingleblog($id);
          $data['comnt'] = $this->Admin->getblogcomment($id);
          $tags = $this->Admin->getblogtags($id);
          $tagname=array();
          foreach($tags as $tag)
          {
              $tagname[]=$tag->tag_name;
          }
          $data['tag'] = $tagname;
          $this->load->view('dashboard/detailblog',$data);
        }
        public function deleteblog($id){
            $this->load->model('Admin');
             $query = $this->Admin->deleteblog($id);
             if($query)
                    { 
                       redirect('dashboard/blogs');
                    }
                    else
                    {
                        redirect('dashboard/blogs');
                    }
        }
        public function deletecomment($cid,$bid){
            $this->load->model('Admin');
             $query = $this->Admin->deletecomment($cid);
             if($query)
                    { 
                      redirect('dashboard/detailblog'.'/'.$bid);
                    }
                    else
                    {
                        redirect('dashboard/blogs');
                    }
        }
        public function services(){
            $data['active']='services';
            $this->load->model('Admin');
            $data['services'] = $this->Admin->getservices();
            $this->load->view('dashboard/services',$data);
        }
        public function AddNewService(){
            $data['active']='services';
            $this->load->view('dashboard/addservice',$data);
        }
        public function saveNewService(){
            {
                $this->form_validation->set_rules('btitle', 'Blog Title', 'required');
                $this->form_validation->set_rules('pcontent', 'Blog Content', 'required');
                $this->form_validation->set_rules('status', 'Status', 'required');
                $this->form_validation->set_error_delimiters('<div class="error" style="color: red;  padding: 1%;">', '</div>');
                
            }
            if ($this->form_validation->run() == FALSE)
		{
                    $data['active']='category';
                   $this->load->view('dashboard/addservice',$data);
		}
		else
		{
               $btitle= $this->input->post('btitle');
               $pcontent= $this->input->post('pcontent');
               $status= $this->input->post('status');
               $this->load->helper('date');
                $currentdate = date("m.d.y");
               $data = array(
                   "servheading"=>$btitle,
                   "servtext"=>$pcontent,
                   "status"=>$status,
                   "created_at"=>$currentdate
               );
               $this->load->model('Admin');
               $query= $this->Admin->addnewservice($data);
               if($query){
                  redirect('dashboard/services');
               }
               else{
                   redirect('dashboard/AddNewService');
               }
            }
        }
        public function editservice($id){
            $data['active']='services';
            $this->load->model('Admin');
          $data['serv'] = $this->Admin->getsingleservice($id);
          $this->load->view('dashboard/editservice',$data);
        }
        public function saveEditService(){
            {
                $this->form_validation->set_rules('btitle', 'Blog Title', 'required');
                $this->form_validation->set_rules('pcontent', 'Blog Content', 'required');
                $this->form_validation->set_rules('status', 'Status', 'required');
                $this->form_validation->set_error_delimiters('<div class="error" style="color: red;  padding: 1%;">', '</div>');
                
            }
            if ($this->form_validation->run() == FALSE)
		{
                    $data['active']='category';
                   $this->load->view('dashboard/addservice',$data);
		}
		else
		{
               $btitle= $this->input->post('btitle');
               $sid= $this->input->post('sid');
               $pcontent= $this->input->post('pcontent');
               $status= $this->input->post('status');
               $this->load->helper('date');
                $currentdate = date("m.d.y");
               $data = array(
                   "servheading"=>$btitle,
                   "servtext"=>$pcontent,
                   "status"=>$status,
                   "created_at"=>$currentdate
               );
               $this->load->model('Admin');
               $query= $this->Admin->updateservice($data,$sid);
               if($query){
                  redirect('dashboard/services');
               }
               else{
                   redirect('dashboard/editservice'.'/'.$sid);
               }
            }
        }
        public function detailservice($id){
            $data['active']='services';
            $this->load->model('Admin');
            $this->load->model('Admin');
          $data['serv'] = $this->Admin->getsingleservice($id);
          $this->load->view('dashboard/detailservice',$data);
        }
        public function deleteservice($id){
            $this->load->model('Admin');
             $query = $this->Admin->deleteservice($id);
             if($query)
                    { 
                      redirect('dashboard/services');
                    }
                    else
                    {
                        redirect('dashboard/services');
                    }
        }
        public function contacts()
        {
            
        }
        public function messages()
        {
            
        }
        public function gallery()
        {
            
        }
        public function slider()
        {
            $data['active']='slider';
            $this->load->model('Admin');
            $data['slider'] = $this->Admin->getslider();
            $this->load->view('dashboard/slider',$data);
        }
         public function AddNewSlider(){
            $data['active']='slider';
            $this->load->view('dashboard/addslider',$data);
        }
        public function saveNewSlider(){
            {
                $this->form_validation->set_rules('pcontent', 'Blog Content', 'required');
                $this->form_validation->set_rules('status', 'Status', 'required');
                $this->form_validation->set_error_delimiters('<div class="error" style="color: red;  padding: 1%;">', '</div>');
                
            }
            if ($this->form_validation->run() == FALSE)
		{
                    $data['active']='category';
                   $this->load->view('dashboard/addslider',$data);
		}
		else
		{
               $pcontent= $this->input->post('pcontent');
               $status= $this->input->post('status');
                $this->load->library('upload');
                   //upload image .............
                 $config['upload_path'] = FCPATH.'upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		

		
                $this->upload->initialize($config);  

		if ( ! $this->upload->do_upload('userfile'))
		{
                    $this->session->set_userdata('msg', 'Please Upload Slider Image');
                    $this->session->mark_as_flash('msg');
                    redirect('dashboard/AddNewSlider');
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
                         $fullpath= $data['upload_data']['full_path'];
                          $file_name = $data['upload_data']['file_name'];
		}
               $data = array(
                   "text"=>$pcontent,
                   "slider"=>$file_name,
                   "status"=>$status
                   
               );
               $this->load->model('Admin');
               $query= $this->Admin->addnewslider($data);
               if($query){
                  redirect('dashboard/slider');
               }
               else{
                   redirect('dashboard/AddNewSlider');
               }
            }
        }
        public function editslider($id){
            $data['active']='slider';
            $this->load->model('Admin');
            $data['slider'] = $this->Admin->getsingleslider($id);
            $this->load->view('dashboard/editslider',$data);
        }
        public function saveEditSlider(){
            {
                $this->form_validation->set_rules('pcontent', 'Blog Content', 'required');
                $this->form_validation->set_rules('status', 'Status', 'required');
                $this->form_validation->set_error_delimiters('<div class="error" style="color: red;  padding: 1%;">', '</div>');
                
            }
            if ($this->form_validation->run() == FALSE)
		{
                    $data['active']='category';
                   $this->load->view('dashboard/addslider',$data);
		}
		else
		{
               $sid= $this->input->post('sid');
               $imge= $this->input->post('imge');
               $pcontent= $this->input->post('pcontent');
               $status= $this->input->post('status');
                $this->load->library('upload');
                   //upload image .............
                 $config['upload_path'] = FCPATH.'upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		

		
                $this->upload->initialize($config);  

		if ( ! $this->upload->do_upload('userfile'))
		{
                    $file_name=$imge;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
                         $fullpath= $data['upload_data']['full_path'];
                          $file_name = $data['upload_data']['file_name'];
		}
               $data = array(
                   "text"=>$pcontent,
                   "slider"=>$file_name,
                   "status"=>$status
                   
               );
               $this->load->model('Admin');
               $query= $this->Admin->updateslider($data,$sid);
               if($query){
                  redirect('dashboard/slider');
               }
               else{
                   redirect('dashboard/editslider').'/'.$sid;
               }
            }
        }
        public function deleteslider($id){
            $this->load->model('Admin');
             $query = $this->Admin->deleteslider($id);
             if($query)
                    { 
                      redirect('dashboard/slider');
                    }
                    else
                    {
                        redirect('dashboard/slider');
                    }
        }
        public function logo(){
            $data['active']='logo';
            $this->load->model('Admin');
            $data['logo'] = $this->Admin->getlogo();
            $this->load->view('dashboard/logo',$data);
        }
        public function savelogo(){
            
		{
                $this->load->library('upload');
                 $config['upload_path'] = FCPATH.'upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		

		
                $this->upload->initialize($config);  

		if ( ! $this->upload->do_upload('userfile'))
		{
                    redirect('dashboard/logo');
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
                         $fullpath= $data['upload_data']['full_path'];
                          $file_name = $data['upload_data']['file_name'];
		}
               $data = array(
                   "logo"=>$file_name
                   
               );
               $this->load->model('Admin');
               $this->db->truncate('tbl_logo');
               $query= $this->Admin->addnewlogo($data);
               if($query){
                  redirect('dashboard/logo');
               }
               else{
                   redirect('dashboard/logo');
               }
            }
        }
        public function customers()
        {
          $data['active']='customers';
          $this->load->model('Admin');
          $data['customer'] = $this->Admin->getcustomers();
	  $this->load->view('dashboard/customers',$data);   
        }
        public function AddNewCustomer(){
            $data['active']='customers';
            $this->load->view('dashboard/addcustomer',$data);
        }
        public function saveNewCustomer(){
            {
                $this->form_validation->set_rules('fname', 'First Name', 'required');
                $this->form_validation->set_rules('lname', 'Last Name', 'required');
                //$this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[tbl_user.email]');
               // $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('status', 'Status', 'required');
                $this->form_validation->set_error_delimiters('<div class="error" style="color: red;  padding: 1%;">', '</div>');
                
            }
            if ($this->form_validation->run() == FALSE)
		{
                
//			$this->session->set_flashdata('error', validation_errors());
//                        redirect('dashboard/AddNewCustomer');
                    $data['active']='customers';
                   $this->load->view('dashboard/addcustomer',$data);
		}
		else
		{
               $fname= $this->input->post('fname');
               $lname= $this->input->post('lname');
               $email= $this->input->post('email');
               $password= '12345';
               $status= $this->input->post('status');
               $this->load->helper('date');
                $currentdate = date("m.d.y");
               $data = array(
                   "fname"=>$fname,
                   "lname"=>$lname,
                   "email"=>$email,
                   "password"=>$password,
                   "status"=>$status,
                   "created_at"=>$currentdate
                   
               );
               $this->load->model('Admin');
               $query= $this->Admin->addnewcustomer($data);
               
               if($query){
                  redirect('dashboard/customers');
               }
               else{
                   redirect('dashboard/AddNewCustomer');
               }
            }
        }
        public function editcustomer($id){
            $data['active']='customers';
            $this->load->model('Admin');
          $data['customer'] = $this->Admin->getsinglecustomer($id);
            $this->load->view('dashboard/editcustomer',$data);
        }
        public function saveEditCustomer(){
            {
                $this->form_validation->set_rules('fname', 'First Name', 'required');
                $this->form_validation->set_rules('lname', 'Last Name', 'required');
                $this->form_validation->set_rules('email', 'Email', 'trim|required');
                $this->form_validation->set_rules('status', 'Status', 'required');
                $this->form_validation->set_error_delimiters('<div class="error" style="color: red;  padding: 1%;">', '</div>');
                
            }
            if ($this->form_validation->run() == FALSE)
		{
                    $data['active']='customers';
                   $this->load->model('Admin');
                    $data['customer'] = $this->Admin->getsinglecustomer($id);
                      $this->load->view('dashboard/editcustomer',$data);
		}
		else
		{
               $id= $this->input->post('id');
               $fname= $this->input->post('fname');
               $lname= $this->input->post('lname');
               $email= $this->input->post('email');
               $password= '12345';
               $status= $this->input->post('status');
               $this->load->helper('date');
                $currentdate = date("m.d.y");
               $data = array(
                   "fname"=>$fname,
                   "lname"=>$lname,
                   "email"=>$email,
                   "password"=>$password,
                   "status"=>$status,
                   "created_at"=>$currentdate
                   
               );
               $this->load->model('Admin');
               $query= $this->Admin->updatecustomer($data,$id);
               
               if($query){
                  redirect('dashboard/customers');
               }
               else{
                   $data['active']='customers';
                   $this->load->model('Admin');
                    $data['customer'] = $this->Admin->getsinglecustomer($id);
                      $this->load->view('dashboard/editcustomer',$data);
               }
            }
        }       
        public function deletecustomer($id){
            $this->load->model('Admin');
             $query = $this->Admin->deletecustomer($id);
             if($query)
                    { 
                       redirect('dashboard/customers');
                    }
                    else
                    {
                        redirect('dashboard/customers');
                    }
        }
        public function booking()
        {
          $data['active']='booking';
          $this->load->model('Admin');
          $data['bookings'] = $this->Admin->getbooking();
	  $this->load->view('dashboard/booking',$data);   
        }
        public function confirmBooking($id)
        {
            $data = array('bookingStatus'=>'Confirmed');
            $this->load->model('Admin');
          $data['bookings'] = $this->Admin->confirmBooking($data,$id);
          redirect('dashbboard/booking');
        }
        public function bookingDetail($id)
        {
             $data['active']='booking';
          $this->load->model('Admin');
          $data['bookingDetail'] = $this->Admin->getSingleBooking($id);
	  $this->load->view('dashboard/bookingDetail',$data);  
        }
}
