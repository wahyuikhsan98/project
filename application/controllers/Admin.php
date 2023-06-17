<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function _construct()
	{
		parent::_construct();
		cek_login();
	}

	public function index()
	{
        $this->load->view('tamplate/header');
        $this->load->view('tamplate/sidebar');
		$this->load->view('admin/index');
        $this->load->view('tamplate/footer');
	}
}
