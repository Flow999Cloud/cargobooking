<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	
	public function index()
	{
            $this->load->model('userModel');
            $data['blogs']=  $this->userModel->getallBlogs();
            $data['recentblogs']= $this->userModel->getBlogs();
            $this->load->view('blogs/index',$data);
	}
        public function singleBlog($id)
        {
             $this->load->model('userModel');
             $data['singleBlog'] = $this->userModel->singleBlog($id);
             $data['recentblogs']= $this->userModel->getBlogs();
            $this->load->view('blogs/blog_single',$data);
        }
}
