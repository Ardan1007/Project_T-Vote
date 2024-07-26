<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KandidatModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Fungsi untuk mendapatkan semua data kandidat
    public function get_all_kandidat() {
        $query = $this->db->get('Kandidat_event');
        return $query->result_array();
    }

    // Fungsi untuk mendapatkan data kandidat berdasarkan ID
    public function get_kandidat_by_id($id) {
        $this->db->where('id_kandidat', $id);
        $query = $this->db->get('Kandidat_event');
        return $query->row_array();
    }

    // Fungsi untuk menambahkan kandidat baru
    public function tambah_kandidat($data) {
        return $this->db->insert('Kandidat_event', $data);
    }

    // Fungsi untuk mengedit data kandidat
    public function edit_kandidat($id, $data) {
        $this->db->where('id_kandidat', $id);
        return $this->db->update('Kandidat_event', $data);
    }

    // Fungsi untuk menghapus data kandidat
    public function hapus_kandidat($id) {
        $this->db->where('id_kandidat', $id);
        return $this->db->delete('Kandidat_event');
    }
}
