<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {


	public function index()
	{
		$data['css'] = 'produkNEW';
		$this->load->view('template/headerNew' , $data);
		$this->load->view('produkNEW');
		$this->load->view('template/footer');
	}
}
