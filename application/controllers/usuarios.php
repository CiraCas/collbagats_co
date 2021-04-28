<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Usuarios extends CI_Controller {

       
        public function usuario() {
            if($this->session->tipo_usuario == 1){
            $data['usuarios'] = $this->m_usuarios->select_usuarios();
            $data['admin_contenido'] = 'v_admin_usuarios';
            $data['activa'] = 'usuarios';
            $this->load->view('v_adminmain', $data);
            }else{
                $data['admin_contenido'] = 'v_admin_usuarios2';
                $data['activa'] = 'usuarios';
                $this->load->view('v_adminmain', $data);
            }
        }
        public function usu2($usuario) {
            //$data['usuario'] = $usuario;
            $data['usuarios'] = $this->m_usuarios->select_usuarios_id($usuario);
            $data['admin_contenido'] = 'v_admin_usuarios_m';
            $data['activa'] = 'usuarios';
            $this->load->view('v_adminmain', $data);
        }
        public function desconectar () {
            session_destroy( );
            redirect( base_url('index.php/inicio/index') );

        }

 
        public function cambiar_password(){
            $new_password= $this->input->post('password');        
            $this->m_usuarios->cambiar_password($new_password);
            $this-> usuario();
            
        }
        public function borrar_usu(){
            $this->m_usuarios->borrar_usuario($this->input->post('idusuario'));
            //$this-> usuario();
            redirect(base_url("index.php/usuarios/usuario"), 'refresh');
        }

        public function insertar_usuario() {
            $this->m_usuarios->insert_usuario();
            redirect(base_url("index.php/usuarios/usuario"), 'refresh');
        }

        public function modificar_usuario() {
            $this->m_usuarios->modificar_usuario($this->input->post('idusuario'));
            if($this->input->post('idusuario') == $this->session->idusuario) {
                $this->session->email = $this->input->post('mail');
                $this->session->password = $this->input->post('password');
                $this->session->nombre = $this->input->post('nombre');
                $this->session->apellido1 = $this->input->post('apellido1');
                $this->session->apellido2 = $this->input->post('apellido2');
            }
            redirect(base_url("index.php/usuarios/usuario"), 'refresh');
        }

    }
?>