<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
            $this->load->model('userModel');
                $data['cargoType'] = $this->userModel->getCargoType();
                $data['cargolocations'] = $this->userModel->getCargolocations();
                $data['services']= $this->userModel->getServices(6,0);
                $data['blogs']=  $this->userModel->getBlogs();
		$this->load->view('home/index',$data);
	}
}
