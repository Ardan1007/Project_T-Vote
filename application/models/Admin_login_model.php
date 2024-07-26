<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load database jika belum diload secara otomatis
        $this->load->database();
    }

    public function login($username_adm, $password) {
        // Query untuk memeriksa apakah user terdaftar dalam database
        $this->db->where('username_adm', $username_adm);
        $this->db->where('password', $password); // Misalnya, menggunakan enkripsi MD5 untuk password (disarankan menggunakan metode enkripsi yang lebih aman)
        $query = $this->db->get('user_admin');

        if($query->num_rows() == 1) {
            // Jika user ditemukan, kembalikan true
            return true;
        } else {
            // Jika tidak, kembalikan false
            return false;
        }
    }
}
?>
