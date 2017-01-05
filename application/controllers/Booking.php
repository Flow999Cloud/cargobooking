<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

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
            $this->load->model('userModel');
            $data['cargotype']= $this->userModel->getCargoType();
            $data['shippingMode']=$this->userModel->getShippingMode();
            $data['pakcingMode']=$this->userModel->getPackingMode();
            $this->load->view('Booking/index',$data);
	}
        public function saveBooking()
        {
             if(isset($_POST['bntsubmit']))
            {
               
               
               $this->form_validation->set_rules('smethod', 'Shipping Method', 'required');
               $this->form_validation->set_rules('cname', 'Cargo Name', 'required');
                $this->form_validation->set_rules('weight', 'Weight', 'required');
                 $this->form_validation->set_rules('weightUnit', 'Weight Unit', 'required');
                $this->form_validation->set_rules('ptype', 'Packing Type', 'required');
                $this->form_validation->set_rules('quantity', 'Quantity', 'required');
                $this->form_validation->set_rules('cargotype', 'Cargo Type', 'required');
               $this->form_validation->set_rules('insurance', 'Insurance', 'required');
                $this->form_validation->set_rules('scountry', 'Sender Country', 'required');
                 $this->form_validation->set_rules('sstate', 'Sender State', 'required');
                $this->form_validation->set_rules('scity', 'Sender City', 'required');
                $this->form_validation->set_rules('szipcode', 'Sender ZipCode', 'required');
                $this->form_validation->set_rules('senderstreet', 'Sender State', 'required');
                $this->form_validation->set_rules('sapartment', 'Sender Apartment', 'required');
               $this->form_validation->set_rules('scompany', 'Sender Company', 'required');
                $this->form_validation->set_rules('rcountry', 'Receiver Country', 'required');
                 $this->form_validation->set_rules('rstate', 'Receiver State', 'required');
                $this->form_validation->set_rules('rcity', 'Receiver City', 'required');
                $this->form_validation->set_rules('rzipcode', 'Receiver Zip code', 'required');
                $this->form_validation->set_rules('raddress', 'Receiver Address', 'required');
               $this->form_validation->set_rules('rapartment', 'Receiver Apprtment', 'required');
                $this->form_validation->set_rules('rcompany', 'Receiver Company', 'required');
                 $this->form_validation->set_rules('cntname', 'Contact Name', 'required');
                $this->form_validation->set_rules('cntphone', 'Contact Phone', 'required');
                $this->form_validation->set_rules('pickupdate', 'Pick Up Date', 'required');
                $this->form_validation->set_rules('additional', 'Additional', 'required'); 
                $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                if ($this->form_validation->run() == FALSE)
                {
                   
                    $this->load->model('userModel');
                    $data['cargotype']= $this->userModel->getCargoType();
                    $data['shippingMode']=$this->userModel->getShippingMode();
                    $data['pakcingMode']=$this->userModel->getPackingMode();
                    $this->load->view('booking/index',$data);
                }
                else
                {
                   $smethod = $this->input->post('smethod');
                   $cname = $this->input->post('cname');
                   $weight = $this->input->post('weight');
                   $weightunit = $this->input->post('weightUnit');
                   $ptype = $this->input->post('ptype');
                   $quantity = $this->input->post('quantity');
                   $cargotype = $this->input->post('cargotype');
                   $insurance = $this->input->post('insurance');
                   $scountry = $this->input->post('scountry');
                   $sstate = $this->input->post('sstate');
                   $scity = $this->input->post('scity');
                   $szipcode = $this->input->post('szipcode');
                   $senderstreet = $this->input->post('senderstreet');
                   $sapartment = $this->input->post('sapartment');
                    $scompany = $this->input->post('scompany');
                  $rcountry = $this->input->post('rcountry');
                   $rstate = $this->input->post('rstate');
                   $rcity = $this->input->post('rcity');
                   $zipcode = $this->input->post('rzipcode');
                   $raddress = $this->input->post('raddress');
                   $rapartment = $this->input->post('rapartment');
                    $rcompany = $this->input->post('rcompany');
                     $cntname = $this->input->post('cntname');
                   $cntphone = $this->input->post('cntphone');
                   $pickupdate = $this->input->post('pickupdate');
                    $additional = $this->input->post('additional');
                    $booking = array(
                            'bookingUser'=>$this->userID,
                            );
                    $this->load->model('userModel');
                    $bookingID= $this->userModel->savebooking($booking);
                    $cargoInfo = array(
                        'booking_id'=>$bookingID,
                        'shipmode'=>$smethod,
                        'cargoname'=>$cargotype,
                        'weight'=>$weight,
                        'weightunit'=>$weightunit,
                        'pakingtype'=>$ptype,
                        'quantity'=>$quantity,
                        'cargotype'=>$cargotype,
                        'insurance'=>$insurance,
                    );
                   $senderInfo = array(
                       'booking_id'=>$bookingID,
                       'scountry'=>$scountry,
                       'sstate'=>$sstate,
                       'stown'=>$scity,
                       'szipcode'=>$szipcode,
                       'sstreetaddress'=>$senderstreet,
                       'sapartment'=>$sapartment,
                       'scompanyname'=>$scompany
                       );
                   $receiverInfo = array(
                       'booking_id'=>$bookingID,
                       'rcountry'=>$rcountry,
                       'rstate'=>$rstate,
                       'rtown'=>$rcity,
                       'rzipcode'=>$zipcode,
                       'rstreet'=>$raddress,
                       'rapartment'=>$rapartment,
                       'rcompanyname'=>$rcompany
                       );
                    $pickUpInfo = array(
                        'booking_id'=>$bookingID,
                        'contactname'=>$cntname,
                        'phone'=>$cntphone,
                        'pickupdate'=>$pickupdate,
                        'details'=>$additional,
                    );
                    $this->userModel->saveBookinDetail($cargoInfo,$senderInfo,$receiverInfo,$pickUpInfo);
                    redirect('booking');
                }
            }
            else
            {
                 $this->load->model('userModel');
                    $data['cargotype']= $this->userModel->getCargoType();
                    $data['shippingMode']=$this->userModel->getShippingMode();
                    $data['pakcingMode']=$this->userModel->getPackingMode();
                    $this->load->view('booking/index',$data);
            }
        }
}
