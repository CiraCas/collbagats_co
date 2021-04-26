<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_gatos extends CI_Model {
    function select_gatos(){
        $this->db->select("*");
        $this->db->from("gatos");
        $this->db->join("adopciones", "gatos.idgato=adopciones.idgato2", "left outer");
        $this->db->where("adopciones.idgato2", null);
        $query=$this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return NULL;
        }
    }

    function insert_gato(){
        $nombre= $this->input->post('nombre');
        $genero= $this->input->post('genero');
        $descripcion= $this->input->post('descripcion');
    }
    function modificar_gatos($nombre_fichero = '', $idGato){
        $data['nombre'] = $this->input->post('nombre');
        $data['genero']= $this->input->post('genero');
        $data['descripcion']= $this->input->post('descripcion');

        if($nombre_fichero != '')
            $data['imagen'] = $nombre_fichero;

        $this->db->where('idGato', $idGato);
        $this->db->update('gatos', $data);

    }
}
?>