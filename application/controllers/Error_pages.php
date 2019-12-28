<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error_pages extends CI_Controller{

	function index(){			
		$data['title'] = "Maaf, Halaman Tidak Ditemukan !";		
		$this->load->view('error404', $data);
	}
	
}