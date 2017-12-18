<?php
class Mod_statistic extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function get_statistic(){
        $this->db->join('lottery','statistics.lottery_id=lottery.lottery_id');
        $this->db->order_by('statistic_id','DESC');
        $qr =$this->db->get('statistics');
        if($qr->num_rows()==0){
            return 0;
        }else {
            return $qr->result_array();
        }
    }

    function get_lotteries(){
        $qr= $this->db->get('lottery');
        if($qr->num_rows()==0){
            return 0;
        }else{
            return $qr->result_array();
        }
    }
    function insert_statistic($data){
        $this->db->insert('statistics',$data);
    }
    function statistic_detail($id){
        $this->db->where('statistic_id',$id);
        $qr =$this->db->get('statistics');
        if($qr->num_rows()==0){
            return 0;
        }else{
            return $qr->row_array();
        }
    }
    function update_statistic($id,$data){
        $this->db->where('statistic_id',$id);
        $this->db->update('statistics',$data);
    }
    function delete_statistic($id){
        $this->db->where('statistic_id',$id);
        $this->db->delete('statistics');
    }
}