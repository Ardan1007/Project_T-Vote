<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VotingModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Fungsi untuk memasukkan data voting baru
    public function vote($data) {
        return $this->db->insert('Voting', $data);
    }

    // Fungsi untuk mendapatkan data voting berdasarkan ID pengguna dan ID kandidat
    public function get_voting_by_user_and_kandidat($user_id, $id_kandidat) {
        $this->db->where('id_user', $user_id);
        $this->db->where('id_kandidat', $id_kandidat);
        $query = $this->db->get('Voting');
        return $query->num_rows();
    }

    // Fungsi untuk mendapatkan jumlah suara per kandidat
    public function count_votes_per_kandidat() {
        $this->db->select('id_kandidat, COUNT(*) as total_suara');
        $this->db->group_by('id_kandidat');
        $query = $this->db->get('Voting');
        return $query->result_array();
    }

    public function get_riwayat_vote_by_user($user_id) {
        $this->db->where('id_user', $user_id);
        return $this->db->get('Voting')->result_array();
    }    
}
