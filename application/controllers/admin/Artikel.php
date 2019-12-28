<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){            
            redirect('index.php/login');
        }
		$this->load->model('artikel_model');
	}
	
	function index(){
		$data['post'] 		= $this->artikel_model->tampil();
		$data['jml_category']	= $this->artikel_model->cat_count();
		$data['category']	= $this->artikel_model->category();
		$data['title'] 		= "Artikel";		
		$data['content'] 	= "admin/artikel";
		$this->load->view('admin/layout/template', $data);
	}
	
	function lihat($id){
		$data['post'] 		= $this->artikel_model->lihat($id);        	              	
		$data['komentar']	= $this->artikel_model->komentar($id);
		$data['title'] 		= "Lihat Artikel";		
		$data['content'] 	= "admin/artikel_lihat";
        $this->load->view('admin/layout/template', $data);
	}
	
	function tambah(){				
		$data['action']		= "index.php/admin/artikel/insert";
		$data['title'] 		= "Tambah Artikel";		
		$data['content'] 	= "admin/artikel_tambah";
		$this->load->view('admin/layout/template', $data);
	}
	
	function insert(){
		$config['upload_path']		= './upload/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  		= '2048';
		$config['overwrite']		= TRUE;				
		$this->upload->initialize($config);
		if(!empty($_FILES['gambar_artikel']['name'])){
            if ($this->upload->do_upload('gambar_artikel')){
                $gbr = $this->upload->data();                
                $gambar=$gbr['file_name'];
                $query = array(
								'id_category'		=> $this->input->post('id_category'),
								'judul' 			=> $this->input->post('judul'),
								'penulis' 			=> $this->input->post('penulis'),
								'tanggal' 			=> date('Y-m-d'),						
								'konten' 			=> $this->input->post('konten')
								);	
                $this->artikel_model->save($query,$gambar);                
            }                      
        }else{
			$query = array(
								'id_category'		=> $this->input->post('id_category'),
								'judul' 			=> $this->input->post('judul'),
								'penulis' 			=> $this->input->post('penulis'),
								'tanggal' 			=> date('Y-m-d'),						
								'konten' 			=> $this->input->post('konten')
								);	
            $this->db->insert('artikel', $query);
			redirect('index.php/admin/artikel/index');
        }
		$this->session->set_flashdata('success','<strong>Artikel berhasil ditambahkan !!</strong>');
		redirect('index.php/admin/artikel/index');
	}		
	
	function edit($id){
		$data['post'] 		= $this->artikel_model->edit($id);
		$data['action']		= 'index.php/admin/artikel/update/'.$id;
		$data['title'] 		= 'Edit Artikel';		
		$data['content'] 	= 'admin/artikel_edit';		
		$this->load->view('/admin/layout/template', $data);
	}
	
	function update($id){
		$config['upload_path']		= './upload/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size']  		= '2048';
		$config['overwrite']		= TRUE;		
		$this->upload->initialize($config);
		if (!empty($_FILES['gambar_artikel']['name'])) {
			if ($this->upload->do_upload('gambar_artikel')){
                $gbr = $this->upload->data();                
                $gambar=$gbr['file_name'];			
				$query = array(
							'id_category'		=> $this->input->post('id_category'),
							'judul' 			=> $this->input->post('judul'),
							'penulis' 			=> $this->input->post('penulis'),
							'tanggal' 			=> date('Y-m-d'),						
							'gambar_artikel'	=> $gambar,
							'konten' 			=> $this->input->post('konten')
							);	
				$this->artikel_model->update($id,$query);
			}
		} else {						
            $query = array(
							'id_category'		=> $this->input->post('id_category'),
							'judul' 			=> $this->input->post('judul'),
							'penulis' 			=> $this->input->post('penulis'),							
							'gambar_artikel'	=> $this->input->post('old_image'),							
							'konten' 			=> $this->input->post('konten')
							);	
            $this->artikel_model->update($id,$query);
		}
		$this->session->set_flashdata('success','<strong>Artikel berhasil disimpan !!</strong>');
		redirect('index.php/admin/artikel/index');
	}	
	
	function hapus(){		 
		$id = $this->input->post('id');
		$this->artikel_model->hapus($id);
		$this->session->set_flashdata('success','<strong>Artikel berhasil dihapus !!</strong>');
		redirect('index.php/admin/artikel/index');
	}
	
	function category(){		
		$data['action']		= "index.php/admin/artikel/category_tambah";
		$data['title'] 		= "Tambah Kategori";		
		$data['content'] 	= "admin/artikel_category";		
		$this->load->view('/admin/layout/template', $data);
	}
	
	function category_tambah(){
		$category = $this->input->post('category');
		$data = array (
						'category' => $category
						);
		$this->db->insert('kategori_artikel', $data);
		$this->session->set_flashdata('success','<strong>Kategori berhasil ditambahkan !!</strong>');
		redirect('index.php/admin/artikel/index');
	}

	function category_hapus(){
		$id = $this->input->post('id');		
		$cek = $this->db->query("SELECT * FROM artikel WHERE id_category='$id'");	
		if($cek->num_rows() > 0){
			$this->session->set_flashdata('error','<strong>Tidak Bisa Dihapus !!</strong> <br/>Kategori masih menyimpan artikel. Silahkan hapus artikel terlebih dahulu.');
			redirect('index.php/admin/artikel/index');
		} else {
			$this->artikel_model->category_hapus($id);			
		}
		$this->session->set_flashdata('success','<strong>Kategori berhasil dihapus !!</strong>');
        redirect('index.php/admin/artikel/index');
	}
}