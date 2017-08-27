<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

  var $clientes = [
                    [ 'id' => 0 , 'nombre' => 'Emmett', 'apellido' => 'Brown', 'correo' => 'emmett@domain.com' ] ,
                    [ 'id' => 1 , 'nombre' => 'Jennifer', 'apellido' => 'Parker', 'correo' => 'jennifer@domain.com' ] ,
                ];

  public function mensajes(){
		echo 'nuevo Controlador';
	}

	public function mensaje($id){
		echo 'El identificador es: '.$id;
	}

	public function index(){
		$this->load->view('clientes/index', [ 'clients' => $this->clientes ]);
	}

	public function clientes($id){
		$this->load->view('clientes/detalles');
	}
}
