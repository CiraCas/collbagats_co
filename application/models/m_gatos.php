<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_gatos extends CI_Model {
    function select_gatos() {
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
    function select_gatos_id($idgato) {
        $this->db->select("*");
        $this->db->from("gatos");
        $this->db->where("idgato" , $idgato);
        $query=$this->db->get();
        
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return NULL;
        } 
    }

    function insertar_gato($imagen) {
        $array=array(
            "nombre" => $this->input->post('nombre'),
            "sexo"=>$this->input->post('genero'),
            "descripcion"=>$this->input->post('descripcion'),
            "imagen"=> $imagen 
        );
        $this->db->insert("gatos",$array);
    }
    function modificar_gato($nombre_fichero = '') {
        $idgato= $this->input->post('idgato');
        $data['nombre'] = $this->input->post('nombre');
        $data['sexo']= $this->input->post('genero');
        $data['descripcion']= $this->input->post('descripcion');

        if($nombre_fichero != '')
            $data['imagen'] = $nombre_fichero;

        $this->db->where('idgato', $idgato);
        $this->db->update('gatos', $data);

    }

    function borrar_gato($idgato) {
        $this->db->where('idgato', $idgato);
        $this->db->delete('gatos');
    }
}
?>