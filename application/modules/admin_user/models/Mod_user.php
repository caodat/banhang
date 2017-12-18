<?php

class Mod_user extends CI_Model{
    function __construct(){
        parent::__construct();

        $this->load->database();
    }

    function get_user(){
        $query = $this->db->order_by('user_id','DESC');
        $query = $this->db->get('users');
        if($query->num_rows()==0){
        	return 0;
        }else{
        $data = $query->result_array();
        return $data;
    	}
    }

	function check_user1($username){
		$this->db->where('user_name',$username);
		$qr=$this->db->get('users');
		return $qr->num_rows();
		}

	function insert_user($data){
		$this->db->insert('users',$data);
		}

	function delete_user($id){

		$this->db->where('user_id',$id);

		$this->db->delete('users');

		}

	function user_detail($id){
		$this->db->where('user_id',$id);
		$qr=$this->db->get('users');
		$c=$qr->num_rows();
		if($c==0){
			return
			 $c;
			}else{
				return $qr->row_array();
				}
		}

	function check_update($username,$user){
		$this->db->where('user_name!=',$user);
		$this->db->where('user_name',$username);
		$qr=$this->db->get('users');
		return $c=$qr->num_rows();
		}

	function update_user($id,$data){
		$this->db->where('user_id',$id);
		$this->db->update('users',$data);

		}
}