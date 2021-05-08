<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_adopciones extends CI_Model { 

    public function select_adoptante() {
        $this->db->select("*");
        $this->db->from("adoptante");
        $query=$this->db->get();
        
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return NULL;
        } 
       
    }

    function select_adopcion() {
        $this->db->select("*");
        $this->db->from("adopciones");
        $this->db->join("gatos", "adopciones.idgato2=gatos.idgato", "inner");
        $query=$this->db->get();
        
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return NULL;
        } 
    }

    function delete_adoptante($dni) {
        $this->db->where('dni', $dni);
        $this->db->delete('adoptante');
    }
    function select_adoptante_dni($dni) {
        $this->db->select("*");
        $this->db->from("adoptante");
        $this->db->where("dni" , $dni);
        $query=$this->db->get();
        
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return NULL;
        } 
    }

    function modificar_adoptante() {
        $dni= $this->input->post('dni1');
        $array=array(
            "dni" => $this->input->post('dni'),
            "nombre"=>$this->input->post('nombre'),
            "apellido1"=>$this->input->post('apellido1'),
            "apellido2"=> $this->input->post('apellido2') 
        );

        $this->db->where('dni', $dni);
        $this->db->update('adoptante', $array);

    }

    function insert_adoptante() {
        $array=array(
            "dni" => $this->input->post('dni'),
            "nombre"=>$this->input->post('nombre'),
            "apellido1"=>$this->input->post('apellido1'),
            "apellido2"=> $this->input->post('apellido2') 
        );
        $this->db->insert('adoptante', $array);
    }

    function insertar_adopcion($fecha, $foto) {
        $array=array(
            "nuevonombre" => $this->input->post('nuevonombre'),
            "idgato2"=>$this->input->post('idgato'),
            "dniadoptante"=>$this->input->post('adoptante'),
            "fecha"=>$fecha,
            "foto"=> $foto
        );
        $this->db->insert("adopciones",$array);
    }
    function select_adopcion_id($idadopcion) {
        $this->db->select("*");
        $this->db->from("adopciones");
        $this->db->where("idadopcion", $idadopcion);
        $query=$this->db->get();
        
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return NULL;
        } 
    }
}
?>