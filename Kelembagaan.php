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
        $this->load->view('template/header');
        $this->load->view('kelembagaan');
        $this->load->view('template/footer');
    }

    public function emsi($departemen = NULL)
    {
        $this->load->view('template/header');
        if ($departemen == NULL) {
            $this->load->view('lembaga/v_emsi');
        } else {
            switch ($departemen) {
                case 'non-dept':
                    $data['kemsi'] = $this->M->showKemsi('non-dep');
                    $data['wakemsi'] = $this->M->showWakemsi('non-dep');
                    $data['sekretaris'] = $this->M->showSekretaris('non-dep');
                    $data['bendahara'] = $this->M->showBendahara('non-dep');
                    $this->load->view('lembaga/emsi/nonDept', $data);
                    break;
                case 'p2s':
                    $data['kadep'] = $this->M->showKadepDepartemen('p2s');
                    $data['wakadep'] = $this->M->showWakadepDepartemen('p2s');
                    $data['staff'] = $this->M->showStaffDepartemen('p2s');
                    $this->load->view('lembaga/emsi/p2s', $data);
                    break;
                case 'psdm':
                    $data['kadep'] = $this->M->showKadepDepartemen('psdm');
                    $data['wakadep'] = $this->M->showWakadepDepartemen('psdm');
                    $data['staff'] = $this->M->showStaffDepartemen('psdm');
                    $this->load->view('lembaga/emsi/psdm', $data);
                    break;
                case 'kwu':
                    $data['kadep'] = $this->M->showKadepDepartemen('kwu');
                    $data['wakadep'] = $this->M->showWakadepDepartemen('kwu');
                    $data['staff'] = $this->M->showStaffDepartemen('kwu');
                    $this->load->view('lembaga/emsi/kwu', $data);
                    break;
                case 'medkominfo':
                    $data['kadep'] = $this->M->showKadepDepartemen('medkominfo');
                    $data['wakadep'] = $this->M->showWakadepDepartemen('medkominfo');
                    $data['staff'] = $this->M->showStaffDepartemen('medkominfo');
                    $this->load->view('lembaga/emsi/medkominfo', $data);
                    break;
                case 'sosma':
                    $data['kadep'] = $this->M->showKadepDepartemen('sosma');
                    $data['wakadep'] = $this->M->showWakadepDepartemen('sosma');
                    $data['staff'] = $this->M->showStaffDepartemen('sosma');
                    $this->load->view('lembaga/emsi/sosma', $data);
                    break;
                case 'advokesma':
                    $data['kadep'] = $this->M->showKadepDepartemen('advokesma');
                    $data['wakadep'] = $this->M->showWakadepDepartemen('advokesma');
                    $data['staff'] = $this->M->showStaffDepartemen('advokesma');
                    $this->load->view('lembaga/emsi/advokesma', $data);
                    break;
            }
        }
        $this->load->view('template/footer');
    }

    public function bpmsi($komisi = NULL)
    {
        $this->load->view('template/header');

        if ($komisi === null) {
            $this->load->view('lembaga/v_bpmsi');
        } else {
            switch ($komisi) {
                case 'huu':
                    $data['ketua'] = $this->M->showKetuaKomisi('huu');
                    $data['anggota'] = $this->M->showAnggotaKomisi('huu');
                    $data['staff'] = $this->M->showStaffAhliKomisi('huu');
                    $this->load->view('lembaga/bpmsi/huu', $data);
                    break;
                case 'advokasi':
                    $data['ketua'] = $this->M->showKetuaKomisi('aspirasi');
                    $data['anggota'] = $this->M->showAnggotaKomisi('aspirasi');
                    $data['staff'] = $this->M->showStaffAhliKomisi('aspirasi');
                    $this->load->view('lembaga/bpmsi/advokasi', $data);
                    break;
                case 'kominfo':
                    $data['ketua'] = $this->M->showKetuaKomisi('kominfo');
                    $data['anggota'] = $this->M->showAnggotaKomisi('kominfo');
                    $data['staff'] = $this->M->showStaffAhliKomisi('kominfo');
                    $this->load->view('lembaga/bpmsi/kominfo', $data);
                    break;
            }
        }

        $this->load->view('template/footer');
    }
}
