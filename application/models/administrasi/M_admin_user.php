<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_admin_user extends CI_Model{
	private $_table			= 'USER';
	
	private $_userid			= 'USERID';
	private $_password			= 'PASSWORD';
	private $_nama				= 'NAMA';
	private $_is_super			= 'IS_SUPER';
	private $_userid_update	= 'USERID_UPDATE';
	private $_last_update		= 'LAST_UPDATE';
	private $_is_active		= 'IS_ACTIVE';
	
	private $_salt_password = '~`1234567890!@#$%^&*()-_=+[]abcdefghijklmnopqrstuvwxyz{}<>,.?';
	
	function __construct(){
		parent::__construct();
	}
	
	function tambah_user($data){
		$userid = $this->db->escape_str(htmlentities($data['userid']));
		$password = md5(sha1(md5($this->_salt_password).$this->db->escape_str(htmlentities($data['password']))));
		$nama = $this->db->escape_str(htmlentities($data['nama']));
		$super = $this->db->escape_str(htmlentities($data['super']));
		$aktifkan = $this->db->escape_str(htmlentities($data['aktifkan']));
		
		$rows = array($this->_userid => $userid,
				$this->_password => $password,
				$this->_nama => $nama,
				$this->_is_super => $super,
				$this->_is_active => $aktifkan);
		return $this->db->insert($this->_table, $rows)->affected_rows();
	}
	
	function daftar_user($admin){
		$query = $this->db->query("SELECT * FROM ".$this->_table." WHERE ".$this->_userid." <> '".$admin."'");
		return $query->result_array();
	}
	
	function edit_user($userid){
		$this->db->where($this->_userid, $userid);
		return $this->db->get($this->_table)->result();
	}
	function simpan_edit_user($userid_update, $field = array()){
		$this->load->helper('date');
		
		$userid			= $field['userid'];
		$password		= md5(sha1(md5($this->_salt_password).$this->db->escape_str(htmlentities($field['password']))));
		$nama			= $this->db->escape_str(htmlentities($field['nama']));
		$is_super		= $field['is_super'];
		$last_update	= mdate('%Y-%m-%d %H:%i:%s', time());
		$is_active		= $field['is_active'];
		
		if($field['password'] == NULL){
			$data = array(
						$this->_nama => $nama,
						$this->_is_super => $is_super,
						$this->_userid_update => $userid_update,
						$this->_last_update => $last_update,
						$this->_is_active => $is_active
					);
			$this->db->where($this->_userid, $userid);
			$this->db->update($this->_table, $data);
			
			return $this->db->affected_rows();
		}elseif($field['password'] != NULL){
			$data = array(
					$this->_password => $password,
					$this->_nama => $nama,
					$this->_is_super => $is_super,
					$this->_userid_update => $userid_update,
					$this->_last_update => $last_update,
					$this->_is_active => $is_active
			);
			$this->db->where($this->_userid, $userid);
			$this->db->update($this->_table, $data);
			
			return $this->db->affected_rows();
		}
	}
	
	function hapus_user($userid){
		$this->db->delete($this->_table, array($this->_userid => $userid));
	}
	
	function aktivasi($userid, $status, $updater){
		$this->load->helper('date');
		
		$status			= ($status === 'aktifkan')? 1: 0;
		$last_update	= mdate('%Y-%m-%d %H:%i:%s', time());
		
		$fields = array(
			$this->_is_active		=> $status,
			$this->_userid_update	=> $updater,
			$this->_last_update		=> $last_update
		);
		
		$this->db->where($this->_userid, $userid);
		$this->db->update($this->_table, $fields);
	}
}