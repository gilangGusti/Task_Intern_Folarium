<?php
defined('BASEPATH') or exit('No direct script allowed');
class Pegawai extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Pegawai';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('pegawai');
		$this->load->view('templates/footer');
	}
}
