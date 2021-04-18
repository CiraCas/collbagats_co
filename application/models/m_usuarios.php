<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_usuarios extends CI_Model {
    public function insertUsuario(){
        $array=array(
            "mail"=>"javier@gmail.com",
            "nombre"=>"Javier",
            "apellido1"=>"Hernandez",
            "apellido2"=>"Lopez",
            "tipo_usuario"=>2
        );
        $this->db->insert("usuarios",$array);

    }
    public function select_usuarios(){
        $this->db->select("*");
        $this->db->from("usuarios");
        //this->db->where("nombre","Cira");
        $query=$this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return NULL;
        }
    }

    function comprobar_email($email) {
        $query = $this->db->select('*')
            ->from('usuarios')
            //->join('tabla2', 'tabla2.id = usuaruios.id', 'left')
            ->where('mail', $email)
            ->get()->row_array();

        return $query;
    }

}
?>