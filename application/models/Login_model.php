<?php
class Login_model extends CI_Model {
    function _construct(){
        parent::_construct();
    }

    function login($username, $password){
        $this->db->select('username, password');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $query=$this->db->get();

        if($query->num_rows()==1){
            $result = $query->result();
            return $result;
        } else {
            return false;
        }
    }
}