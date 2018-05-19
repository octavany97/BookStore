<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookStoreController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('BookStoreModel');
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
		$data = [];
		$data['css'] = $this->load->view('include/css', NULL, TRUE);
		$data['js'] = $this->load->view('include/js', NULL, TRUE);
		$data['header'] = $this->load->view('include/header', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer', NULL, TRUE);

		$this->load->view('page/login', $data);
	}
	public function authentication(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->BookStoreModel->getUser($username, $password);

		$data = [];
		$data['css'] = $this->load->view('include/css', NULL, TRUE);
		$data['js'] = $this->load->view('include/js', NULL, TRUE);
		$data['header'] = $this->load->view('include/header', NULL, TRUE);
		//ini ntar disesuain sama databasenya lagi
		if($result['tipe_pengguna'] == 'Pabrik'){
			$data['sidebar'] = $this->load->view('include/sidebarPabrik', NULL, TRUE);
		}
		else if($result['tipe_pengguna'] == 'Manager'){
			$data['sidebar'] = $this->load->view('include/sidebarManagerToko', NULL, TRUE);
		}
		else if($result['tipe_pengguna'] == 'Kasir'){
			$data['sidebar'] = $this->load->view('include/sidebarKasir', NULL, TRUE);
		}
		
		$data['footer'] = $this->load->view('include/footer', NULL, TRUE);

	}
	public function home()
	{
		// kalau ud ada db baru bs dipake
		/*
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->BookStoreModel->getUser($username, $password);
		*/
		$data = [];
		$data['css'] = $this->load->view('include/css', NULL, TRUE);
		$data['js'] = $this->load->view('include/js', NULL, TRUE);
		$data['header'] = $this->load->view('include/header', NULL, TRUE);
		/*
		if($result['tipe_pengguna'] == 'Pabrik'){
			$data['sidebar'] = $this->load->view('include/sidebarPabrik', NULL, TRUE);
		}
		else if($result['tipe_pengguna'] == 'Manager'){
			$data['sidebar'] = $this->load->view('include/sidebarManagerToko', NULL, TRUE);
		}
		else if($result['tipe_pengguna'] == 'Kasir'){
			$data['sidebar'] = $this->load->view('include/sidebarKasir', NULL, TRUE);
		}
		*/
		$data['sidebar'] = $this->load->view('include/sidebarPabrik', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer', NULL, TRUE);

		$this->load->view('page/home', $data);
	}
}
