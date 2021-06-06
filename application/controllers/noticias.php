<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Noticias extends CI_Controller {

        function __construct() {
            parent::__construct();
    
            $this->load->model('m_noticias');
            
        }

        public function noticia() {
            
            $data['noticias'] = $this->m_noticias->select_noticias();
            $data['admin_contenido'] = 'v_admin_noticias';
            $data['activa'] = 'noticias';
            $this->load->view('v_adminmain', $data);
        
        }

        public function noticia2($idactualidad) {
            
            $data['noticias'] = $this->m_noticias->select_noticias_id($idactualidad);
            $data['admin_contenido'] = 'v_admin_noticias_m';
            $data['activa'] = 'noticias';
            $this->load->view('v_adminmain', $data);
        
        }

        public function borrar_noticia($idnoticia) {
            $noti = $this -> m_noticias -> select_noticias_id($idnoticia);
            var_dump($noti[0]["imagen"]);
            $imagen = $noti[0]["imagen"];
            if($noti[0]["imagen"] != '0'){
                unlink("./subidas/actualidad/" . $imagen);
                $this -> m_noticias -> borrar_noticia($idnoticia);

            } else {
                $this -> m_noticias -> borrar_noticia($idnoticia);
            }
            redirect( base_url('index.php/noticias/noticia'));

        }

        public function insertar_noticia() {
            $originalDate = $this->input->post('fecha'); 
            $newDate = date("Y-m-d", strtotime($originalDate));
            
            $respuesta = $this->grabar_imagen();
            $this->m_noticias->insertar_noticia($newDate, $respuesta);
            redirect( base_url('index.php/noticias/noticia'));
        }

        public function modificar_noticia() {
            $imagen = $this->input->post('imagen');
            $originalDate = $this->input->post('fecha');
            $newDate = date("Y-m-d", strtotime($originalDate));
        
            $respuesta = $this->grabar_imagen();
            if($respuesta != false) {
                unlink("./subidas/actualidad/" . $imagen);
                $this->m_noticias->modificar_noticia($respuesta, $newDate);
                redirect( base_url('index.php/noticias/noticia'));
                
            }else {
               
                $this->m_noticias->modificar_noticia($respuesta, $newDate);
                redirect( base_url('index.php/noticias/noticia'));
            }
        }

        function grabar_imagen() {
            $fecha=new DateTime(null, new DateTimeZone('Europe/madrid'));
            $fecha= $fecha->format('d_m_Y');

            $config['upload_path']          = './subidas/actualidad';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1024;
            //$config['max_width']            = 0;
            //$config['max_height']           = 0;
            $config['file_name']            = $this->input->post('titulo').$fecha;

            $this->load->library('upload', $config);
            $upload= $this->upload->do_upload('file');

            if(!$upload){
               
                return false;
                
            }else{  
                $nombre_foto = $this->upload->data('file_name');
                
                return $nombre_foto;
            }
        }
    }