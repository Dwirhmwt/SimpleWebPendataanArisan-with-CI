<?php 

class Bayararisan_model extends CI_Model{
	function __construct()
    {
        parent::__construct();
    }

	public function tampil_data()
	{
		return $this->db->get('tb_bayar_arisan')->result_array();
	}

	public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function input_data($data)
    {
        $this->db->insert('tb_bayar_arisan', $data);
    }

    public function get_keyword($keyword){
    	$this->db->select('*');
    	$this->db->from('tb_bayar_arisan');
    	$this->db->like('nama_bayar_arisan', $keyword);
    	return $this->db->get()->result();
    }

    public function edit_data($where, $table){
        return $this->db->get_where($table,$where);

    }
}