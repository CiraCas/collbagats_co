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
            $data['adopciones'] = $this->m_adopciones->select_adopcion();
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
        public function adopcion3($idadopcion) {
            
            $data['adopciones'] = $this->m_adopciones->select_adopcion_id($idadopcion);
            $data['admin_contenido'] = 'v_admin_adopciones_m';
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
            $respuesta = $this->grabar_imagen();
            $this->m_adopciones->insertar_adopcion($newDate, $respuesta);
            redirect( base_url('index.php/adopciones/adopcion'));
        }

        public function borrar_adoptante($dni) {
            $this->m_adopciones->delete_adoptante($dni);
            redirect( base_url('index.php/adopciones/adopcion'));

        }

        public function borrar_adopcion ($idadopcion) {

            $adopcion = $this -> m_adopciones -> select_adopcion_id($idadopcion);
           
            $imagen = $adopcion[0]["foto"];
            if($adopcion[0]["foto"] != '0'){
                unlink("./subidas/adopciones/" . $imagen);
                $this->m_adopciones->delete_adopcion($idadopcion);

            } else {
                $this->m_adopciones->delete_adopcion($idadopcion);
            }
           
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
       

        function grabar_imagen() {
            $fecha=new DateTime(null, new DateTimeZone('Europe/madrid'));
            $fecha= $fecha->format('d_m_Y');

            $config['upload_path']          = './subidas/adopciones';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1024;
            //$config['max_width']            = 0;
            //$config['max_height']           = 0;
            $config['file_name']            = $this->input->post('nuevonombre').$fecha;

            $this->load->library('upload', $config);
            $upload= $this->upload->do_upload('file');

            if(!$upload){
               
                return false;
                
            }else{  
                $nombre_foto = $this->upload->data('file_name');
                
                return $nombre_foto;
            }
        }
        public function modificar_adopcion () {
           
            $imagen = $this->input->post('imagen');
            $originalDate = $this->input->post('fecha');
            $newDate = date("Y-m-d", strtotime($originalDate));
        
            $respuesta = $this->grabar_imagen();
            if($respuesta != false) {
                unlink("./subidas/adopciones/" . $imagen);
                $this->m_adopciones->modificar_adopcion($respuesta, $newDate);
                redirect( base_url('index.php/adopciones/adopcion'));
                
            }else {
               
                $this->m_adopciones->modificar_adopcion($respuesta, $newDate);
                redirect( base_url('index.php/adopciones/adopcion'));
            }


        }
    }
?>