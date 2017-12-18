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

    // Function get_option ===================
    function get_option(){
        $qr = $this->db->get('options');
        $result = $qr->result_array();
        $option =array();
        foreach($result as $op){
            $option[$op['option_name']] = $op['option_value'];
        }
        return $option;

    }
// Kiểm tra học viên đăng nhập===========================================================================
	function hocvien_login(){
		if($this->session->userdata('mahocvien')==""){
			redirect(base_url().'hocvien/login');
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
// Lấy id học viên dựa vào số cmt =======================================================================
	function get_id($cmt){
		$this->db->where('socmt',$cmt);
		$qr=$this->db->get('hocvien');
		$count =$qr->num_rows();
		if($count>0){
		$data=$qr->result_array();
		return $data;
		}else 
		{
			return 0;
			}
		}
	function get_date($date){
		$d=explode('.',$date);
		$i=1;
		foreach($d as $d1){
			$c[$i] = $d1;
			$i++;
			}
		return $c[3].'-'.$c[2].'-'.$c[1];
		}
		function test(){
		    $d='1';
            $d1='1010';
            $c=$d xor $d1;
            return $c;
        }
        function get_date1($data){
		    $c = mdate('%d/%m/%Y',$data);
		    return $c;
        }

    function custom_date($date){
        $d=explode('-',$date);
        $i=1;
        foreach($d as $d1){
            $c[$i] = $d1;
            $i++;
            }
        return $c[3].'-'.$c[2].'-'.$c[1];
    }
    // chuyá»ƒn cÃ³ dáº¥u thÃ nh khÃ´ng dáº¥u

    function cutstring($str){
            $d=explode(base_url().'uploads/files/',$str);
            foreach ($d as $str){
                $cut =$str;
            }
            echo $cut;
    }
    function changeTitle($str){
    
        $str=trim($str);
        if ($str=="") return "";
        $str =str_replace('"','',$str);
        $str =str_replace("'",'',$str);
        if(!$str) return false;
        $unicode = array(
            'a'=>'Ã¡|Ã |áº£|Ã£|áº¡|Äƒ|áº¯|áº±|áº³|áºµ|áº·|Ã¢|áº¥|áº§|áº©|áº«|áº­',
            'A'=>'Ã�|Ã€|áº¢|Ãƒ|áº |Ä‚|áº®|áº°|áº²|áº´|áº¶|Ã‚|áº¤|áº¦|áº¨|áºª|áº¬',
            'd'=>'Ä‘',
            'D'=>'Ä�',
            'e'=>'Ã©|Ã¨|áº»|áº½|áº¹|Ãª|áº¿|á»�|á»ƒ|á»…|á»‡',
            'E'=>'Ã‰|Ãˆ|áºº|áº¼|áº¸|ÃŠ|áº¾|á»€|á»‚|á»„|á»†',
            'i'=>'Ã­|Ã¬|á»‰|Ä©|á»‹',
            'I'=>'Ã�|ÃŒ|á»ˆ|Ä¨|á»Š',
            'o'=>'Ã³|Ã²|á»�|Ãµ|á»�|Ã´|á»‘|á»“|á»•|á»—|á»™|Æ¡|á»›|á»�|á»Ÿ|á»¡|á»£',
            'O'=>'Ã“|Ã’|á»Ž|Ã•|á»Œ|Ã”|á»�|á»’|á»”|á»–|á»˜|Æ |á»š|á»œ|á»ž|á» |á»¢',
            'u'=>'Ãº|Ã¹|á»§|Å©|á»¥|Æ°|á»©|á»«|á»­|á»¯|á»±',
            'U'=>'Ãš|Ã™|á»¦|Å¨|á»¤|Æ¯|á»¨|á»ª|á»¬|á»®|á»°',
            'y'=>'Ã½|á»³|á»·|á»¹|á»µ',
            'Y'=>'Ã�|á»²|á»¶|á»¸|á»´'
        );
        foreach($unicode as $khongdau=>$codau) {
            $arr=explode("|",$codau);
            $str = str_replace($arr,$khongdau,$str);
        }
        // $str = stripUnicode($str);
        $str = mb_convert_case($str,MB_LOWER_TITLE,'utf-8');
         
        // MB_CASE_UPPER / MB_CASE_TITLE / MB_CASE_LOWER
        $str = str_replace(' ','-',$str);
        return $str;
    }
    function count_user(){
        $qr=$this->db->get('users');
        return $qr->num_rows();
    }
}