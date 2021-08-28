<?php
    class Login_model extends CI_Model{
        public function cek_login(){
            $uname_user     = set_value('uname_user');
            $pass_user      = set_value('pass_user');

            $result         =$this->db->where('uname_user',$uname_user)
                                      ->where('pass_user',$pass_user)
                                      ->limit(1)
                                      ->get('tb_user');

            if($result->num_rows()>0){
                return $result->row();
            }else{
                return FALSE;
            }
        }
    }
 
?>