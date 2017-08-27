<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

  public function mensajes(){
		echo 'nuevo Controlador';
	}

	public function mensaje($id){
		echo 'El identificador es: '.$id;
	}

	public function index(){
		echo 'nuevo Controlador';
	}

	public function clientes($id){
		echo 'El identificador es: '.$id;
	}
}
