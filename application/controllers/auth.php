<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class auth extends CI_Controller{

    public function __construct(){

        parent::__construct();
        $this->load->model('Auth_model');/*CARGA EL MODELO*/ 
        /*LLAMAMOS UNA LIBRERIA PARA ENCRIPTAR CONTRASEÑAS EN LA CARPETA LIBRARIES EL ARCHIVO SE LLAMA HASH*/
        $this->load->library('hash');

    }


    public function login(){

        $data = new stdClass();
        $data->title = "Proyecto CI";
        $data->content = "auth/login";
        $data->panel_title = "Inicio de sesión";
        $data->active = 'login';

        $this->load->view('frontend',$data);
    }


    public function signin(){

      /*PARA VALIDAR LOS DATOS DEL CORREO SE CREA UN ARCHIVO FORM_VALIDATION EN LA CARPETA CONFIG*/
      /*valida_login*/
      /*LUEGO SE CREA LA FUNCION CON QUE SE VALIDA LOS DAOS check_password_strength*/
        if ($this->form_validation->run('valida_login') == FALSE)
        {
                $this->login();
        }
        else
        {       
            /*SOLICITAR EL CORREO Y PASS DE FORMA SEGUR<*/
               $correo = $this->security->xss_clean(addslashes(strip_tags($this->input->post('correo',TRUE))));
               $pass = $this->security->xss_clean(addslashes(strip_tags($this->input->post('pass',TRUE))));
               $user = $this->Auth_model->getUser($correo);


                if(!$user){

                    $this->session->set_flashdata("mensaje_error","Datos de usuario incorrectos");
                    redirect(base_url().'login');

                }

                /*ENCRIPTADO DE CONTRASEÑA*/
                 $encrypt = $this->hash->encrypt($pass);
            
                if($user->users_pass != $encrypt){
        
                    $this->session->set_flashdata("mensaje_error","Datos de usuario incorrectos");
                    redirect(base_url().'login');

                }
           
                $_SESSION['userid']=$user->id;
                $_SESSION['user_email'] = $user->users_email;
                $_SESSION['is_logged_in'] = TRUE;
                $this->session->set_flashdata("mensaje_success","Bienvenido  ".$_SESSION["user_email"]);
                redirect(base_url());
                
          
        }

    }

    public function signup(){

        $data = new stdClass();
        $data->title = "Proyecto CI";
        $data->content = "auth/signup";
        $data->panel_title = "Registro de usuario";
        $data->active = 'signup';

        $this->load->view('frontend',$data);


    }

    public function register(){

        echo '<pre>';
        print_r($this->input->post());
        
    }

public function logout(){

    session_destroy();
    redirect();
}


/*public function check_password_strength(){




}*/
    
}
