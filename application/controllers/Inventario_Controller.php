<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventario_Controller extends CI_Controller {

	function catalogo(){
		$this->load->view('cabecera');
		$this->load->view('inventario/catalogo');
		$this->load->view('pie');
	}
	function existencia(){
		$this->load->view('cabecera');
		$this->load->view('inventario/existencia');
		$this->load->view('pie');
	}

}