<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	function __construct(){
		parent:: __construct();

		$this->load->model('m_data');  
		$this->load->helper('url');
	}
	/////user////

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
			redirect('admin/user');
		} else {
			//Update data
			$this->m_data->update_data($where,$data,'user');
			redirect('admin/user');
		}
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('admin/user');
	}

	/////transportation///

	public function add()
	{
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$description = $this->input->post('description');
		$seat_qty = $this->input->post('seat_qty');

		$data = array(
			'code' => $code,
			'description' => $description,
			'seat_qty' => $seat_qty
			);

		$where = array(
			'id' => $id
			);

		if ($id == 0) {
			//Add data
			$this->m_data->input_data($data,'transportation');
			redirect('admin/transportation');
		} else {
			//Update data
			$this->m_data->update_data($where,$data,'transportation');
			redirect('admin/transportation');
		}
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'transportation');
		redirect('admin/transportation');
	}

	////// rute /////

	public function add(){
		$id = $this->input->post('id');
		$depart_at = $this->input->post('depart_at');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$price = $this->input->post('price');

		$data = array(
			'depart_at' => $depart_at,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'price' => $price
			);

		$where = array(
			'id' => $id
			);

		if ($id == 0) {
			//Add data
			$this->m_data->input_data($data,'rute');
			redirect('admin/rute');
		} else {
			//Update data
			$this->m_data->update_data($where,$data,'rute');
			redirect('admin/rute');
		}
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'rute');
		redirect('admin/rute');
	}

	/////// reservation ////

	public function add(){
		$id = $this->input->post('id');
		$reservation_code = $this->input->post('reservation_code');
		$reservation_at = $this->input->post('reservation_at');
		$customerid = $this->input->post('customerid');
		$seat_code = $this->input->post('seat_code');
		$ruteid = $this->input->post('ruteid');
		$depart_at = $this->input->post('depart_at');
		$price = $this->input->post('price');

		$data = array(
			'reservation_code' => $reservation_code,
			'reservation_at' => $reservation_at,
			'customerid' => $customerid,
			'seat_code' => $seat_code,
			'ruteid' => $ruteid,
			'depart_at' => $depart_at,
			'price' => $price
			);

		$where = array(
			'id' => $id
			);

		if ($id == 0) {
			//Add data
			$this->m_data->input_data($data,'reservation');
			redirect('admin/reservation');
		} else {
			//Update data
			$this->m_data->update_data($where,$data,'reservation');
			redirect('admin/reservation');
		}
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'reservation');
		redirect('admin/reservation');
	}
}