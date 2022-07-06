<?php
class Login_model extends CI_Model {
public $username;
public $password;

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function login($username, $password){
        $this->db->select('username', 'password');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $query=$this->db->get();

        if($query->num_rows()==1){
            $result = $query->result();
            return $result;
        }
        else{
            return false;
        }
    }
}
