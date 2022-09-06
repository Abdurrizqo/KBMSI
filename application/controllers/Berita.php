<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('ModelBerita', 'M');
	}

	public function index()
	{
		if ($this->uri->segment(3) == NULL || $this->uri->segment(3) < 1) redirect(base_url() . 'Berita/index/1');

		$this->load->library('pagination');
		$config['base_url'] = base_url() . 'Berita/index/';
		$config['total_rows'] = $this->M->all()->num_rows();
		$config['per_page'] = 10;
		$config['use_page_numbers'] = TRUE;
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');
		$this->pagination->initialize($config);

		$offset = ($this->uri->segment(3) - 1) * $config['per_page'];
		$data['css'] = 'style';
		$data['berita'] = $this->M->all($config['per_page'], $offset)->result();
		foreach ($data['berita'] as $b) {
			$lastUpdateDateTime = new DateTime($b->LAST_UPDATE);
			$b->LAST_UPDATE = $lastUpdateDateTime->format('d M Y');
			$truncatedKonten = substr(strip_tags(preg_replace('/<img[^>]+>/i', '', $b->KONTEN)), 0, 400);
			$b->KONTEN = $truncatedKonten . ' ...';
		}

		$this->load->view('template/headerNew', $data);
		$this->load->view('semua_berita', $data);
		$this->load->view('template/footer');
	}

	function id() {
		$id = $this->uri->segment(3);
		$data['berita'] = $this->M->select($id)->result();
		$data['css'] = 'style';

		$this->load->view('template/headerNew', $data);
		$this->load->view('berita', $data);
		$this->load->view('template/footer');
	}

	function search() {
		$keyword = $this->input->get('keyword');
		$data['css'] = 'headerNEW';

		$this->load->library('pagination');
		$config['base_url'] = base_url() . 'Berita/search/';
		$config['total_rows'] = $this->M->select_judul($keyword)->num_rows();
		$config['per_page'] = 10;
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');
		$config['reuse_query_string'] = TRUE;
		$this->pagination->initialize($config);

		$offset = $this->uri->segment(3);
		$data['berita'] = $this->M->select_judul($keyword, $config['per_page'], $offset)->result();
		foreach ($data['berita'] as $b) {
			$lastUpdateDateTime = new DateTime($b->LAST_UPDATE);
			$b->LAST_UPDATE = $lastUpdateDateTime->format('d M Y');
			$truncatedKonten = substr(strip_tags(preg_replace('/<img[^>]+>/i', '', $b->KONTEN)), 0, 400);
			$b->KONTEN = $truncatedKonten . ' ...';
		}

		$this->load->view('template/headerNew', $data);
		$this->load->view('semua_berita', $data);
		$this->load->view('template/footer');
	}
}
