<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{

    public function index()

    {
        $this->load->view('tamplate/header');
        $this->load->view('tamplate/sidebar');
        $this->load->view('surat/index');
        $this->load->view('tamplate/footer');
    }

    public function detail_Surat()
    {
        $this->load->view('tamplate/header');
        $this->load->view('tamplate/sidebar');
        $this->load->view('surat/detail_surat');
        $this->load->view('tamplate/footer');
    }
}
