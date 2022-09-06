<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Member extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
	}
	
	function index($home = NULL){
		if($this->session->userdata('logged_in')){
			
			$sess = $this->session->userdata('logged_in');
			$id = $sess['id'];
			
			$this->load->model('Users_model');
			$data['user'] = $this->Users_model->get_kolom($id, 'NAMA');
			$data['ajax'] = TRUE;
			
			$this->load->view('member/header', $data);
			$this->load->view('member/home_member', $data);
			$this->load->view('member/footer');
		}else{
			$this->load->view('member/login');
		}
	}
	
	function backup(){
		$this->load->model('administrasi/m_backup_db');
		$this->m_backup_db->backup();
		redirect('member', 'refresh');
	}
	
	function validate(){
		$this->load->model('Users_model');
		$query = $this->Users_model->validate_login();
		
		if($query){
			foreach ($this->Users_model->get_user() AS $row){
				$data_session = array('id' => $row['USERID'], 'is_super' => $row['IS_SUPER']);
			}
			$this->session->set_userdata('logged_in', $data_session);
			/* print_r($this->session->userdata('logged_in'));
			return; */
			redirect('member', 'refresh');
		}else{
			redirect('member', 'refresh');
		}
	}
	
	function berita($aksi = NULL, $id_berita = NULL, $aktif = NULL){
		$this->load->database();
		$this->load->model('administrasi/m_admin_berita');
		
		$sess = $this->session->userdata('logged_in');
		$id = $sess['id'];
		$is_super = $sess['is_super'];
		
		$tinymce['editor'] = FALSE;
		$tinymce['cbscript'] = TRUE;
		$tinymce['ajax'] = TRUE;
		
		$checkbox['checkbox'] = TRUE;
		
		$this->load->model('Users_model');
		$checkbox['user'] = $this->Users_model->get_kolom($id, 'NAMA');
		
		$this->load->view('member/header', $checkbox);		
		
		if($aksi === NULL OR $aksi === 'index'){
			$this->load->model('m_pagination');
			$this->load->library('pagination');
			
			$config = array();
			$config['base_url']		= base_url().'member/berita/index';
			if($is_super == 1){
				$config['total_rows'] = $jml = $this->m_admin_berita->jumlah_berita();
			}elseif($is_super == 0){
				$config['total_rows'] = $jml = $this->m_admin_berita->jumlah_berita_user($id);
			}
			$config['per_page']		= 15;
			$config['uri_segment']	= 4;
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = '&laquo;';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = '&raquo;';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['next_link'] = '&gt;';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['prev_link'] = '&lt;';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0)">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
			
			$page = ($this->uri->segment(4))? $this->uri->segment(4) : 0;
			if($is_super == 1){
				$d["results"] = $this->m_pagination->page('KONTEN', 'ID_KONTEN', 'DESC', $config["per_page"], $page);
			}elseif($is_super == 0){
				$d["results"] = $this->m_pagination->page('KONTEN', 'ID_KONTEN', 'DESC', $config["per_page"], $page, 'OWNER', $id);
				//echo $this->db->last_query();
			}
			$d["links"] = $this->pagination->create_links();
			$d['ajax'] = FALSE;
			
			$this->load->view('member/container_berita', $d);
		}elseif( $aksi === 'edit' ){
			$tinymce['editor'] = TRUE;
			if ($is_super == 1) {
				$query['data'] = $this->m_admin_berita->edit_berita($id_berita, 1, $id);
				$query['kategori'] = $this->m_admin_berita->show_kategori();
				$query['ajax'] = TRUE;
				$this->load->view('member/edit_berita', $query);
				if($_POST){					
					$judul = $this->input->post('judul', TRUE);
					$gambar = $this->input->post('gambar', TRUE);
					// $embed = htmlentities($this->input->post('embed'), ENT_QUOTES, 'UTF-8');
					$konten = $this->input->post('konten', FALSE);
					$aktifkan = $this->input->post('aktifkan', TRUE);
					$k_kategori = $this->input->post('k_kategori',TRUE);
					$data = array($judul, $konten, $aktifkan, $k_kategori, $id, $id_berita);		
					var_dump($this->m_admin_berita->simpan_edit_berita($data)); die;
					if($this->m_admin_berita->simpan_edit_berita($data) > 0){
						redirect('member/berita', 'refresh');
					}else{
						echo 'gagal';
					}
				}
			}elseif ($is_super == 0) {
				$query['data'] = $this->m_admin_berita->edit_berita($id_berita, 0, $id);
				$query['kategori'] = $this->m_admin_berita->show_kategori();
				$this->load->view('member/edit_berita', $query);
				if($_POST){
					$judul = $this->input->post('judul', TRUE);
					$gambar = $this->input->post('gambar', TRUE);
					// $embed = htmlentities($this->input->post('embed'), ENT_QUOTES, 'UTF-8');
					$konten = $this->input->post('konten', FALSE);
					$aktifkan = $this->input->post('aktifkan', TRUE);
					$k_kategori = $this->input->post('k_kategori',TRUE);
					$data = array($judul, $konten, $aktifkan, $k_kategori, $id, $id_berita, $gambar);
					if($this->m_admin_berita->simpan_edit_berita($data) > 0){
						redirect('member/berita', 'refresh');
					}else{
						echo 'gagal';
					}
				}
			}
		}else if($aksi === 'tambah'){
			$tinymce['editor'] = TRUE;
			$judul = $this->input->post('judul', TRUE);
			$gambar = $this->input->post('gambar', TRUE);
			// $embed = htmlentities($this->input->post('embed'), ENT_QUOTES, 'UTF-8');
			$konten = $this->input->post('konten', FALSE);
			$k_kategori = $this->input->post('kategori',TRUE);
			$aktifkan = $this->input->post('aktif', TRUE);
			//$userfile = $this->input->post('userfile', TRUE);
			$dropdown_kategori['kategori'] = $this->m_admin_berita->drop_down_kategori();
			$dropdown_kategori['ajax'] = TRUE;
			$this->load->view('member/tambah_berita', $dropdown_kategori);
			if($_POST){
				// $gambar = $_FILES['gambar'];
				// if(!$gambar='') {
				// 	$config['upload_path']          = './image/';
				// 	$config['allowed_types']        = 'gif|jpg|jpeg|png';
				// 	$config['max_size']             = 3000;
				// 	$config['overwrite']		= TRUE;
				// 	$config['file_name']		= mdate('%Y%m%d%H%i%s', time());
					
				// 	$this->load->library('upload', $config);
				// 	if(!$this->upload->do_upload('gambar')) {
				// 		echo "gagal"; die();
				// 	} else {
				// 		$gambar=$this->upload->data('file_name');
				// 	}
				// }
				$data['judul'] = $judul;
				$data['gambar'] = $gambar;
				$data['konten'] = $konten;
				// $data['embed'] = $embed;
				$data['k_kategori'] = $k_kategori;
				$data['aktif'] = $aktifkan;
				$data['id'] = $id; 
				//$data['userfile'] = $userfile;
				
// 				if(trim($userfile) === NULL){
// 					$affected =	$this->m_admin_berita->tambah_berita($data, TRUE, $userfile);
// 				}else{
				$affected =	$this->m_admin_berita->tambah_berita($data);
				//}
				//echo $affected;
				redirect('member/berita', 'refresh');
			}
		}else if ($aksi === 'hapus'){
			$this->m_admin_berita->hapus_berita($id_berita);
			redirect('member/berita', 'refresh');
		}elseif($aksi === 'aktivasi'){
			if ($aktif === 'aktifkan') {
				$aktif = 1;
			}else{
				$aktif = 0;
			}
			$this->m_admin_berita->aktivasi($id, $id_berita, $aktif);
			redirect('member/berita', 'refresh');
		}else{
			redirect('member/', 'refresh');
		}

		$this->load->view('member/footer', $tinymce);
	}
	
	function users($aksi = 'list', $userid = NULL, $status = NULL){
		$sess = $this->session->userdata('logged_in');
		$id = $sess['id'];
		$is_super = $sess['is_super'];
		if ($is_super != 1) redirect('member/', 'refresh');
		
		$this->load->database();
		$this->load->model('administrasi/m_admin_user');
		
		$this->load->model('Users_model');
		$data['user'] = $this->Users_model->get_kolom($id, 'NAMA');
		
		$this->load->view('member/header', $data);
		
		if($aksi === NULL OR $aksi === 'list'){
			$query['data'] = $this->m_admin_user->daftar_user($id);
			$query['ajax'] = FALSE;
			$this->load->view('member/container_users', $query);
		}elseif ($aksi === 'tambah'){
			$query['ajax'] = FALSE;
			$this->load->view('member/tambah_user', $query);
			if($_POST){
				$data['userid'] = $this->input->post('userid', TRUE);
				$data['password'] = $this->input->post('password', TRUE);
				$data['nama'] = $this->input->post('nama', TRUE);
				$data['super'] = $this->input->post('super', TRUE);
				$data['aktifkan'] = $this->input->post('aktifkan', TRUE);
				$this->m_admin_user->tambah_user($data);
				redirect('member/users/list/', 'refresh');
			}
		}elseif ($aksi === 'edit'){
			$query['data'] = $this->m_admin_user->edit_user($userid);
			$query['ajax'] = TRUE;
			$this->load->view('member/edit_user', $query);
			
			if($_POST){
				$field['userid']		= trim($this->input->post('username', TRUE));
				$field['password']		= trim($this->input->post('new_password', TRUE));
				$field['nama']			= trim($this->input->post('nama', TRUE));
				$field['is_super']		= trim($this->input->post('is_super', TRUE));
				$field['is_active']		= trim($this->input->post('is_active', TRUE));
				if ($this->m_admin_user->simpan_edit_user($id, $field) == 1){
					redirect('member/users/', 'refresh');
				}
			}
		}elseif ($aksi === 'hapus'){
			$this->m_admin_user->hapus_user($userid);
			redirect('member/users/', 'refresh');
		}elseif($aksi === 'aktivasi' && $userid !== NULL && $status !== NULL){
			$this->m_admin_user->aktivasi($userid, $status, $id);
			redirect('member/users/', 'refresh');
		}
		
		$this->load->view('member/footer');
	}
	
	function kategori($aksi=NULL, $id_kategori=NULL){
		$sess = $this->session->userdata('logged_in');
		$id = $sess['id'];
		$is_super = $sess['is_super'];
		if ($is_super != 1) redirect('member/', 'refresh');
		
		$this->load->database();
		$this->load->model('administrasi/m_admin_kategori');
		
		$this->load->model('Users_model');
		$data['user'] = $this->Users_model->get_kolom($id, 'NAMA');
		
		$this->load->view('member/header', $data);
		if($aksi === 'list' OR $aksi === NULL){
			$query['data'] = $this->m_admin_kategori->daftar_kategori();
			$this->load->view('member/container_kategori', $query);
		}elseif ($aksi === 'tambah'){
			$this->load->view('member/tambah_kategori');
			if($_POST){
				$nama = $this->input->post('nama', TRUE);
				$aktif = $this->input->post('aktif', TRUE);
				$data = array($kode, $nama, $id, $aktif);
				$affected =	$this->m_admin_kategori->tambah_kategori($data);
				if($affected > 0){
					redirect('member/kategori/', 'refresh');
				}else{
					redirect('member/kategori/', 'refresh');
				}
			}
		}elseif ($aksi === 'edit' && $id_kategori !== NULL){
			$query['row'] = $this->m_admin_kategori->edit_kategori($id_kategori);
			$this->load->view('member/edit_kategori', $query);
			if($_POST){
				$k_kategori = $this->input->post('id', TRUE);
				$kategori = $this->input->post('nama', TRUE);
				$is_active = $this->input->post('aktifkan', TRUE);
				$fileds = array($k_kategori, $kategori, $is_active, $id);
				$affected = $this->m_admin_kategori->simpan_edit_kategori($fileds);
				if($affected > 0){
					redirect('member/kategori', 'refresh');
				}else{
					redirect('member/kategori/', 'refresh');
				}
			}
		}elseif ($aksi === 'hapus' && $id_kategori !== NULL){
			$this->m_admin_kategori->hapus_kategori($id_kategori);
			redirect('member/kategori', 'refresh');
		}
		$this->load->view('member/footer');
	}
	
	function upload_gambar_konten(){
		$this->load->helper('date');
		
		$config['upload_path'] 		= 'uploads/konten/';
		$config['allowed_types'] 	= 'gif|jpg|jpeg|png';
		$config['max_size']			= '1024';
		$config['overwrite']		= TRUE;
		$config['file_name']		=  mdate('%Y%m%d%H%i%s', time());
		
		$this->load->library('upload', $config);
		
		if(!$this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			return $error;
		}else{
			return $this->upload->file_ext;
		}
	}
	
	function video($aksi = NULL, $id_video = NULL, $status = NULL){
		$this->load->database();
		$sess = $this->session->userdata('logged_in');
		$id = $sess['id'];
		$is_super = $sess['is_super'];
		$this->load->model('Users_model');
		$data['user'] = $this->Users_model->get_kolom($id, 'NAMA');
		
		$this->load->model('administrasi/m_admin_gallery');
		
		if($aksi === NULL OR $aksi === 'index'){
			$data['video_list'] = $this->m_admin_gallery->list_video();
			
			$this->load->view('member/header', $data);
			$this->load->view('member/container_video', $data);
			$this->load->view('member/footer');
			
			if($_POST){
				$this->m_admin_gallery->tambah_video($id);
				redirect('member/video', 'refresh');
			}
		}elseif($aksi === 'hapus' && $id_video !== NULL){
			$this->m_admin_gallery->hapus_video($id_video);
			redirect('member/video', 'refresh');
		}elseif($aksi === 'aktivasi' && $id_video !== NULL && $status !== NULL){
			$this->m_admin_gallery->aktivasi_video($id_video, $status, $id);
			redirect('member/video', 'refresh');
		}else{
			redirect('member/video', 'refresh');
		}
	}
	
	function gallery($aksi = NULL, $id_album = NULL, $status = NULL, $id_foto_set = NULL){
		$sess = $this->session->userdata('logged_in');
		$id = $sess['id'];
		$is_super = $sess['is_super'];
		
		$script['script'] = 'gallery-upload';
		$this->load->model('Users_model');
		$data['user'] = $this->Users_model->get_kolom($id, 'NAMA');
		
		$this->load->database();
		$this->load->model('administrasi/m_admin_gallery');
		
		if($aksi === NULL OR $aksi === 'index'){
			$data['data_table'] = $this->m_admin_gallery->list_album($is_super, $id_album);
			$data['ajax'] = TRUE;
			
			$this->load->view('member/header', $data);
			$this->load->view('member/container_gallery', $data);
			$this->load->view('member/footer', $data);

		}elseif($aksi === 'tambah'){
			$data['users'] = $this->m_admin_gallery->user_album();
			$data['ajax'] = TRUE;
			
			$this->load->view('member/header', $data);
			$this->load->view('member/tambah_gallery', $data);
			$this->load->view('member/footer');
			if($_POST){
				$fields['nama'] = $this->input->post('nama', TRUE);
				$fields['pemilik'] = $this->input->post('pemilik', TRUE);
				$fields['aktif'] = $this->input->post('aktif', TRUE);
				
				if ($this->m_admin_gallery->tambah_album($fields)) {
					redirect('member/gallery', 'refresh');
				}else{
					redirect('member/gallery', 'refresh');
				}
			}
		}elseif($aksi === 'hapus' && $id_album !== NULL){
			$this->m_admin_gallery->hapus_album($id_album);
			redirect('member/gallery', 'refresh');
		}elseif($aksi === 'tambah-foto' && $id_album !== NULL){
			$data = array(
				'act' => $id_album,
				'img_list' => $this->m_admin_gallery->list_foto($is_super, $id_album)
			);
			
			$data['ajax'] = TRUE;
			$this->load->model('Users_model');
			$data['user'] = $this->Users_model->get_kolom($id, 'NAMA');
			$data['album'] = $id_album;
			
			$this->load->view('member/header', $data);
			$this->load->view('member/tambah_foto', $data);
			$this->load->view('member/footer');
			if ($_POST) {
				$this->load->helper('date');
				
				$date = mdate('%Y-%m-%d %H:%i:%s', time());
				
				$id_foto = $nama = '';
				$nama = $this->input->post('url', TRUE);
				
// 				$config['upload_path'] 		= 'uploads/gallery/';
// 				$config['allowed_types'] 	= 'gif|jpg|jpeg|png';
// 				$config['max_size']			= '1024';
// 				$config['overwrite']		= TRUE;
// 				$config['remove_spaces']	= TRUE;

// 				$this->load->library('upload');
// 				$files = $_FILES;
// 				$cpt = count($_FILES['userfile']['name']);
// 				for($i=0; $i<$cpt; $i++){
// 					$_FILES['userfile']['name']= $files['userfile']['name'][$i];
// 					$_FILES['userfile']['type']= $files['userfile']['type'][$i];
// 					$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
// 					$_FILES['userfile']['error']= $files['userfile']['error'][$i];
// 					$_FILES['userfile']['size']= $files['userfile']['size'][$i];
// 					$this->upload->initialize($config);
// 					if($this->upload->do_upload()){
// 						$nama = $this->upload->file_name;
				$id_foto = md5(sha1($date).sha1($nama));
				$this->m_admin_gallery->tambah_foto($id_foto, $id_album, $nama, $id);
// 					}
// 				}
				redirect('member/gallery/tambah-foto/'.$id_album);
			}
		}elseif($aksi === 'aktivasi' && $id_album !== NULL && $status !== NULL){
			$status = ($status === 'aktifkan')? 1: 0;
			$this->m_admin_gallery->aktivasi($id_album, $status, $id);
			redirect('member/gallery/', 'refresh');
		}elseif($aksi === 'set-cover' && $id_album !== null && $status === 'on' && $id_foto_set !== NULL){
			$this->m_admin_gallery->set_cover($id_album, $id_foto_set);
			redirect("member/gallery/tambah-foto/$id_album", 'refresh');
		}
	}
	
	function komentar($aksi = NULL, $id_berita = NULL, $id_komentar = NULL, $banned = NULL){
		$this->load->model(array('comment', 'Users_model'));
		$sess = $this->session->userdata('logged_in');
		$id = $sess['id'];
		$is_super = $sess['is_super'];

		$d['user'] = $this->Users_model->get_kolom($id, 'NAMA');

		if($aksi === NULL OR $aksi === 'index'){
			$d['results'] = $this->comment->show_comment(TRUE);
			$this->load->view('member/header', $d);
			$this->load->view('member/container_comment', $d);
			$this->load->view('member/footer');
		}elseif($aksi === 'list' && $id_berita !== NULL){
			$this->comment->read_all($id_berita);
			$d['results'] = $this->comment->list_comment($id_berita);
			
			$this->load->view('member/header', $d);
			$this->load->view('member/container_comment_list', $d);
			$this->load->view('member/footer');
		}else if($aksi === 'balas' && $id_berita !== NULL && $id_komentar !== NULL){
			$d['results'] = $this->comment->view_reply($id_berita, $id_komentar);
			$d['editor'] = TRUE;
			$d['reply_by'] = $id;
			$this->load->view('member/header', $d);
			$this->load->view('member/container_balas_komentar', $d);
			$this->load->view('member/footer');
			
			if($_POST){
				$id_berita 		= $this->input->post('id_berita', TRUE);
				$root_komentar 	= $this->input->post('root_komentar', TRUE);
				$user 			= $this->input->post('user', TRUE);
				$isi 			= $this->input->post('isi', TRUE);
				
				$this->comment->reply($id_berita, $root_komentar, $user, $isi);
				redirect('member/komentar/list/'.$id_berita, 'refresh');
			}
		}else if ($aksi === 'hapus' && $id_berita !== NULL && $id_komentar !== NULL){
			$this->comment->delete($id_berita, $id_komentar);
			redirect('member/komentar/list/'.$id_berita, 'refresh');
		}else if ($aksi === 'ban' && $id_berita !== NULL && $id_komentar !== NULL && $banned !== NULL){
			$this->comment->banned($id_berita, $id_komentar, $id, $banned);
			redirect('member/komentar/list/'.$id_berita, 'refresh');
		}else{
			redirect('member/', 'refresh');
		}
	}
	
	function hapus_foto($id_foto){
		$this->load->database();
		$this->load->model('administrasi/m_admin_gallery');
		$this->m_admin_gallery->hapus_foto($id_foto);
		redirect('member/gallery/', 'refresh');
	}
	
	function logout(){
		$this->session->unset_userdata('logged_in');
		redirect('member/', 'refresh');
	}
}
