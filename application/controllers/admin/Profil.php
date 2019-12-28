<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){            
            redirect('index.php/login');
        }
		$this->load->model('profil_model');
	}
	
	function tentang(){
		$data['post'] 		= $this->profil_model->tentang();
		$data['action']		= "index.php/admin/profil/tentang_update/1";
		$data['title'] 		= "Profil Kelas Inspirasi";		
		$data['content'] 	= "admin/tentang";		
		$this->load->view('/admin/layout/template', $data);
	}
	
	function tentang_update(){
		$query = array('tentang' => $this->input->post('tentang'));	
		$this->session->set_flashdata('success','<strong>Data berhasil disimpan !!</strong>');
		$sql = $this->profil_model->tentang_update($query);
		redirect('index.php/admin/profil/tentang');
	}
	
	function kontak(){
		$data['post'] 		= $this->profil_model->kontak();
		$data['action']		= "index.php/admin/profil/kontak_update/1";
		$data['title'] 		= "Hubungi Kami";		
		$data['content'] 	= "admin/kontak";		
		$this->load->view('/admin/layout/template', $data);
	}
	
	function kontak_update(){
		$query = array(
						'telepon' 	=> $this->input->post('telepon'),
						'whatsapp' 	=> $this->input->post('whatsapp'),
						'email' 	=> $this->input->post('email'),
						'instagram'	=> $this->input->post('instagram'),
						'facebook' 	=> $this->input->post('facebook'),
						'twitter' 	=> $this->input->post('twitter'),
						'youtube' 	=> $this->input->post('youtube'),
						'alamat' 	=> $this->input->post('alamat')
						);	
		$this->session->set_flashdata('success','<strong>Data berhasil disimpan !!</strong>');
		$sql = $this->profil_model->kontak_update($query);
		redirect('index.php/admin/profil/kontak');
	}
}