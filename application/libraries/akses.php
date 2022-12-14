<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Akses{
		public $user;
		
		function __construct(){
			$this->CI =& get_instance();
			$auth = $this->CI->config->item('auth');
			
			$this->CI->load->helper('cookie');
			$this->CI->load->model('users_model');
			
			$this->users_model =& $this->CI->users_model;
		}
		
		function login($username, $password){
			$result = $this->users_model->get_login_info($username);
			if($result){
				$password = md5($password);
				if($password === $result->password){
					$this->CI->session->set_userdata('user_id', $result->user_id);
					return TRUE;
				}
			}
			return FALSE;
		}
		
		function is_login(){
			return (($this->CI->session->userdata('user_id'))? TRUE: FALSE);
		}
		
		function logout(){
			$this->CI->session->unset_userdata('user_id');
		}
	}