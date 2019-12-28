<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bukutamu extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){            
            redirect('index.php/login');
        }
		$this->load->model('bukutamu_model');
	}
	
	function index(){
		$data['post'] 		= $this->bukutamu_model->index();
		$data['title'] 		= "List Buku Tamu";		
		$data['content'] 	= "admin/bukutamu";		
		$this->load->view('/admin/layout/template', $data);
	}
	
	function lihat($id){
		$data['update']		= $this->bukutamu_model->update($id);
		$data['post'] 		= $this->bukutamu_model->tampil($id);		
		$data['title'] 		= "Buku Tamu";		
		$data['content'] 	= "admin/bukutamu_lihat";		
		$this->load->view('/admin/layout/template', $data);
	}
	
	function hapus(){
		$id = $this->input->post('id');		
        $this->bukutamu_model->hapus($id);
		$this->session->set_flashdata('success','<strong>Data berhasil dihapus !!</strong>');
        redirect('index.php/admin/bukutamu/index');
	}
}