<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model, helper, dan library yang dibutuhkan
        $this->load->model('KandidatModel');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    // Method untuk menampilkan halaman daftar kandidat
    public function index() {
        $data['kandidat'] = $this->KandidatModel->get_all_kandidat();
        $this->load->view('kandidat/index', $data);
    }

    // Method untuk menampilkan halaman tambah kandidat
    public function tambah() {
        // Validasi form
        $this->form_validation->set_rules('nama_kandidat', 'Nama Kandidat', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan halaman tambah kandidat
            $this->load->view('kandidat/tambah');
        } else {
            // Jika validasi berhasil, lakukan proses penambahan kandidat
            $data = array(
                'nama_kandidat' => $this->input->post('nama_kandidat'),
                // Anda bisa tambahkan proses upload foto kandidat di sini
            );

            if ($this->KandidatModel->tambah_kandidat($data)) {
                // Jika penambahan berhasil, arahkan kembali ke halaman daftar kandidat
                redirect('kandidat');
            } else {
                // Jika penambahan gagal, tampilkan pesan error
                $data['error'] = 'Penambahan kandidat gagal. Silakan coba lagi.';
                $this->load->view('kandidat/tambah', $data);
            }
        }
    }

    // Method untuk menampilkan halaman edit kandidat
    public function edit($id) {
        // Validasi ID kandidat
        if (!is_numeric($id)) {
            show_404();
        }

        // Validasi form
        $this->form_validation->set_rules('nama_kandidat', 'Nama Kandidat', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan halaman edit kandidat
            $data['kandidat'] = $this->KandidatModel->get_kandidat_by_id($id);
            $this->load->view('kandidat/edit', $data);
        } else {
            // Jika validasi berhasil, lakukan proses pengeditan kandidat
            $data = array(
                'nama_kandidat' => $this->input->post('nama_kandidat'),
                // Anda bisa tambahkan proses upload foto kandidat di sini
            );

            if ($this->KandidatModel->edit_kandidat($id, $data)) {
                // Jika pengeditan berhasil, arahkan kembali ke halaman daftar kandidat
                redirect('kandidat');
            } else {
                // Jika pengeditan gagal, tampilkan pesan error
                $data['error'] = 'Pengeditan kandidat gagal. Silakan coba lagi.';
                $this->load->view('kandidat/edit', $data);
            }
        }
    }

    // Method untuk menghapus kandidat
    public function hapus($id) {
        // Validasi ID kandidat
        if (!is_numeric($id)) {
            show_404();
        }

        // Lakukan proses penghapusan kandidat
        if ($this->KandidatModel->hapus_kandidat($id)) {
            // Jika penghapusan berhasil, arahkan kembali ke halaman daftar kandidat
            redirect('kandidat');
        } else {
            // Jika penghapusan gagal, tampilkan pesan error
            $data['error'] = 'Penghapusan kandidat gagal. Silakan coba lagi.';
            $this->load->view('kandidat/index', $data);
        }
    }
}