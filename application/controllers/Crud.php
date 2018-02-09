<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	function __construct(){
		parent:: __construct();

		$this->load->model('m_data');  
		$this->load->helper('url');
	}

	public function add(){
		$id = $this->input->post('id');
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'fullname' => $fullname,
			'username' => $username,
			'password' => $password,
			'level' => $level
			);

		$where = array(
			'id' => $id
			);

		if ($id == 0) {
			//Add data
			$this->m_data->input_data($data,'user');
			redirect('admin');
		} else {
			//Update data
			$this->m_data->update_data($where,$data,'user');
			redirect('admin');
		}
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('admin');
	}
}