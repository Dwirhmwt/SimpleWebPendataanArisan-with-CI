<?php 

class Arisan_model extends CI_Model{
	function __construct()
    {
        parent::__construct();
    }

	public function tampil_data()
	{
		return $this->db->get('tb_data_join')->result_array();
	}

	public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function input_data($data)
    {
        $this->db->insert('tb_data_join', $data);
    }

    public function get_keyword($keyword){
    	$this->db->select('*');
    	$this->db->from('tb_data_join');
    	$this->db->like('nama_arisan', $keyword);
    	return $this->db->get()->result();
    }
}