<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usersModel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function getUsers() {
		$data = $this->db->get('users');

		/* SQL completo debes utilizar:

		$data = $this->db->query('SELECT * FROM users');
		*/

		if ($data->num_rows() > 0) {
			return $data;
		} else {
			return FALSE;
		}
	}

	function insertUser($data) {
		$this->db->insert('users', $data);
		echo "Usuario Insertado y su ID es ".$this->db->insert_id();
	}

	function updateUser() {

	}

	function deleteUserID($id) {
		$this->db->where('id', $id);
		$this->db->delete('users');
		return TRUE;
	}

	function getUserID($id) {
		$this->db->where('id', $id);
		$data = $this->db->get('users');

		if ($data->num_rows() > 0) {
			return $data;
		} else {
			return FALSE;
		}
	}

	function updateUserID($id, $sitioweb) {
		$data = array(
			'sitioweb' => $sitioweb
		);

		$this->db->where('id', $id);
		$this->db->update('users', $data);
	}

}
