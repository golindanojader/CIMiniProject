<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	
class index extends CI_Controller{

	  public function __construct(){

	  	parent::__construct();

  }

    public function index(){
    	$data = new stdClass();
    	$data->title = "Proyecto CI";	
    	$data ->content = "index/index";
    	$this->load->view('frontend',$data);
    }
}

