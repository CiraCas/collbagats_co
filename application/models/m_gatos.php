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
}
?>