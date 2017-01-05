<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	private $userID =null;
     public function __construct()
       {
            parent::__construct();
        if(!$this->session->userdata('userID'))
        {
             $this->session->sess_destroy();
            redirect('account');
        }
        else
        {
            $this->userID= $this->session->userdata('userID');
        }
       
        
           
       }
       public function index()
       {
           
       }
       public function dashboard()
       {
           $this->load->model('userModel');
           $data['bookings']= $this->userModel->customerBookings($this->userID);
           $this->load->view('user/dashboard',$data);
       }
}