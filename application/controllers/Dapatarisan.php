  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dapatarisan extends CI_Controller {

	public function index()
	{
		$this->load->model('Dapatarisan_model');
		$data['dapatarisan'] = $this->Dapatarisan_model->tampil_data();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dapatarisan', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi(){
		$noarisan	= $this->input->post('noarisan');
		$namadapat	= $this->input->post('namadapat');
		$tgldapat	= $this->input->post('tgl_dapat');

		$data = array(
			'no_dapat' 	=> $noarisan,
			'nama_dapat'	=> $namadapat,
			'tgl_dapat'	=> $tgldapat,
		);
		// var_dump($data);

		$this->Dapatarisan_model->input_data($data, 'tb_dapat_arisan');
		redirect('Dapatarisan/index');

	}

	public function hapus($id)
	{
		$where = array ('id_dapat' => $id);
		$this->Dapatarisan_model->hapus_data($where, 'tb_dapat_arisan');
		redirect ('Dapatarisan/index');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['dapatarisan']=$this->Dapatarisan_model->get_keyword($keyword);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dapatarisan', $data);
		$this->load->view('templates/footer');

	}

	public function print(){
		$data['dapatarisan'] = $this->Dapatarisan_model->tampil_data('tb_dapat_arisan')->result();
		$this->load->view('print_arisan', $data);
	}


}
