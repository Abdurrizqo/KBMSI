<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelembagaan extends CI_Controller{

    public function index(){
        $this->load->view('template/header');
        $this->load->view('kelembagaan');
        $this->load->view('template/footer');
    }

    public function emsi($departemen = NULL){
        $this->load->view('template/header');
        if($departemen == NULL){
            $this->load->view('lembaga/v_emsi');
        } else {
            switch ($departemen) {
                case 'non-dept':
                    $this->load->view('lembaga/emsi/nonDept');
                    break;
                case 'p2s':
                    $this->load->view('lembaga/emsi/p2s');
                    break;
                case 'psdm':
                    $this->load->view('lembaga/emsi/psdm');
                    break;
                case 'kwu':
                    $this->load->view('lembaga/emsi/kwu');
                    break;
                case 'medkominfo':
                    $this->load->view('lembaga/emsi/medkominfo');
                    break;
                case 'sosma':
                    $this->load->view('lembaga/emsi/sosma');
                    break;
                case 'advokesma':
                    $this->load->view('lembaga/emsi/advokesma');
                    break;
            }
        }
        $this->load->view('template/footer');
    }

    public function bpmsi($komisi = NULL){
        $this->load->view('template/header');
        
        if($komisi === null){
            $this->load->view('lembaga/v_bpmsi');
        } else {
            switch ($komisi) {
                case 'huu':
                    $this->load->view('lembaga/bpmsi/huu');
                    break;
                case 'advokasi':
                    $this->load->view('lembaga/bpmsi/advokasi');
                    break;
                case 'kominfo':
                    $this->load->view('lembaga/bpmsi/kominfo');
                    break;
            }
        }
        
        $this->load->view('template/footer');
    }
}