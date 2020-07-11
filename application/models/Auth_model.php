<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function cek_admin($email, $pass_hash)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $pass_hash);
        $hasil = $this->db->get('admin');
        return $hasil;
    }

}


