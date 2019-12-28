<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bukutamu_model extends CI_Model {        
    
    function index(){
		$this->db->select('*');
		$this->db->from('bukutamu');		
        $sql = $this->db->get();
        $result = $sql->result();
        return $result;   
    }
	
	function tampil($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$result = $this->db->get('bukutamu')->row_array(); // Tampilkan buku tamu berdasarkan ID    
		return $result; 
	}	
	
	function update($id){
		$data = array (
						'status'	=> "Sudah Dibaca"						                      
                       );
        $this->db->where('id', $id);
        $this->db->update('bukutamu', $data);	
	}
	
    function hapus($id){
        $this->db->where('id',$id);
        $this->db->delete('bukutamu'); 
    }	      
    
	function total_rows() {		
		return $this->db->where('status','Belum Dibaca')->get('bukutamu')->num_rows();
		
	}		

}