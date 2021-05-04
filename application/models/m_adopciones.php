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
}
?>