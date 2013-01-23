<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('usersModel');
	}

	public function addUser()
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
			echo "Inserta Datos";
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
	}
}
