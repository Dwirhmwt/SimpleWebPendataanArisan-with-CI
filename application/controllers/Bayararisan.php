<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayararisan extends CI_Controller {

	public function index()
	{
		$this->load->model('Bayararisan_model');
		$data['bayararisan'] = $this->Bayararisan_model->tampil_data();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('bayararisan', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi(){
		$nobayararisan	= $this->input->post('nomer');
		$namabayararisan	= $this->input->post('nama');
		$statusbayararisan	= $this->input->post('statusbayar');

		$data = array(
			'no_bayar_arisan' 	=> $nobayararisan,
			'nama_bayar_arisan'	=> $namabayararisan,
			'status_bayar' => $statusbayararisan
		);
		// var_dump($data);

		$this->Bayararisan_model->input_data($data, 'tb_bayar_arisan');
		redirect('Bayararisan/index');

	}

	public function hapus($id)
	{
		$where = array ('id_bayar_arisan' => $id);
		$this->Bayararisan_model->hapus_data($where, 'tb_bayar_arisan');
		redirect ('Bayararisan/index');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['bayararisan']=$this->Bayararisan_model->get_keyword($keyword);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('bayararisan', $data);
		$this->load->view('templates/footer');

	}

	public function update(){
		$id = $this->input->post('id_bayar_arisan');
		$id = $this->input->post('no_bayar_arisan');
		$id = $this->input->post('nama_bayar_arisan');
		$id = $this->input->post('status_bayar');

		$data = array(
			'no_bayar_arisan'	=> $nomer,
			'nama_bayar_arisan'	=> $nama,
			'status_bayar'	=> $statusbayar
		);

		$where = array(
			'id_bayar_arisan' => $id_bayar_arisan
		);

		$this->Bayararisan_model->update_data($where,$data,'tb_bayar_arisan');
		redirect('bayararisan/index');
	}

	public function print(){
		$data['bayararisan'] = $this->Bayararisan_model->tampil_data('tb_bayar_arisan')->result();
		$this->load->view('print_arisan', $data);
	}

	public function edit($id){
		$where = array('id_bayar_arisan' => $id);
		$data['bayararisan'] = $this->Bayararisan_model->edit_data($where, 'tb_bayar_arisan')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
	}



}
