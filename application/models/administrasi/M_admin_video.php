<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_admin_video extends CI_Model{
	private $_table		= 'VIDEO';
	
	private $_id_video		= 'ID_FOTO';
	private $_judul		= 'JUDUL';
	private $_video_url	= 'URL';
	private $_userid		= 'USERID';
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('date');
	}
	
	public function list_video(){
		return $this->db->get($this->_table)->result_array();
	}
	
	public function tambah_video($judul, $url, $userid){
		$id_video = mdate('%Y%m%d%H%i%s', time());
		$date = mdate('%Y-%m-%d %H:%i:%s', time());
		
		$row = array(
			$this->_id_video	=> $id_video,
			$this->_judul		=> $judul,
			$this->_video_url	=> $url,
			$this->_userid		=> $userid,
			$this->_last_update	=> $date,
			$this->_is_active	=> 1
		);
		
		$this->db->insert($this->_tabel, $row);
		return ($this->db->affected_rows() == 1)? TRUE: FALSE;
	}
}