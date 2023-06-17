<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulir extends CI_Controller
{

    public function Index()

    {
        $this->load->view('formulir/formulir_index');
        $this->load->view('formulir/formulir_footer');
    }

    public function Domisili()

    {
        $this->load->view('formulir/formulir_header');
        $this->load->view('formulir/formulir_domisili');
        $this->load->view('formulir/formulir_footer');
    }
    public function Usaha()

    {
        $this->load->view('formulir/formulir_header');
        $this->load->view('formulir/formulir_usaha');
        $this->load->view('formulir/formulir_footer');
    }
    public function SKTM()

    {
        $this->load->view('formulir/formulir_header');
        $this->load->view('formulir/formulir_sktm');
        $this->load->view('formulir/formulir_footer');
    }
    public function Kematian()

    {
        $this->load->view('formulir/formulir_header');
        $this->load->view('formulir/formulir_kematian');
        $this->load->view('formulir/formulir_footer');
    }


}