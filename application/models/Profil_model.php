<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_model extends CI_Model {        
    
	function tentang(){
		$this->db->select('tentang');
		$this->db->where('id', 1);
		$sql = $this->db->get('profil');        
		$result = $sql->result_object();
		return $result;
	}	
	
	function tentang_update($query){
		$data = array('tentang' => $query['tentang']);	
		$this->db->where('id', 1);
		$this->db->update('profil', $data);
	}
	
    function kontak(){
		$this->db->select('*');
		$this->db->where('id', 1);
		$sql = $this->db->get('profil');        
		$result = $sql->result_object();
		return $result;
	}		         
	
	function kontak_update($query){
		$data = array(
						'telepon' 	=> $query['telepon'],
						'whatsapp' 	=> $query['whatsapp'],
						'email' 	=> $query['email'],
						'instagram' => $query['instagram'],
						'facebook' 	=> $query['facebook'],
						'twitter' 	=> $query['twitter'],
						'youtube' 	=> $query['youtube'],
						'alamat' 	=> $query['alamat']
						);	
		$this->db->where('id', 1);
		$this->db->update('profil', $data);
	}
	
	function lihat(){
		$this->db->select('*');	
		$this->db->from('profil');		
        $this->db->where('id',1);
        $sql = $this->db->get();
        $result = $sql->row_array();
        return $result;
	}
	
}