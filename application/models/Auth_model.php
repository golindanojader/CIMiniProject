<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auth_model extends CI_Model{


public function __construct(){

        parent::__construct();
        $this->load->library('session');

}


public function getUser($email){

    $this->db->where('user_email',$email);
    $query = $this->db->get('users');
    return $query->row();
}

}