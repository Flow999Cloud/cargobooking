<?php
        class Admin extends CI_Model{
            public function __construct()
    {
        parent::__construct();
    }
    public function getcustomers()
    {
        $this->db->select('*');
            $this->db->from('tbl_user');
            $query = $this->db->get();
            return $query->result();
    }
    public function addnewcustomer($data){
            $query= $this->db->insert('tbl_user',$data);
            return $query;
        }
    public function getsinglecustomer($id){
        $this->db->select('*');
         $this->db->where('user_id',$id);
            $this->db->from('tbl_user');
            $query = $this->db->get();
            return $query->row();
    }
    public function validateUser($username)
    {
          $this->db->where('email',$username);
         $query = $this->db->get('tbl_admin');
         return $query;
    }

    public function updatecustomer($data,$id)
    {
       $this->db->where('user_id',$id);
       $query =  $this->db->update('tbl_user',$data);
       return $query;
    }
    public function deletecustomer($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->delete('tbl_user'); 
        return $query;
    }
    public function getcategory()
    {
        $this->db->select('*');
            $this->db->from('tbl_blogcat');
            $query = $this->db->get();
            return $query->result();
    }
    public function addnewccategory($data){
            $query= $this->db->insert('tbl_blogcat',$data);
            return $query;
        }
    public function getsinglecategory($id){
        $this->db->select('*');
         $this->db->where('cat_id',$id);
            $this->db->from('tbl_blogcat');
            $query = $this->db->get();
            return $query->row();
    }
    public function updatecategory($data,$id)
    {
       $this->db->where('cat_id',$id);
       $query =  $this->db->update('tbl_blogcat',$data);
       return $query;
    }
    public function deletecategory($id)
    {
        $this->db->where('cat_id', $id);
        $query = $this->db->delete('tbl_blogcat');
        return $query;
    }
    public function getblog()
    {
        $this->db->select('*');
            $this->db->from('tbl_blogs');
            $query = $this->db->get();
            return $query->result();
    }
    public function addnewblog($data){
            $query= $this->db->insert('tbl_blogs',$data);
            return $query;
        }
    public function addnewtag($data){
            $query= $this->db->insert_batch('tbl_tags',$data);
            return $query;
        }
    public function getsingleblog($id){
            $this->db->select('*');
            $this->db->where('blog_id',$id);
            $this->db->from('tbl_blogs');
            $query = $this->db->get();
            return $query->row();
    }
    public function getblogtags($id)
    {
            $this->db->select('tag_name');
            $this->db->where('blog_id',$id);
            $this->db->from('tbl_tags');
            $query = $this->db->get();
            return $query->result();
    }
    public function updateblog($data,$id)
    {
       $this->db->where('blog_id',$id);
       $query =  $this->db->update('tbl_blogs',$data);
       return $query;
    }
    public function deletetag($id)
    {
        $this->db->where('blog_id', $id);
        $query = $this->db->delete('tbl_tags'); 
        return $query;
    }
    public function deleteblog($id)
    {
        $this->db->where('blog_id', $id);
        $query = $this->db->delete('tbl_blogs'); 
        return $query;
    }
    public function deletecomment($id)
    {
        $this->db->where('blogc_id', $id);
        $query = $this->db->delete('tbl_bcomment'); 
        return $query;
    }
    public function getblogcomment($id)
    {
           $this->db->select('tbl_bcomment.*, tbl_user.fname,tbl_user.lname');
        $this->db->from('tbl_bcomment');
       $this->db->join('tbl_user', 'tbl_user.user_id = tbl_bcomment.user_id');
        $this->db->where('tbl_bcomment.blog_id',$id);
            $query = $this->db->get();
            return $query->result();
    }
    public function getservices()
    {
        $this->db->select('*');
            $this->db->from('tbl_services');
            $query = $this->db->get();
            return $query->result();
    }
    public function addnewservice($data){
            $query= $this->db->insert('tbl_services',$data);
            return $query;
        }
    public function getsingleservice($id){
            $this->db->select('*');
            $this->db->where('ser_id',$id);
            $this->db->from('tbl_services');
            $query = $this->db->get();
            return $query->row();
    }
    public function updateservice($data,$id)
    {
       $this->db->where('ser_id',$id);
       $query =  $this->db->update('tbl_services',$data);
       return $query;
    }
    public function deleteservice($id)
    {
        $this->db->where('ser_id', $id);
        $query = $this->db->delete('tbl_services'); 
        return $query;
    }
    public function getlogo()
    {
        $this->db->select('*');
            $this->db->from('tbl_logo');
            $query = $this->db->get();
            return $query->row();
    }
    public function addnewlogo($data){
            $query= $this->db->insert('tbl_logo',$data);
            return $query;
        }
    public function getslider()
    {
            $query = $this->db->get('tbl_slider');
            return $query->result();
    }
    public function addnewslider($data){
            $query= $this->db->insert('tbl_slider',$data);
            return $query;
        }
    public function getsingleslider($id){
            $this->db->select('*');
            $this->db->where('slider_id',$id);
            $this->db->from('tbl_slider');
            $query = $this->db->get();
            return $query->row();
    }
    public function updateslider($data,$id)
    {
       $this->db->where('slider_id',$id);
       $query =  $this->db->update('tbl_slider',$data);
       return $query;
    }
    public function deleteslider($id)
    {
        $this->db->where('slider_id', $id);
        $query = $this->db->delete('tbl_slider'); 
        return $query;
    }
    public function getbooking()
    {
       
      
      $this->db->join('tbl_user', 'tbl_user.user_id = tbl_booking.bookingUser','left');
            $query = $this->db->get('tbl_booking');
            return $query->result();
    }
    public function getsinglebooking($id)
    {
        $this->db->where('bookingID',$id);
       $this->db->join('tbl_cargoinfo', 'tbl_cargoinfo.booking_id = tbl_booking.bookingID','left');
       $this->db->join('tbl_senderinfo', 'tbl_senderinfo.booking_id = tbl_booking.bookingID','left');
       $this->db->join('tbl_receiverinfo', 'tbl_receiverinfo.booking_id = tbl_booking.bookingID','left');
       $this->db->join('tbl_pickupinfo', 'tbl_pickupinfo.booking_id = tbl_booking.bookingID','left');
       $this->db->join('tbl_user', 'tbl_user.user_id = tbl_booking.bookingUser','left');
       $query = $this->db->get('tbl_booking');
       return $query->row();
    }
    public function confirmBooking($data,$id)
    {
        $this->db->where('bookingID',$id);
       $query= $this->db->update('tbl_booking',$data);
       return $query;
    }
 }
?>