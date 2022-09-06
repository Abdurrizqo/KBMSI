<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelembagaan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKelembagaan', 'M');
    }

    public function index()
    {
        $data['css'] = 'style';
        $this->load->view('template/headerNew', $data);
        $this->load->view('kelembagaanNew');
        $this->load->view('template/footer');
    }

    public function emsi($departemen = NULL)
    {
        $data['css'] = 'style';
        $this->load->view('template/headerNew', $data);
        if ($departemen == NULL) {
            $this->load->view('lembaga/v_emsiNew');
        } else {
            switch ($departemen) {
                case 'non-dept':
                    $data['kemsi'] = $this->M->showKemsi('non-dep');
                    $data['wakemsi'] = $this->M->showWakemsi('non-dep');
                    $data['sekretaris'] = $this->M->showSekretaris('non-dep');
                    $data['bendahara'] = $this->M->showBendahara('non-dep');
                    $this->load->view('lembaga/emsi/nonDeptNew', $data);
                    break;
                case 'p2s':
                    $data['kadep'] = $this->M->showKadepDepartemen('p2s');
                    $data['wakadep'] = $this->M->showWakadepDepartemen('p2s');
                    $data['staff'] = $this->M->showStaffDepartemen('p2s');
                    $this->load->view('lembaga/emsi/p2sNew', $data);
                    break;
                case 'psdm':
                    $data['kadep'] = $this->M->showKadepDepartemen('psdm');
                    $data['wakadep'] = $this->M->showWakadepDepartemen('psdm');
                    $data['staff'] = $this->M->showStaffDepartemen('psdm');
                    $this->load->view('lembaga/emsi/psdmNew', $data);
                    break;
                case 'kwu':
                    $data['kadep'] = $this->M->showKadepDepartemen('kwu');
                    $data['wakadep'] = $this->M->showWakadepDepartemen('kwu');
                    $data['staff'] = $this->M->showStaffDepartemen('kwu');
                    $this->load->view('lembaga/emsi/kwuNew', $data);
                    break;
                case 'medkominfo':
                    $data['kadep'] = $this->M->showKadepDepartemen('medkominfo');
                    $data['wakadep'] = $this->M->showWakadepDepartemen('medkominfo');
                    $data['staff'] = $this->M->showStaffDepartemen('medkominfo');
                    $this->load->view('lembaga/emsi/medkominfoNew', $data);
                    break;
                case 'sosma':
                    $data['kadep'] = $this->M->showKadepDepartemen('sosma');
                    $data['wakadep'] = $this->M->showWakadepDepartemen('sosma');
                    $data['staff'] = $this->M->showStaffDepartemen('sosma');
                    $this->load->view('lembaga/emsi/sosmaNew', $data);
                    break;
                case 'advokesma':
                    $data['kadep'] = $this->M->showKadepDepartemen('advokesma');
                    $data['wakadep'] = $this->M->showWakadepDepartemen('advokesma');
                    $data['staff'] = $this->M->showStaffDepartemen('advokesma');
                    $this->load->view('lembaga/emsi/advokesmaNew', $data);
                    break;
            }
        }
        $this->load->view('template/footer');
    }

    public function bpmsi($komisi = NULL)
    {
        $data['css'] = 'style';
        $this->load->view('template/headerNew', $data);

        if ($komisi === null) {
            $this->load->view('lembaga/v_bpmsiNew');
        } else {
            switch ($komisi) {
                case 'hukum':
                    $data['ketua'] = $this->M->showKetuaKomisi('hukum');
                    $data['anggota'] = $this->M->showAnggotaKomisi('hukum');
                    $data['staff'] = $this->M->showStaffAhliKomisi('hukum');
                    $this->load->view('lembaga/bpmsi/hukumNew', $data);
                    break;
                // case 'aspirasi':
                //     $data['ketua'] = $this->M->showKetuaKomisi('aspirasi');
                //     $data['anggota'] = $this->M->showAnggotaKomisi('aspirasi');
                //     $data['staff'] = $this->M->showStaffAhliKomisi('aspirasi');
                //     $this->load->view('lembaga/bpmsi/aspirasi', $data);
                //     break;
                case 'kominfo':
                    $data['ketua'] = $this->M->showKetuaKomisi('kominfo');
                    $data['anggota'] = $this->M->showAnggotaKomisi('kominfo');
                    $data['staff'] = $this->M->showStaffAhliKomisi('kominfo');
                    $this->load->view('lembaga/bpmsi/kominfoNew', $data);
                    break;
            }
        }

        $this->load->view('template/footer');
    }
}
