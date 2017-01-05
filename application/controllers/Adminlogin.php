<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {

	
	public function index()
	{
		$this->load->view('admin/index');
	}
        public function validateLogin()
        {
            if(isset($_POST['login']))
            {
                $username = $this->input->post('email');
                $password = $this->input->post('password');
                
                $this->load->model('admin');
                $userdata = $this->admin->validateUser($username);
                if($userdata->num_rows()==1)
                {
                    
                     $data = $userdata->row();
                     
                     $pass1 = $this->encrypt->decode($data->password);
                     if($password==$pass1)
                     {
                       
                         $this->session->set_userdata('adminID',$data->adminID);
                         $this->session->set_userdata('userName',$data->username);
                        
                         $this->session->set_userdata('message','You are successfully logged in.');
                        $this->session->mark_as_flash('message');
                        redirect('dashboard');
                         
                         }
                         else
                         {
                              $this->session->set_userdata('message','invalid UserName or password.');
                        $this->session->mark_as_flash('message'); 
                        $this->load->view('admin/index');
                         }
                     }
                     else
                     {
                         $this->session->set_userdata('message','invalid UserName or password.');
                        $this->session->mark_as_flash('message'); 
                        $this->load->view('admin/index');
                     }
                  // $this->encrypt->decode($password);
                    
                }
                else
                {
                    $this->session->set_userdata('message','invalid UserName or password.');
                        $this->session->mark_as_flash('message'); 
                        $this->load->view('admin/index');
                }
                
            
           
            
        }
        public function resPassword()
        {
            if(isset($_POST['btnlogin']))
            {
                $username = $this->input->post('email');
                $this->load->model('adminModel');
                $userData = $this->adminModel->checkUser($username);
                if($userData->num_rows() ==1)
                {
                   $user = $userData->row();
                  $password = $this->encrypt->decode($user->Password);
                    $this->load->library('email');
              
                  $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'mail.streetexcod.com',
                'smtp_port' => 26,
                'smtp_user' => 'info@streetexcod.com',
                'smtp_pass' => 'Galadiator123',
                'mailtype'  => 'text', 
                'charset'   => 'iso-8859-1'
            );

                    $this->email->initialize($config);
                    //'info@streetexcourier.pk'
                    $this->email->from('info@streetexcod.com', 'StreetExCod');
                    $this->email->to($username);
                    $this->email->subject('Password Reset');
                    $this->email->message('We have received your password reset application. Your Password is "'.$password.'"');

                   $this->email->send();
                   redirect(site_url());
                }
                else
                {
                    $this->session->set_userdata('message','User with this email account not exist.');
                    $this->session->mark_as_flash('message'); 
                    $this->load->view('Home/resePass');
                }
            }
            else
            {
                 $this->load->view('Home/resePass');
            }
            
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect(site_url('admin'));
        }
}
