<?php
class Mod_admin extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
   
    function check_user($username,$password){
       
        $this->db->where('user_name',$username);
        $this->db->where('user_pass',$password);
        $query = $this->db->get('users');
        return $count = $query->num_rows();
        if($count > 0){
            $data = $query->row_array();
            return $data;
        }
        else {
            return $count;
        }
    }
}