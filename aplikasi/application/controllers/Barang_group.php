<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_group extends CI_Controller {
	public function index()
	{
		$this->load->view('barang_group/form');
	}
	
	public function lihat(){
		$data['data'] = $this->db->get('barang_group')->result();
		$this->load->view('barang_group/lihat',$data);
	}

	public function Insert(){
		$data = array('Nama' => $this->input->post('Nama')
        );
        $this->db->insert('barang_group',$data);
        echo "<meta http-equiv='refresh' content='3; url=".base_url()."index.php/Barang_group'>"; 
	}
	
	public function Edit(){
		$Id = $this->uri->segment(3);
		//echo $Id;
		$data['data'] = $this->db->get_where('barang_group',array('Id'=>$Id))->result();
		$this->load->view('barang_group/Edit',$data);
		
	}
	
	public function Update(){
		$Id = $this->input->post('Id');
		$Nama  = $this->input->post('Nama');
		$data = array('Nama'=>$Nama);
		
		$this->db->where('Id',$Id);
		$this->db->update('barang_group',$data);
		echo "<meta http-equiv='refresh' content='3; url=".base_url()."index.php/Barang_group/lihat'>"; 
		
	}
	
	public function Hapus(){
		$Id = $this->uri->segment(3);
		$this->db->where('Id',$Id);
		$this->db->delete('barang_group');
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
