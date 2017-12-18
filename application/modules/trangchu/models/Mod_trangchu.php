<?php

class Mod_trangchu extends CI_Model{

    function __construct(){

        parent::__construct();

        $this->load->database();

    }
    function get_lotteries(){
        $this->db->where('lottery_show',1);
        $this->db->order_by('lottery_id','DESC');
        $qr = $this->db->get('lottery');
        if($qr->num_rows()==0){
            return 0;
        }else{
            return $qr->result_array();
        }
    }
    function get_statistic($id){
        $this->db->where('lottery_id',$id);
        $this->db->where('statistic_show',1);
        $this->db->order_by('statistic_date','DESC');
        $this->db->limit(20,0);
        $qr = $this->db->get('statistics');
        if($qr->num_rows()==0){
            return 0;
        }else {
            return $qr->result_array();
        }

    }
    


}