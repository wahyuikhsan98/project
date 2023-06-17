<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autentifikasi extends CI_Controller
{

        public function index()
        {
                //jika statusnya sudah login mkaa tidak bisa mengakses halaman login dan kembali ke halaman user      
                if ($this->session->userdata('NIK')) {
                        redirect('user');
                }

                $this->form_validation->set_rules('NIK', 'NIK', 'required|trim|valid_NIK', [
                        'required' => 'NIK Harus diisi !!',
                        'valid_NIK' => 'NIK tidak benar',
                ]);

                $this->form_validation->set_rules('password', 'password', 'required|trim', [
                        'required' => 'Password Harus diisi !!',
                ]);

                if ($this->form_validation->run() == FALSE) {
                        $data['judul'] = 'login';
                        $data['user'] = '';

                        $this->load->view('tamplate/aute_header', $data);
                        $this->load->view('autentifikasi/login');
                        $this->load->view('tamplate/aute_footer');
                } else {
                        $this->_login();
                }
        }

        private function _login()
        {
                $NIK = $this->input->post('NIK', true);
                $password = $this->input->post('password,true');
                $user = $this->modelUser->cekData(['NIK' => $NIK])->row_array();

                //jika usernya ada
                if ($user) {
                        //jika user sudah aktif
                        if ($user['is_active'] == 1) {
                                //cek password
                                if (password_verify($password, $user['password'])) {
                                        $data = [
                                                'NIK' => $user['email'],
                                                'role_id' => $user['role_id']
                                        ];

                                        $this->session->set_userdata($data);

                                        if ($user['role_id'] == 1) {
                                                redirect('admin');
                                        } else {
                                                if ($user['image'] == 'default.jpg') {
                                                        $this->session->set_flashdata(
                                                                'pesan',
                                                                '<div class="alert alert-info alert-message" role="alert">Silahkan 
                                                        Ubah Profile Anda untuk Ubah Photo Profil</div>'
                                                        );
                                                }
                                                redirect('user');
                                        }
                                } else {
                                        $this->session->set_flashdata('pesan', '<div 
                               class="alert alert-danger alert-message" role="alert">Password 
                               salah!!</div>');
                                        redirect('autentifikasi');
                                }
                        } else {
                                $this->session->set_flashdata('pesan', '<div 
                               class="alert alert-danger alert-message" role="alert">User belum 
                               diaktifasi!!</div>');
                                redirect('autentifikasi');
                        }
                } else {
                        $this->session->set_flashdata('pesan', '<div 
                               class="alert alert-danger alert-message" role="alert">Email tidak 
                               terdaftar!!</div>');
                        redirect('autentifikasi');
                }
        }
}
