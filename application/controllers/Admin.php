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
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('admin',$data);
	}

	//public function login()
	//{
	//	redirect('admin');
	//}

	public function form()
	{
		$data['user'] = null;
		$this->load->view('form',$data);
	}


	public function form_edit()
	{
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('form',$data);
	}
}
