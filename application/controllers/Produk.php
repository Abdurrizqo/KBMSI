<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{


	public function index()
	{
		$data['css'] = 'produkNEW';
		$this->load->view('template/NewHeader', $data);
		$this->load->view('NewProduk');
		$this->load->view('template/NewFooter');
	}
}
