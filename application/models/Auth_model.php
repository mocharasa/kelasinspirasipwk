<?php
class Auth_model extends CI_Model{
        
    function admin($username,$password){
        $query=$this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
        return $query;
    }
	 
}