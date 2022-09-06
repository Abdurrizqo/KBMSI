<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Jobs extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Jobs');
  }
  public function index()
  {
    if ($this->uri->segment(3) == NULL || $this->uri->segment(3) < 1) redirect(base_url() . 'Jobs/index/1');
    $this->load->library('pagination');
    $config['base_url'] = base_url() . 'Jobs/index/';
    $config['total_rows'] = $this->M_Jobs->getJobs()->count;
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

    $jobs   = $this->M_Jobs->getJobs($offset)->jobs;

    foreach ($jobs as $job) {
      $job->application_end_date = $this->parseDate($job->application_end_date);
    }
    $data['jobs'] = $jobs;
    var_dump($this->M_Jobs->test());
    
    // $this->load->view('template/header');
    // $this->load->view('JobVacancies', $data);
    // $this->load->view('template/footer');
  }

  function cari()
  {

    $keyword = $this->input->get('keyword');
    $keyword = ucwords(strtolower($keyword));
    $keyword = str_replace(" ", "%20", $keyword);

    $this->load->library('pagination');
    $config['base_url'] = base_url() . 'Jobs/cari/';
    $config['total_rows'] = $this->M_Jobs->cari($keyword)->count;
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

    if ($this->uri->segment(3) == NULL) {
      $offset = 0;
    } else {
      $offset = $this->uri->segment(3);
    };

    $jobs   = $this->M_Jobs->cari($keyword, $offset)->jobs;

    foreach ($jobs as $job) {
      $job->application_end_date = $this->parseDate($job->application_end_date);
    }
    $data['jobs'] = $jobs;
    $this->load->view('template/header');
    $this->load->view('JobVacancies', $data);
    $this->load->view('template/footer');
  }

  function listJobs()
  {
    echo "list jobs";
  }

  function parseDate($date)
  {
    $month = ["Januari", "Februari", "maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    $date = explode("-", substr($date, 0, 10));
    $numMonth = (int) $date[1] - 1;

    $result = "$date[2] $month[$numMonth] $date[0]";

    return $result;
  }
}
