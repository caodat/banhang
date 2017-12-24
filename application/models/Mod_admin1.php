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
        return array_diff($arr, [""]);
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