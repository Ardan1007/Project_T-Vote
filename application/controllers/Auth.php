<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model, helper, dan library yang dibutuhkan
        $this->load->model('Admin_login_model');
        $this->load->model('UserModel');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    // Method untuk menampilkan halaman registrasi
    public function register() {
        // Validasi form
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[Userv.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan halaman registrasi
            $this->load->view('auth/register');
        } else {
            // Jika validasi berhasil, lakukan proses pendaftaran
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email'),
                'nama' => $this->input->post('nama'),
                'no_hp' => $this->input->post('no_hp'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'pertanyaan' => $this->input->post('pertanyaan'),
                'jawaban' => $this->input->post('jawaban')
            );

            if ($this->UserModel->register($data)) {
                // Jika pendaftaran berhasil, arahkan ke halaman login
                redirect('login');
            } else {
                // Jika pendaftaran gagal, tampilkan pesan error
                $data['error'] = 'Registrasi gagal. Silakan coba lagi.';
                $this->load->view('auth/register', $data);
            }
        }
    }

    // Method untuk menampilkan halaman login
    public function login() {
        // Validasi form
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan halaman login
            $this->load->view('auth/login');
        } else {
            // Jika validasi berhasil, lakukan proses autentikasi
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->UserModel->login($username, $password);

            if ($user) {
                // Jika autentikasi berhasil, simpan data user ke session
                $this->session->set_userdata('user_id', $user['id_user']);
                $this->session->set_userdata('username', $user['username']);
                $this->session->set_userdata('pertanyaan', $user['pertanyaan']);
                $this->session->set_userdata('jawaban', $user['jawaban']);
                $this->session->set_userdata('token', $user['token']);

                // Redirect ke halaman setelah login berhasil
                redirect('voting');
            } else {
                // Jika autentikasi gagal, tampilkan pesan error
                $data['error'] = 'Username atau password salah.';
                $this->load->view('auth/login', $data);
            }
        }
    }

    public function pertanyaan() {
        // Validasi form
        $this->form_validation->set_rules('jawaban', 'jawaban', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan halaman registrasi
            $this->load->view('auth/pertanyaan');
        } else {
            // Jika validasi berhasil, lakukan proses pendaftaran

            $jawaban = $this->input->post('jawaban');
            $jawaban_session = $this->session->userdata('jawaban');

            if ($jawaban == $jawaban_session) {
                // Jika pendaftaran berhasil, arahkan ke halaman login
                redirect('dashboard');
            } else {
                // Jika pendaftaran gagal, tampilkan pesan error
                $data['error'] = 'Jawaban salah. Silakan coba lagi.';
                $this->load->view('auth/pertanyaan', $data);
            }
        }
    }

    public function login_admin() {
        
        // Validasi form
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan halaman login
            $this->load->view('admin/loginadm');
        } else {
            // Jika validasi berhasil, lakukan proses autentikasi
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->Admin_login_model->login($username, $password);

            if ($user) {
                // Jika autentikasi berhasil, simpan data user ke session
                $this->session->set_userdata('user_id', $user['id_user']);
                $this->session->set_userdata('username', $user['username']);
                // Redirect ke halaman setelah login berhasil
                redirect('admin/dashboard');
            } else {
                // Jika autentikasi gagal, tampilkan pesan error
                $data['error'] = 'Username atau password salah.';
                $this->load->view('admin/loginadm', $data);
            }
        }
    }

    // Method untuk logout
    public function logout() {
        // Hapus semua data session
        $this->session->sess_destroy();
        // Redirect ke halaman utama setelah logout
        redirect('dashboard');
    }
}
