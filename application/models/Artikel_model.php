<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model{	
	
	public function __construct(){
		parent::__construct();		
	}

	function index(){
		$this->db->select('*');
		$this->db->from('artikel');		
        $sql = $this->db->get();
        $result = $sql->result();
        return $result;   
    }
	
	function hapus($id){
		$_id = $this->db->get_where('artikel',['id_artikel' => $id])->row();
        $query = $this->db->delete('artikel',['id_artikel'=>$id]);
        if($query){ unlink("upload/".$_id->gambar_artikel); }        
    }
	
	function edit($id){
		$this->db->select('*');
        $this->db->where('id_artikel',$id);
        $sql = $this->db->get('artikel');        
		$result = $sql->result_object();
        return $result;	
	}
	
	function update($id, $query){
		$data = array (
						'id_category'		=> $query['id_category'],
						'judul'				=> $query['judul'],
						'penulis'			=> $query['penulis'],
						'gambar_artikel'	=> $query['gambar_artikel'],
						'konten'			=> $query['konten']                        
                       );
        $this->db->where('id_artikel',$id);
        $this->db->update('artikel', $data);	
	}
	
	function save($query, $gambar){
		$data = array(
						'id_category'		=> $query['id_category'],
						'judul' 			=> $query['judul'],
						'penulis' 			=> $query['penulis'],
						'tanggal' 			=> date('Y-m-d'),						
						'konten' 			=> $query['konten'],
						'gambar_artikel'	=> $gambar
		);		
		$hasil = $this->db->insert('artikel', $data);
		return $hasil;
	}
	
	function lihat($id){
		$this->db->select('*');	
		$this->db->from('artikel');		
        $this->db->where('id_artikel',$id);
        $sql = $this->db->get();
        $result = $sql->row_array();
        return $result;
	}	
	/*
	function data($limit,$offset){
		return $query = $this->db->get('artikel',$limit,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('artikel')->num_rows();
	}
	*/
	function get_count() {
        return $this->db->count_all('artikel');
    }
	
	public function view(){  
		$query 					= "SELECT * FROM artikel ORDER BY id_artikel DESC"; 
		$config['base_url'] 	= base_url('index.php/home/artikel');
		$config['total_rows'] 	= $this->db->query($query)->num_rows();
		$config['per_page'] 	= 6;
		$config['uri_segment'] 	= 3;
		$config['num_links'] 	= 2;
		
    // Style Pagination  
		$config['full_tag_open']   = '<ul class="pagination pagination-sm pull-right">';
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
		$data['artikel']		= $this->db->query($query)->result();		
		return $data;
	}
	
	function tampil(){  		
		$query 					= "SELECT * FROM artikel ORDER BY id_artikel DESC"; 
		$config['base_url'] 	= base_url('index.php/admin/artikel/index');
		$config['total_rows'] 	= $this->db->query($query)->num_rows();
		$config['per_page'] 	= 7;
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
		$data['artikel']		= $this->db->query($query)->result();		
		return $data;
	}
	
	function komentar($id){
		$q = $this->db->query("SELECT * FROM komentar WHERE id_artikel='$id'");
		return $q->result();
	}
	
	function recent(){
		$query	= "SELECT * FROM artikel ORDER BY date DESC LIMIT 8"; 
		$data = $this->db->query($query)->result();
		return $data;
	}
	
	function cat_count() {
        return $this->db->count_all('kategori_artikel');
    }
	
	function category(){
		$this->db->select('*');
		$this->db->from('kategori_artikel');		
        $sql = $this->db->get();
        $result = $sql->result();
        return $result;   
	}	
	
	function category_hapus($id){
        $this->db->where('id_category',$id);
        $this->db->delete('kategori_artikel'); 
    }
	
}