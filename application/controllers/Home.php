<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();		
		$this->load->model(array('artikel_model','profil_model','bukutamu_model','galeri_model'));		
		
	}
	
	function index(){			
		$data['profil']		= $this->profil_model->lihat();		
		$data['title'] 		= "Kelas Inspirasi Purwakarta";
		$data['content']	= "frontend/konten";
		$this->load->view('frontend/layout/template', $data);
	}		
	
	function artikel(){				
		$data['model'] 		= $this->artikel_model->view();
		$data['profil']		= $this->profil_model->lihat();				
		$data['title'] 		= "Blog Kelas Inspirasi Purwakarta";
		$data['content']	= "frontend/artikel";
		$this->load->view('frontend/layout/template', $data);
	}
	
	function artikel_lihat($id){
		$data['profil']		= $this->profil_model->lihat();
		$data['post'] 		= $this->artikel_model->lihat($id);	
		$data['recent']		= $this->artikel_model->recent();
		$data['comment']	= $this->artikel_model->komentar($id);
		$data['title'] 		= "Kelas Inspirasi Purwakarta";
		$data['content']	= "frontend/artikel_lihat";
		$this->load->view('frontend/layout/template', $data);
	}
	
	function tambah_komentar(){				
		$id_artikel = $this->input->post('ID');
		$data = array(
					'id_artikel' 	=> $id_artikel,
					'nama' 			=> $this->input->post('nama'),
					'email' 		=> $this->input->post('email'),
					'isi' 			=> $this->input->post('isi'),	
					'tanggal' 		=> date('Y-m-d h:i:s')
				);
		$tambah = $this->db->insert('komentar',$data);				
		if($tambah){
			$this->session->set_flashdata('success','<strong>Komentar berhasil ditambahkan !!</strong>');
		} else {
			$this->session->set_flashdata('error','<strong>Komentar gagal ditambahkan !!</strong> Silahkan coba lagi.');
		}
		redirect('index.php/home/artikel_lihat/'.$id_artikel);
	}
	
	function tentang(){
		$data['profil']		= $this->profil_model->lihat();		
		$data['title'] 		= "Tentang Kelas Inspirasi Purwakarta";
		$data['content']	= "frontend/tentang";
		$this->load->view('frontend/layout/template', $data);
	}
	
	function kontak(){
		$data['profil']		= $this->profil_model->lihat();		
		$data['action'] 	= "index.php/home/bukutamu";
		$data['title'] 		= "Hubungi Kami";
		$data['content']	= "frontend/kontak";
		$this->load->view('frontend/layout/template', $data);
	}
	
	function bukutamu(){
		$query = array(
						'tanggal' 	=> date('Y-m-d'),
						'nama' 		=> $this->input->post('nama'),
						'telepon' 	=> $this->input->post('telepon'),						
						'email' 	=> $this->input->post('email'),
						'subjek' 	=> $this->input->post('subjek'),
						'pesan' 	=> $this->input->post('pesan'),
						'status' 	=> "Belum Dibaca"
						);		
		$send = $this->db->insert('bukutamu', $query);
		if($send){
			$this->session->set_flashdata('success','<strong>Pesan berhasil dikirim !!</strong>');
		} else {
			$this->session->set_flashdata('error','<strong>Pesan gagal dikirim !!</strong> Silahkan coba lagi.');
		}
		redirect('index.php/home/kontak');
	}
	
	function galeri(){
		$data['profil']		= $this->profil_model->lihat();
		$data['model']		= $this->galeri_model->tampil();
		$data['kategori']	= $this->galeri_model->kategori();		
		$data['title'] 		= "Galeri Kegiatan";
		$data['content']	= "frontend/galeri";
		$this->load->view('frontend/layout/template', $data);
	}
	
}