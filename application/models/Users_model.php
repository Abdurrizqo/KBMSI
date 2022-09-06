<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users_model extends CI_Model{
	private $_table = 'USER';
	private $_user_id = 'USERID';
	private $_password = 'PASSWORD';
	private $_is_active = 'IS_ACTIVE';
	private $_userid_update = 'USERID_UPDATE';
	private $_last_update = 'LAST_UPDATE';
	
	private $_salt_password = '~`1234567890!@#$%^&*()-_=+[]abcdefghijklmnopqrstuvwxyz{}<>,.?';
	
	private $__user = NULL;
	private $__password = NULL;
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function validate_login(){
		$this->__user = $this->input->post('username');
		$this->__password = $this->input->post('password');
		
		$this->db->where($this->_user_id, $this->input->post('username'));
		$this->db->where($this->_password,
					md5(sha1(md5($this->_salt_password).
					$this->db->escape_str(htmlentities($this->input->post('password'))))));
		$this->db->where($this->_is_active, 1);
		$this->db->limit(1);
		$query = $this->db->get($this->_table);
		
		if($query->num_rows() == 1){
			return TRUE;
		}
		return FALSE;
	}
	
	function get_user(){
		$this->db->where($this->_user_id, $this->__user);
		$this->db->where($this->_password, md5(sha1(md5($this->_salt_password).$this->db->escape_str(htmlentities($this->__password)))));
		$this->db->limit(1);
		$query = $this->db->get($this->_table);
		return $query->result_array();
	}
	
	function cek_password_lama($user, $password){
		$this->db->where($this->_user_id, $user);
		$this->db->where($this->_password, md5(sha1(md5($this->_salt_password).$this->db->escape_str(htmlentities($password)))));
		$query = $this->db->get($this->_table);
		return $query->num_rows();
	}
	
	function ganti_password($user, $password, $updater){
		$this->load->helper('date');
		$date = mdate('%Y-%m-%d %H:%i:%s', time());
		$password = md5(sha1(md5($this->_salt_password).$this->db->escape_str(htmlentities($password))));
		
		$data = array($this->_password => $password, $this->_user_id => $user, $this->_userid_update => $updater,
				$this->_last_update => $date);
		
		$this->db->where($this->_user_id, $user);
		$this->db->update($this->_table, $data);
		
		return $this->db->affected_rows();
	}
	
	function get_kolom($userid, $kolom){
		$this->db->where($this->_user_id, $userid);
		$this->db->select($kolom);
		$query = $this->db->get($this->_table);
		return $query->result_array();
	}
}