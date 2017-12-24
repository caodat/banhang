<?php
class Mod_product extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function get_product(){
        $this->db->order_by('product_id','DESC');
        $qr =$this->db->get('products');
        if($qr->num_rows()==0){
            return 0;
        }else {
            return $qr->result_array();
        }
    }

    function get_list_category(){
        $qr= $this->db->get('category');
        if($qr->num_rows()==0){
            return 0;
        }else{
            return $qr->result_array();
        }
    }
    function insert_product($data){
        $this->db->insert('products',$data);
    }
    function product_detail($id){
        $this->db->where('product_id',$id);
        $qr =$this->db->get('products');
        if($qr->num_rows()==0){
            return 0;
        }else{
            return $qr->row_array();
        }
    }
    function update_product($id,$data){
        $this->db->where('product_id',$id);
        $this->db->update('products',$data);
    }
    function delete_product($id){
        $this->db->where('product_id',$id);
        $this->db->delete('products');
    }
}