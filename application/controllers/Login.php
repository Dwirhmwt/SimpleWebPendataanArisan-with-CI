<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$data_level_user_login = $this->session->userdata('level_user');

		if ($data_level_user_login == 'admin') {
			redirect(base_url('index.php/login/welcome'),'refresh');
		} else {
			$this->load->view('login');
		}
	}

	public function login_process()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$pass_hash = sha1($password);

		$this->load->model('Auth_model');
		$cek_admin = $this->Auth_model->cek_admin($email, $pass_hash);

		if ($cek_admin->num_rows() > 0) {

			$data_admin = $cek_admin->row();

			$array = array(
				'level_user' => 'admin',
				'email' => $email,
				'id_user' =>  $data_admin->id_admin,
			);

			$this->session->set_userdata( $array );

			echo "<script type='text/javascript'>alert('Berhasil Login');</script>";
			redirect(base_url('index.php/login/welcome'),'refresh');
			
		} else {
			echo "<script type='text/javascript'>alert('Email dan Password Salah');</script>";
			redirect(base_url('index.php/login'),'refresh');
		}
	}
	public function welcome()
	{
		$result = array(
				'page' => 'blank'
		);

		$this->load->view('template', $result);
	}
	public function logout()
	{
		$this->session->sess_destroy();

		redirect(base_url('index.php/login'), 'refresh');
	}
}

