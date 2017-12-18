<?php
class Mod_category extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function get_category(){
        $this->db->order_by('category_id','DESC');
        $qr =$this->db->get('category');
        if($qr->num_rows()==0){
            return 0;
        }else {
            return $qr->result_array();
        }
    }

    function get_category_update($id){
        $this->db->order_by('category_id','DESC');
        $this->db->where("category_id !=",$id);
        $qr =$this->db->get('category');
        if($qr->num_rows()==0){
            return 0;
        }else {
            return $qr->result_array();
        }
    }

    function insert_category($data){
        $this->db->insert('category',$data);
    }
    function category_detail($id){
        $this->db->where('category_id',$id);
        $qr =$this->db->get('category');
        if($qr->num_rows()==0){
            return 0;
        }else{
            return $qr->row_array();
        }
    }
    function update_category($id,$data){
        $this->db->where('category_id',$id);
        $this->db->update('category',$data);
    }
    function delete_category($id){
        $this->db->where('category_id',$id);
        $this->db->delete('category');
    }
}