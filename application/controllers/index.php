<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/*En este constructor se cargan las diferentes librerias*/	
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

