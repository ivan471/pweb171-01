<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('desain/header');
		$this->load->view('desain/nav');
		$this->load->view('home');
		$this->load->view('desain/footer');
	}
	public function pelangi()
	{
		$this->load->view('desain/header');
		$this->load->view('desain/nav');
		$this->load->view('pelangi');
		$this->load->view('desain/footer');
	}
	public function kereta()
	{
		$this->load->view('desain/header');
		$this->load->view('desain/nav');
		$this->load->view('kereta');
		$this->load->view('desain/footer');
	}
	public function kebun()
	{
		$this->load->view('desain/header');
		$this->load->view('desain/nav');
		$this->load->view('kebun');
		$this->load->view('desain/footer');
	}
	public function cicak()
	{
		$this->load->view('desain/header');
		$this->load->view('desain/nav');
		$this->load->view('cicak');
		$this->load->view('desain/footer');
	}
	public function balon()
	{
		$this->load->view('desain/header');
		$this->load->view('desain/nav');
		$this->load->view('balon');
		$this->load->view('desain/footer');
	}
}
