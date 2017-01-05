<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	
	public function index()
	{
            $this->load->model('userModel');
            $data['services']= $this->userModel->getServices(8,0);
		$this->load->view('services/index',$data);
	}
}
