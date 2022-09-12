<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelBerita', 'M');
	}

	public function index()
	{
		$data['berita'] = $this->M->all(6, 0)->result();
		$data['css'] = 'style';
		foreach ($data['berita'] as $b) {
			$lastUpdateDateTime = new DateTime($b->LAST_UPDATE);
			$b->LAST_UPDATE = $lastUpdateDateTime->format('d M Y');
			$truncatedKonten = substr(strip_tags(preg_replace('/<img[^>]+>/i', '', $b->KONTEN)), 0, 200);
			$b->KONTEN = $truncatedKonten . ' ...';
		}
		$this->load->view('template/headerNew', $data);
		$this->load->view('home', $data);
		// $this->load->view('template/footer');
	}
}
