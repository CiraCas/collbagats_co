<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    /*function __construct() {
        parent::__construct();

        //$this->load->model('m_usuarios');
    
    }*/

	public function login_v($error = '', $error2 = '') {
        $datos['titulo'] = 'Login de entrada';

        if(isset($error) && $error != '')
            $datos['error'] = 'No existe el email en nuestra bd';
        if(isset($error2) && $error2 != '')
            $datos['error'] = 'Los datos no coinciden';

		$this->load->view('v_login', $datos);
	}

   
    public function validar() {
        $email= $this->input->post('email');
        $password= $this->input->post('password');        

        $respuesta = $this->m_usuarios->comprobar_email($email);

        if($respuesta != NULL) {
            if($respuesta["contrasenia"] != $password) {
                redirect( base_url('index.php/login/login_v/error2') );
            } else {
                $this->session->email = $email;
                $this->session->password = $password;
                $this->session->nombre = $respuesta["nombre"];
                $this->session->tipo_usuario = $respuesta["tipo_usuario"];
                $this->session->apellido1 = $respuesta["apellido1"];
                $this->session->apellido2 = $respuesta["apellido2"];
                $this->session->idusuario = $respuesta["idusuario"];
                redirect( base_url('index.php/gatos/gato') );
            } 
            
        } else {
            redirect( base_url('index.php/login/login_v/error') );
        }
    }
}

?>