<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_admin_berita extends CI_Model{
	
	private $_tabel = 'KONTEN'; 
	
	function __construct(){
		parent::__construct();
		$this->load->helper('date');
	}
	
	function daftar_berita($super_user = 0, $userid = NULL){
		if($super_user == 0 && $userid !== NULL){
			$this->db->where('USERID', $userid);
			$this->db->order_by('LAST_UPDATE', 'DESC');
			return $this->db->get($this->_tabel)->result_array();
		}elseif ($super_user == 1){
			$this->db->order_by('LAST_UPDATE', 'DESC');
			return $this->db->get($this->_tabel)->result_array();
		}
	}
	
	function edit_berita($id_berita = NULL, $super_user = 0, $userid = NULL){
		if($super_user == 0 && $userid !== NULL){
			$this->db->where('OWNER', $userid);
			$this->db->where('ID_KONTEN', $id_berita);
			return $this->db->get($this->_tabel)->result_array();
		}elseif($super_user == 1){
			$this->db->where('ID_KONTEN', $id_berita);
			return $this->db->get($this->_tabel)->result_array();
		}
	}
	
	function simpan_edit_berita($data){
		$judul = $data[0];
		$konten = $data[1];
		$aktifkan = $data[2];
		$k_kategori = $data[3];
		$userid = $data[4];
		$id = $data[5];
		$gambar = $data[6];
		$date = mdate('%Y-%m-%d %H:%i:%s', time());
		$this->db->where('ID_KONTEN', $id);
		$field = array('JUDUL' => $judul,
						'KONTEN' => $konten,
						'gambar' => $gambar,
						'K_KATEGORI' => $k_kategori,
						'USERID' => $userid,
						//'LAST_UPDATE' => $date,
						'IS_ACTIVE' => $aktifkan);
		$this->db->update($this->_tabel, $field);
		// var_dump($embed); die;
		return $this->db->affected_rows();
	}
	
	function tambah_berita($data /*, $file = FALSE, $filename = NULL*/){
		$id_konten = mdate('%Y%m%d%H%i%s', time());
		$judul = $this->db->escape_str(htmlentities($data['judul']));
		$gambar = $this->db->escape_str($data['gambar']);
		$konten = $data['konten'];
		$kategori = $this->db->escape_str($data['k_kategori']);
		$aktif = $this->db->escape_str($data['aktif']);
		// $embed = $this->db->escape_str($data['embed']);
		$id = $this->db->escape_str($data['id']);
		
		// preg_match_all('/<img[^>]+\/>/i', $konten, $result);
		// $i = 0;
		// foreach ($result[0] as $wk){
		// 	$pattern = '/src=[\'"]?([^\'" >]+)[\'" >]/';
		// 	preg_match($pattern, $result[0][$i], $link);
		// 	$link = $link[1];
		// 	$link = urldecode($link);
		// 	$konten = str_replace ( $result[0][$i], '<a class="image-popup-no-margins" href="'.$link.'">'.$result[0][$i].'</a>', $konten);
		// 	$i++;
		// }
		
		$rows = array();
		if($gambar === TRUE){
			$rows = array('ID_KONTEN' => $id_konten,
							'JUDUL' => $judul,
							'KONTEN' => $konten,
							'gambar' => $gambar,
							'K_KATEGORI' => $kategori,
							'USERID' => $id,
							'LAST_UPDATE' => mdate('%Y-%m-%d %H:%i:%s', time()),
							'IS_ACTIVE' => $aktif,
							'OWNER' => $id
							// 'embed' => $embed
			);
		}else{
			$rows = array('ID_KONTEN' => $id_konten,
					'JUDUL' => $judul,
					'KONTEN' => $konten,
					'gambar' => $gambar,
					'K_KATEGORI' => $kategori,
					'USERID' => $id,
					'LAST_UPDATE' => mdate('%Y-%m-%d %H:%i:%s', time()),
					'IS_ACTIVE' => $aktif,
					'OWNER' => $id
					// 'embed' => $embed
			);
		}
		
		$this->db->insert($this->_tabel, $rows);
		return $this->db->affected_rows();
	}
	
	function drop_down_kategori(){
		return $this->db->query("SELECT * FROM KATEGORI WHERE IS_ACTIVE<>'0' ORDER BY K_KATEGORI ASC;")->result_array();
	}
	
	function hapus_berita($id){
		//hapus foto jika ada
		$query = $this->db->query("SELECT GAMBAR FROM ".$this->_tabel." WHERE ID_KONTEN=".$id)->result_array();
		foreach ($query as $field){
			$gambar = $field['GAMBAR'];
		}
		if($query != NULL){
			unlink('uploads/konten/'.$gambar);
			//echo $gambar;
		}
		//-------------------
		return $this->db->delete($this->_tabel, array('ID_KONTEN'=> $id));
	}
	
	function jumlah_berita(){
		return $this->db->count_all('KONTEN');
	}
	
	function jumlah_berita_user($user = NULL){
		$this->db->where('OWNER', $user);
		$query = $this->db->get('KONTEN')->num_rows();
		return $query;
	}
	
	function aktivasi($userid, $id, $status){
		$date = mdate('%Y-%m-%d %H:%i:%s', time());
		
		$this->db->where('ID_KONTEN', $id);
		$field = array(
				'USERID'		=> $userid,
				'LAST_UPDATE'	=> $date,
				'IS_ACTIVE'		=> $status
		);
		$this->db->update($this->_tabel, $field);
	}
	
	function show_kategori(){
		return $this->db->get('KATEGORI')->result_array();
	}
}
