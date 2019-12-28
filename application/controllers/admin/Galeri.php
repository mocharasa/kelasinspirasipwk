<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){            
            redirect('index.php/login');
        }
		$this->load->model(array('galeri_model'));
	}
	
	function index(){
		$data['model']		= $this->galeri_model->view();
		$data['kategori']	= $this->galeri_model->kategori();
		$data['jml_foto']	= $this->galeri_model->get_count();		
		$data['action'] 	= "index.php/admin/galeri/hapus";
		$data['title'] 		= "Galeri";		
		$data['content'] 	= "admin/galeri";		
		$this->load->view('/admin/layout/template', $data);
	}		
	
	function unggah(){		
		$data['action']		= "index.php/admin/galeri/add";
		$data['title'] 		= "Unggah Foto";		
		$data['content'] 	= "admin/galeri_upload";		
		$this->load->view('/admin/layout/template', $data);
	}
	
	function kategori(){		
		$data['action']		= "index.php/admin/galeri/kategori_add";
		$data['title'] 		= "Tambah Kategori";		
		$data['content'] 	= "admin/galeri_kategori";		
		$this->load->view('/admin/layout/template', $data);
	}
	
	function kategori_add(){
		$kategori = $this->input->post('kategori');
		$data = array (
						'kategori' => $kategori
						);
		$this->db->insert('kategori', $data);
		$this->session->set_flashdata('success','<strong>Kategori berhasil ditambahkan !!</strong>');
		redirect('index.php/admin/galeri/index');
	}
	
	function kategori_hapus($id){
		$cek = $this->db->query("SELECT * FROM galeri WHERE id_kategori='$id'");	
		if($cek->num_rows() > 0){
			$this->session->set_flashdata('error','<strong>Tidak Bisa Dihapus !!</strong> <br/>Kategori masih menyimpan gambar. Silahkan hapus gambar terlebih dahulu.');
			redirect('index.php/admin/galeri/index');
		} else {
			$this->galeri_model->hapuskategori($id);			
		}
		$this->session->set_flashdata('success','<strong>Kategori berhasil dihapus !!</strong>');
        redirect('index.php/admin/galeri/index');
	}
	
	function add(){
		$uniq = uniqid();
		$config['upload_path']		= './upload/galeri/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp';
		$config['max_size']  		= '2048';
		$config['file_name']		= $uniq;
		$config['overwrite']		= TRUE;				
		$config['remove_spaces']	= TRUE;
		$this->upload->initialize($config);
		if(!empty($_FILES['gambar']['name'])){
            if ($this->upload->do_upload('gambar')){
                $gbr 		= $this->upload->data();  
				$id			= $uniq;
                $gambar 	= $gbr['file_name'];
				$size 		= $gbr['file_size'];
				$type 		= $gbr['file_type'];
                $query = array(	
								'id'		=> $id,
								'tanggal' 	=> date('Y-m-d'),
								'nama' 		=> $gambar,
								'ukuran' 	=> $size,
								'jenis' 	=> $type,
								'id_kategori' 	=> $this->input->post('id_kategori'),
								'deskripsi' => $this->input->post('deskripsi')
								);	
                $this->galeri_model->save($query);                
            }                      
        }else{
			$this->session->set_flashdata('error','<strong>Gambar gagal diunggah !!</strong>');
        }
		$this->session->set_flashdata('success','<strong>Gambar berhasil ditambahkan !!</strong>');
		redirect('index.php/admin/galeri/index');
	}	
	
	function hapus(){	
		$data = $this->input->post('delete', TRUE);		        
		$img = $this->input->post('img', TRUE);		
		$hapus = $this->galeri_model->hapus($data,$img);
		/*
		$path = $_SERVER['DOCUMENT_ROOT'].'/upload/galeri/';
		$files = glob($path.'*'); 					// get all file names
		$gambar = glob($path.$img);
		foreach($files as $file){ 					// iterate files
			if(is_file($file)){
				 unlink($file);
			}
		}
		*/
		$this->db->where_in('nama', $img);			
		$data = $this->db->get('galeri');
		
		if($hapus){
			foreach($data as $data){ @unlink("upload/galeri/".$data->nama); }
			$this->session->set_flashdata('success','Data berhasil dihapus.');
		} else {
			$this->session->set_flashdata('error','<strong>Gagal!</strong> Silahkan ulangi lagi.');
		}
        redirect('index.php/admin/galeri/index');
	}

	
}