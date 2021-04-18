<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_gatos extends CI_Model {
    function select_gatos(){
        $this->db->select("*");
        $this->db->from("gatos");
        
        $query=$this->db->get();
        
        return $query->result_array();
        
    }
}
?>