<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_pagination extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function page($tabel, $kolom, $ascdesc, $limit, $start, $kolomWhere = NULL, $kontenWhere = NULL, $kolomWhere1 = NULL, $kontenWhere1 = NULL){
		if($kolomWhere !== NULL){
			$this->db->where($kolomWhere, $kontenWhere);
		}
		if($kolomWhere1 !== NULL){
			$this->db->where($kolomWhere1, $kontenWhere1);
		}
		$this->db->order_by($kolom, $ascdesc);
		$this->db->limit($limit, $start);
		$query = $this->db->get($tabel);
		//echo $this->db->last_query();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}
}