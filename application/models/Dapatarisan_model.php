<?php 

class Dapatarisan_model extends CI_Model{
	function __construct()
    {
        parent::__construct();
    }

	public function tampil_data()
	{
		return $this->db->get('tb_dapat_arisan')->result_array();
	}

	public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function input_data($data)
    {
        $this->db->insert('tb_dapat_arisan', $data);
    }

    public function get_keyword($keyword){
    	$this->db->select('*');
    	$this->db->from('tb_dapat_arisan');
    	$this->db->like('nama_dapat', $keyword);
    	return $this->db->get()->result();
    }
}