<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_usuarios extends CI_Model {
    public function insert_usuario(){
        $array=array(
            "mail"=> $this->input->post('mail'),
            "nombre"=> $this->input->post('nombre'),
            "apellido1"=> $this->input->post('apellido1'),
            "apellido2"=>$this->input->post('apellido2'),
            "tipo_usuario"=>$this->input->post('permisos'),
            "contrasenia"=>'212223' 
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
    
    public function select_usuarios_id($id){
        $this->db->select("*");
        $this->db->from("usuarios");
        $this->db->where("idusuario", $id);
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

    function cambiar_password($new_password){
        $this->db->set('contrasenia', $new_password);
        $this->db->where('mail', $this->session->email);
        $this->db->update('usuarios');
    }
    
    function borrar_usuario($idusuario){
        $this->db->where('idusuario', $idusuario);
        $this->db->delete('usuarios');
    }
    
    function modificar_usuario($idusuario){
        $data=array(
            "mail" => $this->input->post('mail'),
            "nombre" => $this->input->post('nombre'),
            "apellido1" => $this->input->post('apellido1'),
            "apellido2" => $this->input->post('apellido2'),
            "tipo_usuario" => $this->input->post('permisos'),
            "contrasenia" => $this->input->post('password')
        ); 
        $this->db->set($data);
        $this->db->where('idusuario', $idusuario);
        
        $this->db->update("usuarios");
    }

}
?>