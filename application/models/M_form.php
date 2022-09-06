<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Note:
// RA = ra = rahang atas || RB = rb = rahang bawah
// ga = gigi atas || gb = gigi bawah
// raT = rahang atas tersedia || rbT = rahang bawah tersedia
// raD = rahang atas dibutuhkan || rbD = rahang bawah dibutuhkan

class M_Form extends CI_Model
{
   public function insertForm($data){
     $this->db->insert('pendaftar', $data);
   }

   public function cekDaftar($nim){
   $result = array();
    $this->db->where('nim', $nim);
    $query = $this->db->get('pendaftar');
    $result = $query->result();
    if (count($result)>0)
    {
      return 1;
    }
    else {
      return 0;
    }
}
}
