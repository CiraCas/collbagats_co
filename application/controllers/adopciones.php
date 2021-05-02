<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Adopciones extends CI_Controller {
        function __construct() {
            parent::__construct();
    
            $this->load->model('m_gatos');
            $this->load->model('m_adopciones');
        
        }

        public function adopcion() {

            $data['gatos'] = $this->m_gatos->select_gatos();
            $data['admin_contenido'] = 'v_admin_adopciones';
            $data['activa'] = 'adopciones';
            $this->load->view('v_adminmain', $data); 
            
        }
    }
?>