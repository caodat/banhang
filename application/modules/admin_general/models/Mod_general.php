<?php
class Mod_general extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function get_option(){
        $query = $this->db->order_by('option_id','DESC');
        $query = $this->db->get('options');
        $data = $query->result_array();
        return $data;
    }
    function check_option_name($option){
        $this->db->where('option_name',$option);
        $qr = $this->db->get('options');
        return $qr->num_rows();
        
    }
    function insert_option($data){
        $this->db->insert('options',$data);
    }
    function delete_option($id){
        $this->db->where('option_id',$id);
        $this->db->delete('options');
    }
    function update_option($id, $data){
        $this->db->where('option_id',$id);
        $this->db->update('options',$data);
    }
    function option_detail($id){
        $qr = $this->db->where('option_id',$id);
        $qr =$this->db->get('options');
        if($qr->num_rows()==0){
            return 0;
        }else{
            return $qr->row_array();
        }
    }
    
}