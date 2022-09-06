<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_admin_kategori extends CI_Model{
	private $_table = 'KATEGORI';
	function __construct(){
		parent::__construct();
		$this->load->helper('date');
	}
	
	function daftar_kategori(){
		return $this->db->get($this->_table)->result_array();
	}
	
	function tambah_kategori($data){
		//$data = array($kode, $nama, $userid, $aktif);
		$k_kategori = $this->db->escape_str(htmlentities($data[0]));
		$kategori = $this->db->escape_str(htmlentities($data[1]));
		$last_update = mdate('%Y-%m-%d %H:%i:%s', time());
		$userid = $data[2];
		$is_active = $this->db->escape_str(htmlentities($data[3]));
		
		$rows = array('K_KATEGORI' => $k_kategori,
						'KATEGORI' => $kategori,
						'LAST_UPDATE' => $last_update,
						'USERID' => $userid,
						'IS_ACTIVE' => $is_active);
		$this->db->insert($this->_table, $rows);
		return $this->db->affected_rows();
	}
	
	function edit_kategori($id_kategori){
		$this->db->where('K_KATEGORI', $id_kategori);
		return $this->db->get($this->_table)->result_array();
	}
	
	function simpan_edit_kategori($data){
		//array($k_kategori, $kategori, $is_active, $id);
		$k_kategori = $data[0];
		$kategori = $data[1];
		$is_active = $data[2];
		$userid = $data[3];
		$last_update = mdate('%Y-%m-%d %H:%i:%s', time());
		$this->db->where('K_KATEGORI', $k_kategori);
		$field = array('KATEGORI' => $kategori,
				'USERID' => $userid,
				'LAST_UPDATE' => $last_update,
				'IS_ACTIVE' => $is_active);
		$this->db->update($this->_table, $field);
		return $this->db->affected_rows();
	}
	
	function hapus_kategori($id_kategori){
		return $this->db->delete($this->_table, array('K_KATEGORI'=> $id_kategori));
	}
}