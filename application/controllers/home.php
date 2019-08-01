<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['contenido'] = 'home/index';
		$data['titulo'] = 'Inicio';
		$this->load->view('template',$data);
	}

	public function acerca_de()
	{
		$data['contenido'] = 'home/acerca_de';
		$data['titulo'] = 'Acerca De';
		$this->load->view('template',$data);
	}

	public function acceso_denegado()
	{
		$data['contenido'] = 'home/acceso_denegado';
		$data['titulo'] = 'Denegado';
		$this->load->view('template',$data);
	}

}
