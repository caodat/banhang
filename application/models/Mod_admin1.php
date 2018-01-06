<?php
class Mod_admin1 extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
// Kiểm tra sempai đăng nhập == == ====================================== =============================
    function check_login(){
        if($this->session->userdata('user_sess')==""){
            redirect(base_url().'admin/login');
        }
    }
    function user($user,$pass){
        $this->db->where('user_name',$user);
        $this->db->where('user_pass',$pass);
        $qr =$this->db->get('users');
        if($qr->num_rows()==0){
            return 0;
        }else {
            return $qr->row_array();
        }
    }
	
    function cutString($str){
        $arr=explode(',',$str);
        unset($arr[0]);
        return array_diff($arr, [""]);
    }
    function getCategoryInMenu(){
        $this->db->where('category_in_menu',1);
        $qr = $this->db->get('category');
        if($qr->num_rows() == 0){
            return 0;
        }else{
            return $qr->result_array();
        }
    }

    function getProductNew(){
        $this->db->limit(5);
        $this->db->order_by('product_id','DESC');
        $qr = $this->db->get("products");
        if($qr->num_rows() == 0){
            return 0;
        }else{
            return $qr->result_array();
        }
    }

    function getProductOld(){

        $this->db->limit(5);
        $qr = $this->db->get("products");
        if($qr->num_rows() == 0){
            return 0;
        }else{
            return $qr->result_array();
        }
    }
    function count_user(){
        $qr=$this->db->get('users');
        return $qr->num_rows();
    }
}