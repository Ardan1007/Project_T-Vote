<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventVote extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model, helper, dan library yang dibutuhkan
        $this->load->model('EventVoteModel');
        $this->load->model('KandidatEventVoteModel');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    // Method untuk menampilkan halaman daftar EventVote
    public function index() {
        $data['EventVote'] = $this->EventVoteModel->get_all_kategori_event_vote();
        $data['kandidat'] = $this->KandidatEventVoteModel->get_all_KandidatEventVote();
        $this->load->view('EventVote/index', $data);
    }

    // Method untuk menampilkan halaman tambah EventVote
    public function tambah() {
        // Validasi form
        $this->form_validation->set_rules('nama_EventVote', 'Nama Event Vote', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan halaman tambah EventVote
            $this->load->view('EventVote/tambah');
        } else {
            // Jika validasi berhasil, lakukan proses penambahan EventVote
            $data = array(
                'nama_event' => $this->input->post('nama_EventVote'),
                'deskripsi' => $this->input->post('deskripsi'),
                // Anda bisa tambahkan proses upload foto EventVote di sini
            );

            if ($this->EventVoteModel->tambah_kategori_event_vote($data)) {
                // Jika penambahan berhasil, arahkan kembali ke halaman daftar EventVote
                redirect('EventVote');
            } else {
                // Jika penambahan gagal, tampilkan pesan error
                $data['error'] = 'Penambahan Event Vote gagal. Silakan coba lagi.';
                $this->load->view('EventVote/tambah', $data);
            }
        }
    }

    // Method untuk menampilkan halaman edit EventVote
    public function edit($id) {
        // Validasi ID EventVote
        if (!is_numeric($id)) {
            show_404();
        }

        // Validasi form
        $this->form_validation->set_rules('nama_EventVote', 'Nama Event Vote', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan halaman edit EventVote
            $data['EventVote'] = $this->EventVoteModel->get_kategori_event_vote_by_id($id);
            $this->load->view('EventVote/edit', $data);
        } else {
            // Jika validasi berhasil, lakukan proses pengeditan EventVote
            $data = array(
                'nama_event' => $this->input->post('nama_EventVote'),
                'deskripsi' => $this->input->post('deskripsi'),
                // Anda bisa tambahkan proses upload foto EventVote di sini
            );

            if ($this->EventVoteModel->edit_kategori_event_vote($id, $data)) {
                // Jika pengeditan berhasil, arahkan kembali ke halaman daftar EventVote
                redirect('EventVote');
            } else {
                // Jika pengeditan gagal, tampilkan pesan error
                $data['error'] = 'Pengeditan Event Vote gagal. Silakan coba lagi.';
                $this->load->view('EventVote/edit', $data);
            }
        }
    }

    // Method untuk menghapus EventVote
    public function hapus($id) {
        // Validasi ID EventVote
        if (!is_numeric($id)) {
            show_404();
        }

        // Lakukan proses penghapusan EventVote
        if ($this->EventVoteModel->hapus_kategori_event_vote($id)) {
            // Jika penghapusan berhasil, arahkan kembali ke halaman daftar EventVote
            redirect('EventVote');
        } else {
            // Jika penghapusan gagal, tampilkan pesan error
            $data['error'] = 'Penghapusan Event Vote gagal. Silakan coba lagi.';
            $this->load->view('EventVote/index', $data);
        }
    }
}
