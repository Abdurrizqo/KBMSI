<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('ModelBerita', 'M');
	}

	public function index()
	{
		
	}

	public function Berita($page, $size)
	{
	  	$data['berita'] = $this->M->all($size,($page - 1) * $size)->result();
		foreach ($data['berita'] as $b) {
			$lastUpdateDateTime = new DateTime($b->LAST_UPDATE);
			$b->LAST_UPDATE = $lastUpdateDateTime->format('d M Y');
			$truncatedKonten = substr(strip_tags(preg_replace('/<img[^>]+>/i', '', $b->KONTEN)), 0, 400);
			$b->KONTEN = $truncatedKonten . ' ...';
		}

	    $response = array(
	      'content' => $data['berita'],
	      'totalPages' => ceil($this->M->getJumlahBerita() / $size));

	    $this->output
	      ->set_status_header(200)
	      ->set_content_type('application/json', 'utf-8')
	      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
	      ->_display();
	      exit;
	}
	public function detailBerita($id)
	{
		$data['detailBerita'] = $this->M->select($id)->result();


		$response = array(
	      'content' => $data['detailBerita']);

	    $this->output
	      ->set_status_header(200)
	      ->set_content_type('application/json', 'utf-8')
	      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
	      ->_display();
	      exit;	
	}
}

/* End of file Api.php */
/* Location: .//C/Users/marka/AppData/Local/Temp/fz3temp-2/Api.php */