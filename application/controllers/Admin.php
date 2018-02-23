<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('m_data');

	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('admin');
	}

	//public function login()
	//{
	//	redirect('admin');
	//}

	/////USER////
	public function user()
	{
		$data['user'] = $this->m_data->tampil_data("user")->result();
		$this->load->view('user',$data);
	}

	public function form()
	{
		$data['user'] = null;
		$this->load->view('form',$data);
	}


	public function form_edit($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->m_data->tampil_data($where,'user')->result();
		$this->load->view('form',$data);
	}

	/////// CUSTOMER ///////

	public function customer()
	{
		$data['customer'] = $this->m_data->tampil_data('customer')->result();
		$this->load->view('customer',$data);
	}

	//////TRANSPORTATION//////

	public function transportation()
	{
		$data['transportation'] = $this->m_data->tampil_data('transportation')->result();
		$this->load->view('transportation',$data);
	}

	public function form_transportation()
	{
		$data['transportation'] = null;
		$this->load->view('form_transportation',$data);
	}

	public function form_edit_transportation($id)
	{
		$where = array('id' => $id);
		$data['transportation'] = $this->m_data->tampil_data_id($where,'transportation')->result();
		$this->load->view('form_transportation',$data);
	}

	///////// RUTE //////////

	public function rute()
	{
		$data['rute'] = $this->m_data->tampil_data('rute')->result();
		$this->load->view('rute',$data);
	}

	public function form_rute()
	{
		$data['rute'] = null;
		$this->load->view('form_rute',$data);
	}


	public function form_edit_rute($id)
	{
		$where = array('id' => $id);
		$data['rute'] = $this->m_data->tampil_data_id($where,'rute')->result();
		$this->load->view('form_rute',$data);
	}

	/////// RESERVATION //////

	public function reservation()
	{
		$data['reservation'] = $this->m_data->tampil_data('reservation')->result();
		$this->load->view('reservation',$data);
	}

	public function form_reservation()
	{
		$data['reservation'] = null;
		$this->load->view('form_reservation',$data);
	}


	public function form_edit_reservation($id)
	{
		$where = array('id' => $id);
		$data['reservation'] = $this->m_data->tampil_data_id($where,'reservation')->result();
		$this->load->view('form_reservation',$data);
	}
}
