<?php
class UserModel extends CI_Model
{
    
    public function saveUser($data)
    {
        $query = $this->db->insert('tbl_user',$data);
        return $query;
    }
    public function checkuser($email)
    {
        $this->db->where('email',$email);
        $query = $this->db->get('tbl_user');
        return $query;
    }
    public function getCargoType()
    {
        $this->db->where('status','1');
        $query = $this->db->get('tbl_cargoType');
        return $query->result(); 
    }
    public function getServices($limit,$start)
    {
             $this->db->select('*');
             $this->db->limit($limit,$start);
            $this->db->from('tbl_services');
            $query = $this->db->get();
            return $query->result();
    }
    public function getBlogs()
    {
        $this->db->select('*');
             $this->db->limit(3,0);
             $this->db->order_by('blog_id','DESC');
            $this->db->from('tbl_blogs');
            $query = $this->db->get();
            return $query->result();
    }
    public function getallBlogs()
    {
        $this->db->select('*');
             //$this->db->limit(3,0);
             $this->db->order_by('blog_id','DESC');
            $this->db->from('tbl_blogs');
            $query = $this->db->get();
            return $query->result();
    }
    public function customerBookings($userID)
    {
        $this->db->where('bookingUser',$userID);
        $this->db->join('tbl_senderinfo','tbl_senderinfo.booking_id=tbl_booking.bookingID');
        $query = $this->db->get('tbl_booking');
        return $query->result();
    }

    public function singleBlog($id)
    {
      $this->db->where('blog_id',$id);
        $query = $this->db->get('tbl_blogs');
       return $query->row();  
    }

    public function getCargolocations()
    {
        $this->db->where('status','1');
        $query = $this->db->get('cargoLocation');
        $query->num_rows();
        
        return $query->result(); 
    }
    public function saveMessage($data)
    {
     $query = $this->db->insert('tbl_contactus',$data);
        return $query;   
    }
    public function getShippingMode()
    {
         $this->db->where('status','1');
        $query = $this->db->get('shippingmode');
       return $query->result(); 
    }
    public function getPackingMode()
    {
        $this->db->where('status','1');
        $query = $this->db->get('pakcingtype');
       return $query->result(); 
    }
    public function savebooking($booking)
    {
         $query = $this->db->insert('tbl_booking',$booking);
        return $this->db->insert_id();
    }
    public function saveBookinDetail($cargoInfo,$senderInfo,$receiverInfo,$pickUpInfo)
    {
        $this->db->insert('tbl_cargoinfo',$cargoInfo);
        $this->db->insert('tbl_receiverinfo',$receiverInfo);
        $this->db->insert('tbl_senderinfo',$senderInfo);
        $this->db->insert('tbl_pickupinfo',$pickUpInfo);
        return true;
    }
    
    
}
?>

