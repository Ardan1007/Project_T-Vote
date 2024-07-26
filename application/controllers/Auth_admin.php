<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model, helper, dan library yang dibutuhkan
        $this->load->model('Admin_login_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    
    // Method untuk menampilkan halaman login
    public function login_admin() {
        
        // Validasi form
        $this->form_validation->set_rules('username_adm', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan halaman login
            $this->load->view('admin/loginadm');
        } else {
            // Jika validasi berhasil, lakukan proses autentikasi
            $username_adm = $this->input->post('username_adm');
            $password = $this->input->post('password');

            $user = $this->Admin_login_model->login($username_adm, $password);

            if ($user) {
                // Jika autentikasi berhasil, simpan data user ke session
                $this->session->set_userdata('user_id', $user['id_admin']);
                $this->session->set_userdata('username_adm', $user['username_adm']);
                // Redirect ke halaman setelah login berhasil
                redirect('admin/dashboard');
            } else {
                // Jika autentikasi gagal, tampilkan pesan error
                $data['error'] = 'Username atau password salah.';
                $this->load->view('admin/loginadm', $data);
            }
        }
    }
}
?>
