<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arisan extends CI_Controller {

	public function index()
	{
		$this->load->model('Arisan_model');
		$data['arisan'] = $this->Arisan_model->tampil_data();
		// var_dump($this->Arisan_model->tampil_data());
		// die();

		// $this->load->view('welcome_message');

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('arisan', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi(){
		$nom	= $this->input->post('nomer');
		$nama	= $this->input->post('nama');

		$data = array(
			'no_arisan'	=> $nom,
			'nama_arisan'	=> $nama,
		);
		// var_dump($data);

		$this->Arisan_model->input_data($data, 'tb_data_join');
		redirect('Arisan/index');

	}

	public function hapus($id)
	{
		$where = array ('id' => $id);
		$this->Arisan_model->hapus_data($where, 'tb_data_join');
		redirect ('Arisan/index');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['arisan']=$this->Arisan_model->get_keyword($keyword);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('arisan', $data);
		$this->load->view('templates/footer');

	}

	public function print(){
		$data['arisan'] = $this->Arisan_model->tampil_data('tb_data_join')->result();
		$this->load->view('print_arisan', $data);
	}


}
