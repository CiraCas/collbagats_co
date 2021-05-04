<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Adopciones extends CI_Controller {
        function __construct() {
            parent::__construct();
    
            $this->load->model('m_gatos');
            $this->load->model('m_adopciones');
        
        }

        public function adopcion() {
            $data['adoptantes'] = $this->m_adopciones->select_adoptante();
            $data['gatos'] = $this->m_gatos->select_gatos();
            $data['admin_contenido'] = 'v_admin_adopciones';
            $data['activa'] = 'adopciones';
            $this->load->view('v_adminmain', $data); 
            
        }
        public function adopcion2($gato) {
            
            $data['adoptantes'] = $this->m_adopciones->select_adoptante();
            $data['gatos'] = $this->m_gatos->select_gatos_id($gato);
            //$data['idgato'] = $gato;
            $data['admin_contenido'] = 'v_admin_adopciones_i';
            $data['activa'] = 'adopciones';
            $this->load->view('v_adminmain', $data); 
             
        }

        public function adoptante($dni) {

            $data['adoptantes'] = $this->m_adopciones->select_adoptante_dni($dni);
            $data['admin_contenido'] = 'v_admin_adopciones_a';
            $data['activa'] = 'adopciones';
        
            $this->load->view('v_adminmain', $data);
        }

        public function insertar_adopcion() {
            $originalDate = $this->input->post('fecha');
            var_dump($originalDate);
            $newDate = date("Y-m-d", strtotime($originalDate));
            var_dump($newDate);
        }

        public function borrar_adoptante($dni) {
            $this->m_adopciones->delete_adoptante($dni);
            redirect( base_url('index.php/adopciones/adopcion'));

        }

        public function modificar_adoptante () {
            $this->m_adopciones->modificar_adoptante();
            redirect( base_url('index.php/adopciones/adopcion'));

        }

        public function insertar_adoptante ($idgato) {
            $this->m_adopciones->insert_adoptante();
            redirect( base_url('index.php/adopciones/adopcion2/'.$idgato));
        }
    }
?>