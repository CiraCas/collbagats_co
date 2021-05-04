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
}
?>