<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Jobs extends CI_Model
{

  function cari($keyword, $offset = 0)
  {
    // persiapkan curl
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, "https://www.kalibrr.id/api/job_board/search?text=$keyword&offset=0&limit=10/");

    // return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //gatau buat apa, dapet dari stack overflow
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // $output contains the output string
    $output = curl_exec($ch);

    // tutup curl
    curl_close($ch);

    // mengembalikan hasil curl
    return json_decode($output);
  }

  // function select_judul($judul, $limit = 0, $offset = 0) {
  //   $this->db->like('JUDUL', $judul);
  //   $this->db->order_by('ID_KONTEN', 'DESC');
  //   return $this->db->get($this->table, $limit, $offset);
  // }

}
