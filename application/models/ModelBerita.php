<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelBerita extends CI_Model {

  private $table = 'KONTEN';

	function all($limit = 0, $offset = 0) {
    $this->db->order_by('ID_KONTEN', 'DESC');
    return $this->db->get($this->table, $limit, $offset);
  }

  function select($id) {
    $this->db->where('ID_KONTEN', $id);
    return $this->db->get($this->table);
  }

  function select_judul($judul, $limit = 0, $offset = 0) {
    $this->db->like('JUDUL', $judul);
    $this->db->order_by('ID_KONTEN', 'DESC');
    return $this->db->get($this->table, $limit, $offset);
  }

  public function getJumlahBerita()
  {
    return $this->db->count_all_results($this->table, FALSE);
  }
}
