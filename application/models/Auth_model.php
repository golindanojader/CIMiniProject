<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auth_model extends CI_Model{


public function __construct(){

        parent::__construct();
        $this->load->library('session');

}


public function getUser($email = FALSE){


    if($email){

        $this->db->where('users_email',$email);
        $query = $this->db->get('users');
        
        return $query->row();
    }else{

        $query = $this->db->get('users');
        return $query->result();/*Arroja toda la informacion*/
    }
   
}

}