<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	
	public function index()
	{
            $this->load->model('userModel');
            $data['cargoType'] = $this->userModel->getCargoType();
             $data['cargolocations'] = $this->userModel->getCargolocations();
            $this->load->view('home/contactus',$data);
	}
        public function saveMessage()
        {
            if(isset($_POST['bntsubmit']))
            {
               
               
                 $this->form_validation->set_rules('email', 'Email Address', 'required');
               $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('subject', 'Subject', 'required');
                 $this->form_validation->set_rules('location', 'Location', 'required');
                $this->form_validation->set_rules('destination', 'Destination', 'required');
                $this->form_validation->set_rules('cargotype', 'Cargo Type', 'required');
                $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                if ($this->form_validation->run() == FALSE)
                {
                   
                     $this->load->model('userModel');
                        $data['cargoType'] = $this->userModel->getCargoType();
                         $data['cargolocations'] = $this->userModel->getCargolocations();
                        $this->load->view('home/contactus',$data);
                }
                else
                {
                   $name = $this->input->post('name');
                   $subject = $this->input->post('subject');
                   $email = $this->input->post('email');
                   $message = $this->input->post('message');
                   $type = $this->input->post('cargotype');
                   $location = $this->input->post('location');
                   $destination = $this->input->post('destination');
                  
                    $data = array(
                        'name'=>$name,
                        'email'=>$email,
                        'message'=>$message,
                        'subject'=>$subject,
                        'cargoType'=>$type,
                         'location'=>$location,
                         'destination'=>$destination
                    );
                    $this->load->model('userModel');
                    $query= $this->userModel->saveMessage($data);
                    redirect('contact_us');
                }
            }
            else {
                 echo'alskdjla';die();
                  $this->load->model('userModel');
            $data['cargoType'] = $this->userModel->getCargoType();
             $data['cargolocations'] = $this->userModel->getCargolocations();
            $this->load->view('home/contactus',$data);
            }
        }
        
}


