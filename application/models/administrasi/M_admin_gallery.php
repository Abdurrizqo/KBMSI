<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_admin_gallery extends CI_Model{
	private $_tabel		= 'ALBUM';
	private $_tabel_foto	= 'FOTO';
	private $_table_video 	= 'VIDEO';
	
	//album
	private $_id_album		= 'ID_ALBUM';
	private $_album		= 'ALBUM';
	//end of album
	
	//foto
	private $_id_foto		= 'ID_FOTO';
	private $_is_cover		= 'IS_COVER';
	//end of foto
	
	//union foto, video, and album//
	private $_judul		= 'JUDUL';
	private $_konten		= 'KONTEN';
	private $_file_name	= 'FILE_NAME';
	private $_userid		= 'USERID';
	private	 $_last_update	= 'LAST_UPDATE';
	private $_is_active	= 'IS_ACTIVE';
	//end of union foto, video, and album//
	
	//-----video-----//
	private $_id_video 	= 'ID_VIDEO';
	
	//-end of video--//
	
	function __construct(){
		parent::__construct();
		$this->load->helper('date');
	}
	
	function list_album($super_user, $id_album = NULL){
		if($super_user == 1){
			$query = $this->db->get($this->_tabel)->result_array();
			//echo $this->db->last_query();
			return $query;
		}
	}
	
	function list_foto($super_user, $id_album = NULL){
		if($super_user == 1){
			$this->db->where($this->_id_album, $id_album);
			$query = $this->db->get($this->_tabel_foto)->result_array();
			return $query;
		}
	}
	
	function user_album(){
		$tabel = 'USER';
		return $this->db->get($tabel)->result_array();
	}
	
	function tambah_album($field = array()){
		$nama		= trim($this->db->escape_str(htmlentities($field['nama'])));
		$id_album	= strtolower($nama);
		$id_album	= (string)str_replace(' ', '-', $id_album);
		$pemilik	= $this->db->escape_str(htmlentities($field['pemilik']));
		$is_active	= $this->db->escape_str(htmlentities($field['aktif']));
		
		$rows = array(
			$this->_id_album => $id_album,
			$this->_album => $nama,
			$this->_userid => $pemilik,
			$this->_is_active => $is_active
		);
		
		$this->db->insert($this->_tabel, $rows);
		return $this->db->affected_rows();
	}
	
	function hapus_album($id){
		$this->db->delete($this->_tabel_foto, array($this->_id_album => $id));
		$this->db->delete($this->_tabel, array($this->_id_album => $id));
	}
	
	function jumlah_foto($id){
		$this->db->where('ID_FOTO', $id);
		return $this->db->count_all('FOTO');
	}
	
	function tambah_foto($id_foto, $id_album, $nama, $user){
		$date = mdate('%Y-%m-%d %H:%i:%s', time());
		
		$row = array(
			$this->_id_foto		=> $id_foto,
			$this->_id_album	=> $id_album,
			$this->_file_name	=> $nama,
			$this->_userid		=> $user,
			$this->_last_update	=> $date,
			$this->_is_active	=> 1
		);
		
		$this->db->insert($this->_tabel_foto, $row);
		return ($this->db->affected_rows() == 1)? TRUE: FALSE;
	}
	
	function aktivasi($id_album, $status, $userid){
		$date = mdate('%Y-%m-%d %H:%i:%s', time());
		
		$fields = array(
			$this->_is_active	=> $status,
			$this->_last_update	=> $date,
			$this->_userid		=> $userid
		);
		$this->db->where($this->_id_album, $id_album);
		$this->db->update($this->_tabel, $fields);
		return $this->db->affected_rows();
	}
	
	function hapus_foto($id_foto){
		$query = $this->db->query("SELECT FILE_NAME FROM FOTO WHERE ID_FOTO='".$id_foto."'")->result_array();
		
		foreach ($query as $field){
			$gambar = $field['FILE_NAME'];
		}
		//echo $this->db->last_query();
		if($query != NULL && !filter_var($gambar, FILTER_VALIDATE_URL)){
			unlink('uploads/gallery/'.$gambar);
		}
		return $this->db->delete($this->_tabel_foto, array($this->_id_foto => $id_foto));
	}
	
	function set_cover($id_album, $id_foto){
		$this->db->where($this->_id_album, $id_album);
		$this->db->where($this->_id_foto, $id_foto);
		
		$field = array($this->_is_cover => 1);
		
		$this->db->update($this->_tabel_foto, $field);
		if($this->db->affected_rows() == 1){
			$this->db->where($this->_id_album, $id_album);
			$this->db->where("$this->_id_foto !=", $id_foto);
			$fields = array($this->_is_cover => 0);
			$this->db->update($this->_tabel_foto, $fields);
		}
	}
	
	function list_video(){
		return $this->db->get($this->_table_video)->result_array();
	}
	
	function tambah_video($userid){
		$this->load->helper('form');
		$judul = htmlentities(trim($this->input->post('judul_video')));
		$url = trim($this->input->post('url_video'));
		$date = mdate('%Y-%m-%d %H:%i:%s', time());
	
		if(empty($judul) OR empty($url) OR empty($userid)){
			echo '<script type="text/javascript">alert("Maaf, data yang anda masukkan belum lengkap");</script>';
		}else{
			$row = array(
					$this->_id_video 	=> md5($date.$judul),
					$this->_judul 		=> $judul,
					$this->_userid 		=> $userid,
					$this->_file_name 	=> $url,
					$this->_last_update => $date
			);
				
			$this->db->insert($this->_table_video, $row);
		}
	}
	
	function hapus_video($id_video){
		$this->db->delete($this->_table_video, array($this->_id_video => $id_video));
	}
	
	function aktivasi_video($id_video, $status, $userupdate){
		$date = mdate('%Y-%m-%d %H:%i:%s', time());
		$status = trim($status);
	
		if(!empty($status) && $status === 'aktifkan'){
			$aktif = 1;
		}else{
			$aktif = 0;
		}
	
		$fields = array(
				$this->_is_active	=> $aktif,
				$this->_last_update	=> $date,
				$this->_userid		=> $userupdate
		);
	
		$this->db->where($this->_id_video, $id_video);
		$this->db->update($this->_table_video, $fields);
	}
}