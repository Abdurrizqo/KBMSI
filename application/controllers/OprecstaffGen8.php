<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OprecstaffGen8 extends CI_Controller
{

	var $api = "";
	function __construct(){
		parent::__construct();
		$this->api="http://apiauth.kbmsi.or.id/index.php";
		$this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
				$this->load->model('M_form');
	}

	public function index()
	{
		$this->load->view('OprecGen8/comming');
	}

	public function login()
	{
		$this->load->view('OprecGen8/login');
	}

	public function formulir(){
		$nim = $this->input->post('nim');
		$pass = $this->input->post('password');
		// $nim = "185150401111002";
		// $password = "ribawanto19";
		$person = [
    "nim" => $nim,
    "password" => $pass
		];

     // membuat JSON dari array
     $data1 = json_encode($person);
		 $data2 = json_decode($this->curl->simple_post($this->api, $data1, array(CURLOPT_BUFFERSIZE => 10)));
		 // echo $data2;
		 $angkatan = substr($nim, 0, 5);
		 // var_dump($angkatan);

		 // if ($angkatan != '19515' || $angkatan != '20515') {
			//  $angkatan2 = substr($nim, 0, 2);
			// $this->session->set_flashdata('message', 'maaf angkatan 20'.$angkatan2.' tidak bisa mendaftar');
 			// redirect('OprecstaffGen8/statusangkatan');
		 // }
		 //
		 // $cek = $this->M_form->cekDaftar($nim);
		 // if($cek != 0){
			//  redirect('OprecstaffGen8/statusdaftar');
		 // }

		 if ($data2 == null) {
			 $this->session->set_flashdata('message', 'nim atau password salah');
			redirect('OprecstaffGen8/login');
		 }
		 else {
			 $session_data = array(
       'nama'  => $data2->data->nama,
       'nim'     => $data2->data->nim
       );
       $this->session->set_userdata($session_data);
			 $dataA['nama'] = $data2->data->nama;
			 $dataA['nim'] = $data2->data->nim;
			 // var_dump($data2);
			 // redirect('welcome/formulir', $dataA);
			 $this->load->view('OprecGen8/formulir', $dataA);
		 }
	}

	public function isi_form(){
		if (!isset($_SESSION['nama'])) {
			redirect('OprecstaffGen8/login');
		}

		else if ($this->input->post('waktu1')==$this->input->post('waktu2')) {
			$dataA['nama'] = $this->session->userdata('nama');
			$dataA['nim'] = $this->session->userdata('nim');
			$this->session->set_flashdata('messagescreening', 'opsi waktu screening tidak boleh sama');
			$this->load->view('OprecGen8/formulir', $dataA);
		}

		else{
		$nama = $this->session->userdata('nama');
    $nim = $this->session->userdata('nim');
    $noHp = $this->input->post('noHp');
    $idLine = $this->input->post('idLine');
    $email = $this->input->post('email');
    $waktu1 = $this->input->post('waktu1');
    $waktu2 = $this->input->post('waktu2');
    $pildep1 = $this->input->post('pildep1');
		$pilkom1 = $this->input->post('pilkom1');
		$pildep2 = $this->input->post('pildep2');
		$pilkom2 = $this->input->post('pilkom2');
    $link = $this->input->post('link');

		$data = array(
        'nama' => $nama,
        'nim' => $nim,
        'noHp ' => $noHp,
        'idLine' => $idLine,
        'email' => $email,
        'waktu1' => $waktu1,
        'waktu2' => $waktu2,
				'pildep1' => $pildep1,
        'pilkom1' => $pilkom1,
				'pildep2' => $pildep2,
        'pilkom2' => $pilkom2,
        'link' => $link
			);
		$this->M_form->insertForm($data);
		$this->session->sess_destroy();
		redirect('OprecstaffGen8/status');
	}
	}

	public function status(){
		$this->load->view('OprecGen8/thankyou');
	}

	public function statusdaftar(){
		$this->load->view('OprecGen8/sudahdaftar');
	}

	public function statusangkatan(){
		$this->load->view('OprecGen8/status_angkatan');
	}

}


/* End of file Oprecstaff.php */
/* Location: .//D/Library/Desktop/Oprecstaff.php */
