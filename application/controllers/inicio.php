<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_gatos');
	}

	public function index(){
		$data['gatos'] = $this->m_gatos->select_gatos();
		$data['public_main'] = 'v_principal';
		$this->load->view('v_inicio',$data);
	}
}
?>
