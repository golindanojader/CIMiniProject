<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User{


    protected $CI;

    private $name
    private $email;
    private $satl;
    private $pass;
    private $validationCode;
    private $status;
    private $user_info_json;


    public function __construct(){

        $this->CI = & get_instance();

    }

    public function getName(){

        return $this->name
    }

    public function setName($name){

        $this->name = $name;
    }

    public function getEmail(){

        return $this->email;
    }

    public function setEmail($email){

        $this->email = $email;
    }
    
    public function getSatl(){

        return $this->satl;
    }

    public function setSatl($satl){

        $this->satl = $satl;
    }
    
    public function getPass(){

        return $this->pass;
    }

    public function setPass($pass){

        $this->pass = $pass;
    }
    
    public function getValidationCode(){

        return $this->getValidationCode;
    }


    public function setValidationCode($validationCode){

        $this->validationCode = $validationCode;
    }

    
    public function getStatus(){

        return $this->status
    }

    public function setStatus($status){
        
        $this->status = $status;
    }
    
    public function getUser_info_json(){

        return $this->user_info_json;
    }

    public function setUser_info_json($user_info_json){
        
        $this->user_info_json = $user_info_json
    }
    
   


}

