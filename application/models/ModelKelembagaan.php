<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ModelKelembagaan extends CI_Model
{

    private $table = 'lembaga';


    function showKadepDepartemen($departemen)
    {
        $this->db->where('DEPARTEMEN', $departemen);
        $this->db->where('JABATAN', 'Ketua Departemen');
        return $this->db->get($this->table)->row_array();
    }

    function showWakadepDepartemen($departemen)
    {
        $this->db->where('DEPARTEMEN', $departemen);
        $this->db->where('JABATAN', 'Wakil Ketua Departemen');
        return $this->db->get($this->table)->result_array();
    }

    function showStaffDepartemen($departemen)
    {
        $this->db->where('DEPARTEMEN', $departemen);
        $this->db->where('JABATAN', 'Staff Departemen');
        return $this->db->get($this->table)->result_array();
    }

    function showKemsi($departemen)
    {
        $this->db->where('DEPARTEMEN', $departemen);
        $this->db->where('JABATAN', 'Ketua EMSI');
        return $this->db->get($this->table)->row_array();
    }

    function showWakemsi($departemen)
    {
        $this->db->where('DEPARTEMEN', $departemen);
        $this->db->where('JABATAN', 'Wakil Ketua EMSI');
        return $this->db->get($this->table)->row_array();
    }

    function showSekretaris($departemen)
    {
        $this->db->where('DEPARTEMEN', $departemen);
        $this->db->like('JABATAN', 'Sekretaris');
        return $this->db->get($this->table)->result_array();
    }

    function showBendahara($departemen)
    {
        $this->db->where('DEPARTEMEN', $departemen);
        $this->db->like('JABATAN', 'Bendahara');
        return $this->db->get($this->table)->result_array();
    }

    function showKetuaKomisi($departemen)
    {
        $this->db->where('DEPARTEMEN', $departemen);
        $this->db->like('JABATAN', 'Ketua Komisi');
        return $this->db->get($this->table)->row_array();
    }

    function showAnggotaKomisi($departemen)
    {
        $this->db->where('DEPARTEMEN', $departemen);
        $this->db->like('JABATAN', 'Anggota Komisi');
        return $this->db->get($this->table)->result_array();
    }

    function showStaffAhliKomisi($departemen)
    {
        $this->db->where('DEPARTEMEN', $departemen);
        $this->db->like('JABATAN', 'Staff Ahli');
        return $this->db->get($this->table)->result_array();
    }
}
