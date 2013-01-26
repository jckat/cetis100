<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumnos extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('alumno/alumnosModel');
	}

	public function addAlumno() {
		if ($this->input->post('matr') != "") {

		$data = array(
			"matricula" => $this->input->post('matr'),
			"iddomicilio" => 1,
			"foliobec" => $this->input->post('foli'),
			"nombre" => $this->input->post('nomb'),
			"appaterno" => $this->input->post('apat'),
			"apmaterno" => $this->input->post('amat'),
			"curp" => $this->input->post('curp'),
			"fechanac" => $this->input->post('fnac'),
			"lugarnac" => $this->input->post('lnac'),
			"cp" => $this->input->post('cpos'),
			"celular" => $this->input->post('curp'),
			"telefono" => $this->input->post('tele'),
			"edocivil" => $this->input->post('edoc'),
			"discapacidad" => $this->input->post('disc'),
			"seguroesc" => $this->input->post('sesc'),
			"tutor" => $this->input->post('tuto'),
			"email" => $this->input->post(''),
			"emailalt" => $this->input->post(''),
			"area" => $this->input->post(''),
			"direccion" => $this->input->post('dire')
		); 

		$this->alumnosModel->insertAlumno($data);

		} else {
			echo "Inserta Datos";
		}
	}

	/*public function addUser()
	{
		if ($this->input->post('name') != "") {

		$data = array(
			"name" => $this->input->post('name'),
			"lastName" => $this->input->post('lastName'),
			"twitter" => $this->input->post('twitter'),
			"sitioweb" => $this->input->post('sitioweb')
		);

		$this->usersModel->insertUser($data);

		} else {
			echo "Insertados Datos";
		}
	}

	public function getUsers() {
		echo "Mis usuarios son: <br/>";
		$users = $this->usersModel->getUsers();
		
		if ($users != FALSE) {
			foreach ($users->result() as $row) {
				echo "<a href=".base_url()."index.php/users/getUserID/".$row->id.">";
				echo $row->name."</a> ".$row->lastName." | ".$row->twitter."<br/>";
			}
		}	
	}

	public function getUserID() {
		$id = $this->uri->segment(3);
		$data["users"] = $this->usersModel->getUserID($id);

		$this->load->view('users', $data);
	}

	public function deleteUserID() {
		$id = $this->uri->segment(3);
		$this->usersModel->deleteUserID($id);

		echo "Usuario eliminado";
	}

	public function updateUserID() {
		$id = $this->uri->segment(3);

		$sitioweb = $this->input->post('sitio');

		$this->usersModel->updateUserID($id, $sitioweb);

		echo "Usuario Actualizado";
	}*/

	public function prueba() {
		$this->load->view('plantillas/header');
		$this->load->view('alumnos/alumnos');
		$this->load->view('plantillas/footer');
	}
}
