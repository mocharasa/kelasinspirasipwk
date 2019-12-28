<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_model extends CI_Model{	
	
	public function __construct(){
		parent::__construct();		
	}	
	
	function view(){  		
		$query 					= "SELECT * FROM galeri JOIN kategori ON kategori.id_kategori=galeri.id_kategori ORDER BY id DESC"; 
		$config['base_url'] 	= base_url('index.php/admin/galeri/index');
		$config['total_rows'] 	= $this->db->query($query)->num_rows();
		$config['per_page'] 	= 12;
		$config['uri_segment'] 	= 4;
		$config['num_links'] 	= 2;
		
    // Style Pagination  
		$config['full_tag_open']   = '<ul class="pagination pagination-sm pull-right push-down-20 push-up-20">';
        $config['full_tag_close']  = '</ul>';        
        $config['first_link']      = 'First'; 
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';        
        $config['last_link']       = 'Last'; 
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']  = '</li>';        
        $config['next_link']       = '<span class="glyphicon glyphicon-chevron-right"></span>'; 
        $config['next_tag_open']   = '<li>';
        $config['next_tag_close']  = '</li>';       
        $config['prev_link']       = '<span class="glyphicon glyphicon-chevron-left"></span>'; 
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';        
        $config['cur_tag_open']    = '<li class="active"><a href="#">';
        $config['cur_tag_close']   = '</a></li>';         
        $config['num_tag_open']    = '<li>';
        $config['num_tag_close']   = '</li>';      
		
    // Set konfigurasi paginationnya    
		$this->pagination->initialize($config); 
		$page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
		$query .= " LIMIT ".$page.", ".$config['per_page'];
    
		$data['limit'] 			= $config['per_page'];
		$data['total_rows'] 	= $config['total_rows'];
		$data['pagination'] 	= $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
		$data['galeri']			= $this->db->query($query)->result();		
		return $data;
	}
	
	function tampil(){  
		$query 					= "SELECT * FROM galeri JOIN kategori ON kategori.id_kategori=galeri.id_kategori ORDER BY id DESC"; 
		$config['base_url'] 	= base_url('index.php/home/galeri');
		$config['total_rows'] 	= $this->db->query($query)->num_rows();
		$config['per_page'] 	= 12;
		$config['uri_segment'] 	= 3;
		$config['num_links'] 	= 2;
		
    // Style Pagination  
		$config['full_tag_open']   = '<ul class="pagination pagination-sm pull-right push-down-20 push-up-20">';
        $config['full_tag_close']  = '</ul>';        
        $config['first_link']      = 'First'; 
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';        
        $config['last_link']       = 'Last'; 
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']  = '</li>';        
        $config['next_link']       = '<span class="glyphicon glyphicon-chevron-right"></span>'; 
        $config['next_tag_open']   = '<li>';
        $config['next_tag_close']  = '</li>';       
        $config['prev_link']       = '<span class="glyphicon glyphicon-chevron-left"></span>'; 
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';        
        $config['cur_tag_open']    = '<li class="active"><a href="#">';
        $config['cur_tag_close']   = '</a></li>';         
        $config['num_tag_open']    = '<li>';
        $config['num_tag_close']   = '</li>';      
		
    // Set konfigurasi paginationnya    
		$this->pagination->initialize($config); 
		$page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
		$query .= " LIMIT ".$page.", ".$config['per_page'];
    
		$data['limit'] 			= $config['per_page'];
		$data['total_rows'] 	= $config['total_rows'];
		$data['pagination'] 	= $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
		$data['galeri']			= $this->db->query($query)->result();		
		return $data;
	}
	/*
	function remove($id){
		$_id = $this->db->get_where('galeri',['id' => $id])->row();
        $query = $this->db->delete('galeri',['id'=>$id]);
        if($query){ unlink("upload/galeri/".$_id->nama); }        
    }
	*/
	function kategori(){
		$this->db->select('*');
		$this->db->from('kategori');		
        $sql = $this->db->get();
        $result = $sql->result();
        return $result; 
	}
	
	function hapuskategori($id){
        $this->db->where('id_kategori',$id);
        $this->db->delete('kategori'); 
    }
	
	function edit($id){
		$this->db->select('*');
        $this->db->where('id',$id);
        $sql = $this->db->get('galeri');        
		$result = $sql->result_object();
        return $result;	
	}
	
	function update($id, $query){
		$data = array (						
						'nama' 		=> $query['nama'],
						'ukuran' 	=> $query['ukuran'],
						'jenis' 	=> $query['jenis'],
						'kategori' 	=> $query['kategori'],
						'deskripsi' => $query['deskripsi'],
                       );
        $this->db->where('id',$id);
        $this->db->update('galeri', $data);	
	}
	
	function save($query){
		$data = array(
						'id'			=> $query['id'],
						'tanggal' 		=> date('Y-m-d'),
						'nama' 			=> $query['nama'],
						'ukuran' 		=> $query['ukuran'],
						'jenis' 		=> $query['jenis'],
						'id_kategori' 	=> $query['id_kategori'],
						'deskripsi' 	=> $query['deskripsi']
						);		
		$hasil = $this->db->insert('galeri', $data);
		return $hasil;
	}
	
	function lihat($id){
		$this->db->select('*');	
		$this->db->from('galeri');		
        $this->db->where('id',$id);
        $sql = $this->db->get();
        $result = $sql->row_array();
        return $result;
	}	
		
	function get_count() {
        return $this->db->count_all('galeri');
    }	
			
	// DELETE
    function hapus($data,$img){			
		if (!empty($data)) {
			
			$this->db->where_in('id', $data);			
			$query = $this->db->delete('galeri');										
			
			return $query?true:false;
		}                
    }
	
	function remove($img){		
		$path = 'upload/galeri/';
		unlink($path.$img); 
	}		

	function deleteFiles($img){
		$path = $_SERVER['DOCUMENT_ROOT'].'/upload/galeri/';
		$files = glob($path.$img); 					// get all file names
		foreach($files as $file){ 					// iterate files
			if(is_file($file))
			unlink($file); 							// delete file        
    }   
}
}