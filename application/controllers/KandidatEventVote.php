<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KandidatEventVote extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model, helper, dan library yang dibutuhkan
        $this->load->model('KandidatEventVoteModel');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    // Method untuk menampilkan halaman daftar kandidat
    // public function index() {
    //     $data['kandidat'] = $this->KandidatEventVoteModel->get_all_KandidatEventVote();
    //     $this->load->view('KandidatEventVote/index', $data);
    // }

    // Method untuk menampilkan halaman tambah kandidat
    public function tambah() {

        $data['EventVote'] = $this->EventVoteModel->get_all_kategori_event_vote();

        // Validasi form
        $this->form_validation->set_rules('nama_kandidat', 'Nama Kandidat', 'required');
        $this->form_validation->set_rules('id_event_vote', 'Event Vote', 'required');
        $this->form_validation->set_rules('visi_misi', 'Visi Misi', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan halaman tambah kandidat
            $this->load->view('KandidatEventVote/tambah', $data);
        } else {
            // Jika validasi berhasil, lakukan proses penambahan kandidat

            // Konfigurasi upload foto
            $config['upload_path']   = './foto_kandidat/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size']      = 2048; // maksimal 2MB
            $config['file_name']     = 'foto_' . time(); // nama file menggunakan timestamp

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $upload_data = $this->upload->data();
                $foto_kandidat = $upload_data['file_name']; // nama file setelah di-upload

                // Data untuk ditambahkan ke database
                $data = array(
                    'nama' => $this->input->post('nama_kandidat'),
                    'id_kategori_event_vote' => $this->input->post('id_event_vote'),
                    'visi_misi' => $this->input->post('visi_misi'),
                    'foto_kandidat' => $foto_kandidat // nama file foto
                );

                if ($this->KandidatEventVoteModel->tambah_KandidatEventVote($data)) {
                    // Jika penambahan berhasil, arahkan kembali ke halaman daftar kandidat
                    redirect('EventVote');
                } else {
                    // Jika penambahan gagal, tampilkan pesan error
                    $data['error'] = 'Penambahan kandidat gagal. Silakan coba lagi.';
                    $this->load->view('KandidatEventVote/tambah', $data);
                }
            } else {
                // Jika upload foto gagal, tampilkan pesan error
                $data['error'] = $this->upload->display_errors();
                $this->load->view('KandidatEventVote/tambah', $data);
            }
        }
    }


    // Method untuk menampilkan halaman edit kandidat
    public function edit($id) {
        // Validasi ID kandidat
        if (!is_numeric($id)) {
            show_404();
        }
        $data['EventVote'] = $this->EventVoteModel->get_all_kategori_event_vote();

        // Validasi form
        $this->form_validation->set_rules('nama_kandidat', 'Nama Kandidat', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan halaman edit kandidat
            $data['KandidatEventVote'] = $this->KandidatEventVoteModel->get_KandidatEventVote_by_id($id);
            $this->load->view('KandidatEventVote/edit', $data);
        } else {

            // Konfigurasi upload foto
            $config['upload_path']   = './foto_kandidat/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size']      = 2048; // maksimal 2MB
            $config['file_name']     = 'foto_' . time(); // nama file menggunakan timestamp

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $upload_data = $this->upload->data();
                $foto_kandidat = $upload_data['file_name']; // nama file setelah di-upload
                

                // Data untuk ditambahkan ke database
                $data = array(
                    'nama' => $this->input->post('nama_kandidat'),
                    'id_kategori_event_vote' => $this->input->post('id_event_vote'),
                    'visi_misi' => $this->input->post('visi_misi'),
                    'foto_kandidat' => $foto_kandidat // nama file foto
                );

                if ($this->KandidatEventVoteModel->edit_KandidatEventVote($id, $data)) {
                    // Jika penambahan berhasil, arahkan kembali ke halaman daftar kandidat
                    redirect('EventVote');
                } else {
                    // Jika penambahan gagal, tampilkan pesan error
                    $data['error'] = 'Edit kandidat gagal. Silakan coba lagi.';
                    $this->load->view('KandidatEventVote/edit', $data);
                }
            } else {
                // Jika upload foto gagal, tampilkan pesan error
                $data['error'] = $this->upload->display_errors();
                $this->load->view('KandidatEventVote/edit', $data);
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
        if ($this->KandidatEventVoteModel->hapus_KandidatEventVote($id)) {
            // Jika penghapusan berhasil, arahkan kembali ke halaman daftar kandidat
            redirect('EventVote');
        } else {
            // Jika penghapusan gagal, tampilkan pesan error
            $data['error'] = 'Penghapusan kandidat gagal. Silakan coba lagi.';
            $this->load->view('EventVote/index', $data);
        }
    }
}