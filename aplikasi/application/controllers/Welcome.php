<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('dashboard');
	}

	public function hello(){
		$data['nim'] 	= '10.01.0001';
		$data['nama']	= 'Adi';
		$this->load->view('v_hello',$data);
	}

	public function form(){
		$this->load->view('v_form');
	}

	public function kirim_data(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$data['nim'] = $nim;
		$data['nama']= $nama;
		
		echo $nim."<br>";
		echo $nama;
		
		//$this->load->view('v_tangkap',$data);
	}
}
