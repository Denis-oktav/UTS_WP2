<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_homepage extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_homepage');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('homepage');
	}
	public function data()
	{
		$data['mahasiswa'] = $this->m_homepage->getMahasiswa();
		$this->load->view('header');
		$this->load->view('data',$data);
			
	}
	public function biodata()
	{
		$this->load->view('header');
		$this->load->view('biodata');	
	}

	public function gantiHalaman()
	{
		$id_mahasiswa = $this->uri->segment(3);
		$this->m_homepage->getMahasiswa($id_mahasiswa);
		$this->load->view('new_mahasiswa');
		
	}

	public function deleteData()
	{
		$id_mahasiswa = $this->uri->segment(3);
		$this->m_homepage->deleteMahasiswa($id_mahasiswa);
		redirect('c_homepage/data');
	}

	public function updateData()
	{	
		$id_mahasiswa = $this->uri->segment(3);
		$data['mahasiswa'] = $this->m_homepage->getOneMahasiswa($id_mahasiswa);
		$this->load->view('new_mahasiswa', $data);
	}
}
?>