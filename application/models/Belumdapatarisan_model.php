<?php 

class Belumdapatarisan_model extends CI_Model{
	function __construct()
    {
        parent::__construct();
    }

	public function tampil_data()
	{
		return $this->db->get('tb_belum_dapat')->result_array();
	}

	public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function input_data($data)
    {
        $this->db->insert('tb_belum_dapat', $data);
    }

    public function get_keyword($keyword){
    	$this->db->select('*');
    	$this->db->from('tb_belum_dapat');
    	$this->db->like('nama_belum', $keyword);
    	return $this->db->get()->result();
    }
}