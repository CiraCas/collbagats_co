<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_noticias extends CI_Model { 

    public function select_noticias() {
        $this->db->select("*");
        $this->db->from("actualidad");
        $query=$this->db->get();
        
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return NULL;
        } 
       
    }

    function select_noticias_id($idnoticia) {
        $this->db->select("*");
        $this->db->from("actualidad");
        $this->db->where("idactualidad", $idnoticia);
        $query=$this->db->get();
        
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return NULL;
        }
    }

    function borrar_noticia($idnoticia) {
        $this->db->where('idactualidad', $idnoticia);
        $this->db->delete('actualidad');
    }

    function insertar_noticia($fecha, $foto) {
        $array=array(
            "titulo" => $this->input->post('titulo'),
            "fecha"=>$fecha,
            "imagen"=> $foto,
            "descripcion"=>$this->input->post('descripcion')
        );
        $this->db->insert("actualidad",$array);
    }

    function modificar_noticia ($imagen = '', $fecha) {
        $idactualidad= $this->input->post('idactualidad');
        $data['titulo'] = $this->input->post('titulo');
        $data['fecha']= $fecha;
        $data['descripcion'] = $this->input->post('descripcion');
        if($imagen != '')
            $data['imagen'] = $imagen;

        $this->db->where('idactualidad', $idactualidad);
        $this->db->update('actualidad', $data);

    }

}