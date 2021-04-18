<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Controller {
        function __construct() {
            parent::__construct();
    
            $this->load->model('m_gatos');
        
        }
        public function gatos() {
            $data['gatos'] = $this->m_gatos->select_gatos();
            $data['admin_contenido'] = 'v_admin_gatos';
            $data['activa'] = 'gatos';
            $this->load->view('v_adminmain', $data); 
        }
        public function usuarios() {
            $data['usuarios'] = $this->m_usuarios->select_usuarios();
            $data['admin_contenido'] = 'v_admin_usuarios';
            $data['activa'] = 'usuarios';
            $this->load->view('v_adminmain', $data);
        }
        public function desconectar () {
            session_destroy( );
            redirect( base_url('index.php/inicio/index') );

        }

        public function tablaUsuarios() {
            $this->table->set_heading('Emal', 'Nombre', 'Apellido1', 'Apellido2', 'contraseña','Permisos');
            //$usuarios = $this->db->query('SELECT * FROM usuarios');
            $usuarios = $this->m_usuarios->select_usuarios();
            $tabla = $this->table->generate($usuarios);
            var_dump($tabla);
            
        }

    }
?>