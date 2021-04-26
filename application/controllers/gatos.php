<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Gatos extends CI_Controller {
        function __construct() {
            parent::__construct();
    
            $this->load->model('m_gatos');
        
        }
        public function gato($error = '') {
            $data['gatos'] = $this->m_gatos->select_gatos();
            $data['admin_contenido'] = 'v_admin_gatos';
            $data['activa'] = 'gatos';
            $data['error'] = $error;

            $this->load->view('v_adminmain', $data); 
        }
        
        public function desconectar () {
            session_destroy( );
            redirect( base_url('index.php/inicio/index') );

        }

        public function insertar_gatos(){

        }
       
        public function insertar_gato(){
            $nombre= $this->input->post('nombre');
            $genero= $this->input->post('genero');
            $descripcion= $this->input->post('descripcion');if($nombre == ''){
                $this-> gato('Error nombre');

                $comprobacion = false;
            }

            $comprobacion = true;
            $mensaje_error = '';
            if($nombre == ''){
                $this-> gato('Error nombre');

                $comprobacion = false;
                $mensaje_error = 'Peta nombre';
            }
            if($genero == ''){
                $this-> gato('Error nombre');

                $comprobacion = false;
            }

            if($comprobacion) {
                $respuesta = $this->grabar_imagen();
            }
            
        }

        function grabar_imagen() {
            $fecha=new DateTime(null, new DateTimeZone('Europe/madrid'));
            $fecha= $fecha->format('d_m_Y');

            $config['upload_path']          = './subidas/gatos';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1024;
            //$config['max_width']            = 0;
            //$config['max_height']           = 0;
            $config['file_name']            = $this->input->post('nombre').$fecha;

            $this->load->library('upload', $config);
            $upload= $this->upload->do_upload('file');

            if(!$upload){
                $error = $this->upload->display_errors();

                $message = 'Error al subir el fichero, revise el formato y el tamaño';
                return false;
                
            }else{  
                $nombre_foto = $this->upload->data('file_name');
                
                return $nombre_foto;
            }
        }

    }
?>