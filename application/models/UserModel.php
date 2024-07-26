<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Fungsi untuk mendaftar akun baru
    public function register($data) {
        return $this->db->insert('Userv', $data);
    }

    public function update_token($user_id, $new_token) {
        $data = array(
            'token' => $new_token
        );
        $this->db->where('id_user', $user_id);
        $this->db->update('userv', $data);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    // Fungsi untuk memeriksa keberadaan username dalam database
    public function check_username($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('Userv');
        return $query->num_rows();
    }

    // Fungsi untuk melakukan autentikasi pengguna
    public function login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('Userv');
        return $query->row_array();
    }

    // Fungsi untuk mendapatkan data pengguna berdasarkan ID
    public function get_user_by_id($id) {
        $this->db->where('id_user', $id);
        $query = $this->db->get('Userv');
        return $query->row_array();
    }

    // Fungsi untuk menambahkan token pada akun pengguna
    public function add_token($id_user, $token) {
        $this->db->set('token', 'token+'.$token, FALSE);
        $this->db->where('id_user', $id_user);
        return $this->db->update('Userv');
    }

    // Fungsi untuk mengurangi token pada akun pengguna setelah melakukan voting
    public function deduct_token($id_user, $token) {
        $this->db->set('token', 'token-'.$token, FALSE);
        $this->db->where('id_user', $id_user);
        return $this->db->update('Userv');
    }

    public function get_token_count($id_user) {
        $this->db->select_sum('token');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('Userv');
        return $query->row()->token;
    }
}
