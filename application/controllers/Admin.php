<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model, helper, dan library yang dibutuhkan
        $this->load->model('KandidatModel');
        $this->load->model('PembelianModel');
        $this->load->model('UserModel');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    // Method untuk menampilkan halaman dashboard admin
    public function dashboard() {
        // Anda bisa tambahkan logika bisnis untuk halaman dashboard di sini
        $this->load->view('admin/dashboard');
    }

    // Method untuk menampilkan halaman kelola kandidat admin
    public function kandidat() {
        // Mendapatkan daftar kandidat dari model
        $data['kandidat'] = $this->KandidatModel->get_all_kandidat();
        $this->load->view('admin/kandidat', $data);
    }

    // Method untuk menampilkan halaman kelola pembelian admin
    public function pembelian() {
        // Mendapatkan daftar pembelian yang belum divalidasi dari model
        $data['pembelian'] = $this->PembelianModel->get_unvalidated_pembelian();
        $this->load->view('admin/pembelian', $data);
    }

    // Method untuk menampilkan halaman kelola users admin
    public function admin_user() {
        // Mendapatkan daftar user dari model
        $data['admin_users'] = $this->Admin_user_model->get_all_admin_users();
        $this->load->view('admin/admin_user', $data);
    }

    // Method untuk menambahkan user baru oleh admin
    public function tambah_user() {
        // Validasi form
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan halaman tambah user
            $this->load->view('admin/tambah_user');
        } else {
            // Jika validasi berhasil, lakukan proses penambahan user
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );

            if ($this->UserModel->register($data)) {
                // Jika penambahan user berhasil, arahkan kembali ke halaman kelola users
                redirect('admin/users');
            } else {
                // Jika penambahan user gagal, tampilkan pesan error
                $data['error'] = 'Penambahan user gagal. Silakan coba lagi.';
                $this->load->view('admin/tambah_user', $data);
            }
        }
    }
	
    // Method untuk menampilkan halaman hasil voting
    public function hasil_voting() {
        // Mendapatkan jumlah suara per kandidat dari model
        $data['votes'] = $this->VotingModel->count_votes_per_kandidat();
        $this->load->view('admin/hasil_voting', $data);
    }

    public function validasi_pembayaran($id_pembelian) {
        // Validasi form
            // Jika validasi berhasil, lakukan proses konfirmasi pembayaran

            $data_pembelian = $this->PembelianModel->get_pembelian_by_id($id_pembelian);


            if ($data_pembelian) {

                $jumlah_token = $data_pembelian['jumlah_token'];
                $status_validasi = 1;

                if ($this->PembelianModel->update_status_validasi($id_pembelian, $status_validasi)) {

                    $user_id = $data_pembelian['id_user'];

                    $data_user = $this->UserModel->get_user_by_id($user_id);

                    $token_user = $data_user['token'];

                    if ($data_user) {
                        $new_token = intval($token_user) + intval($jumlah_token);

                        if($this->UserModel->update_token($user_id, $new_token)){
                            // Jika konfirmasi berhasil, tampilkan pesan sukses
                            $data['success'] = 'Konfirmasi pembayaran berhasil.';
                            $data['pembelian'] = $this->PembelianModel->get_unvalidated_pembelian();
                            $this->load->view('admin/pembelian', $data);
                        }else{
                            $data['error'] = 'Konfirmasi pembayaran gagal. Silakan coba lagi.';
                            $data['pembelian'] = $this->PembelianModel->get_unvalidated_pembelian();
                            $this->load->view('admin/pembelian', $data);
                        }
                    }
                    else{
                        $data['error'] = 'Konfirmasi pembayaran gagal. Silakan coba lagi.';
                        $data['pembelian'] = $this->PembelianModel->get_unvalidated_pembelian();
                        $this->load->view('admin/pembelian', $data);
                    }
                } else {
                    // Jika konfirmasi gagal, tampilkan pesan error
                    $data['error'] = 'Konfirmasi pembayaran gagal. Silakan coba lagi.';
                    $data['votes'] = $this->VotingModel->count_votes_per_kandidat();
                    $this->load->view('admin/hasil_voting', $data);
                }
            } else {
                $data['error'] = 'Konfirmasi pembayaran gagal. Silakan coba lagi.';
                $data['votes'] = $this->VotingModel->count_votes_per_kandidat();
                $this->load->view('admin/hasil_voting', $data);
            }
    }

}
