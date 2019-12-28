<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){            
            redirect('index.php/login');			
        }
		$this->load->model(array('artikel_model','profil_model','bukutamu_model','galeri_model'));		
	}
	
	function index(){		
		$data['jml_pesan']		= $this->bukutamu_model->total_rows();
		$data['jml_artikel']	= $this->artikel_model->get_count();
		$data['jml_foto']		= $this->galeri_model->get_count();
		$data['title'] 			= "Dashboard";
		$data['dashboard'] 		= "active";
		$data['content'] 		= "admin/dashboard";
		$this->load->view('/admin/layout/template', $data);
	}
}