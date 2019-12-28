<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
	}
	
	function index(){			
		$data['action'] = "index.php/login/auth";
		$this->load->view('login', $data);
	}		
	
	function auth(){
        $username = $this->input->post('username',TRUE);
        $password = $this->input->post('password',TRUE); 
								
		$cek=$this->auth_model->admin($username,$password);                   
		if($cek->num_rows() > 0){ //jika username dan password ditemukan
                $data=$cek->row_array();
                $this->session->set_userdata('masuk',TRUE);                
				$this->session->set_userdata('ses_id',$data['id']);
                $this->session->set_userdata('ses_user',$data['username']);                            
				$this->session->set_userdata('ses_nama',$data['nama']);				
                redirect('index.php/admin/dashboard/index');
        }else{  // jika username dan password tidak ditemukan atau salah        
				$url = base_url('login');
                echo $this->session->set_flashdata('error','Masukkan Username dan Password Dengan Benar Untuk Masuk Kedalam Sistem');
                redirect($url);
        }
	}
	
	function logout(){
		$this->session->sess_destroy();
        redirect('index.php/login');
	}
}