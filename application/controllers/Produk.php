<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

	public function index()
	{
		$this->load->view('template/NewHeader');
		$this->load->view('NewProd');
		$this->load->view('template/NewFooter');
	}
}
