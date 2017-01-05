<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	
	public function index()
	{
		$this->load->view('user/index');
	}
        public function register()
	{
		$this->load->view('user/register');
	}
         public function reset()
	{
		$this->load->view('user/reset');
	}
        public function saveUser()
        {
            if(isset($_POST['bntsubmit']))
            {
               
               
                 $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[tbl_user.email]');
               $this->form_validation->set_rules('pass1', 'Password', 'required');
                $this->form_validation->set_rules('pass2', 'Password Confirmation', 'required|matches[pass1]');
                 $this->form_validation->set_rules('firstname', 'First Name', 'required');
                $this->form_validation->set_rules('lastname', 'Last Name', 'required');
                $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('user/register');
                }
                else
                {
                   $fname = $this->input->post('firstname');
                   $lname = $this->input->post('lastname');
                   $email = $this->input->post('email');
                   $password = $this->encrypt->encode($this->input->post('pass1'));
                    $data = array(
                        'fname'=>$fname,
                        'lname'=>$lname,
                        'email'=>$email,
                        'password'=>$password,
                        'status'=>1
                    );
                    $this->load->model('userModel');
                    $query= $this->userModel->saveUser($data);
                    redirect('account');
                }
            }
            else {
               $this->load->view('user/register');
            }
        }
        public function login()
        {
           if(isset($_POST['bntsubmit']))
            {
               
               
               $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
               $this->form_validation->set_rules('pass1', 'Password', 'required');
               $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('user/index');
                }
                else
                {
                    $this->load->model('userModel');
                   $email = $this->input->post('email');
                   $password = $this->input->post('pass1');
                   $checkUser = $this->userModel->checkuser($email);
                   if($checkUser->num_rows() ==1)
                   {
                       $userData = $checkUser->row();
                        $userPass = $this->encrypt->decode($userData->password);
                      
                       if($password===$userPass)
                       {
                           $this->session->set_userdata('name',$userData->fname);
                           $this->session->set_userdata('userID',$userData->user_id);
                           redirect(site_url());
                       }
                       else
                       {
                           
                            $this->load->view('user/index');
                       }
                   }
                else {
                     $this->load->view('user/index');
                }
                }
            }
            else
            {
                 $this->load->view('user/index');
            }
        }
        public function logout()
        {
               $this->session->sess_destroy();
            redirect(site_url());
        }
        
}


