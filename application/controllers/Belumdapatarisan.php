<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belumdapatarisan extends CI_Controller {

	public function index()
	{
		$this->load->model('Belumdapatarisan_model');
		$data['belumdapatarisan'] = $this->Belumdapatarisan_model->tampil_data();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('belumdapatarisan', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi(){
		$nom	= $this->input->post('noarisan');
		$namaarisan	= $this->input->post('nama');

		$data = array(
			'no_belum' 	=> $nobayararisan,
			'nama_belum'	=> $namabayararisan,
		);
		// var_dump($data);

		$this->Belumdapatarisan_model->input_data($data, 'tb_belum_dapat');
		redirect('Belumdapatarisan/index');

	}

	public function hapus($id)
	{
		$where = array ('id_belum' => $id);
		$this->Bayararisan_model->hapus_data($where, 'tb_belum_dapat');
		redirect ('Belumdapatarisan/index');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['belumdapatarisan']=$this->Belumdapataarisan_model->get_keyword($keyword);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('belumdapatarisan', $data);
		$this->load->view('templates/footer');

	}

	public function print(){
		$data['belumdapatarisan'] = $this->Belumdapatarisan_model->tampil_data('tb_belum_dapat')->result();
		$this->load->view('print_arisan', $data);
	}


}
