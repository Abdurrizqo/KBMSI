<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Backup_Db extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function backup(){
		$this->load->helper(array('file','url','download','date'));
		$this->load->dbutil();
		$prefs = array(
// 				'tables'		=> array('table1', 'table2'),
// 				'ignore'		=> array(),
				'format'		=> 'txt',
				'filename'		=> date('Ymd-His').'.sql',
				'add_drop'		=> TRUE,
				'add_insert'	=> TRUE,
				'newline'		=> "\n"
		);
		$backup =& $this->dbutil->backup($prefs);
// 		force_download(date('Ymd-His').'.sql', $backup);
		write_file('backup/'.date('Ymd-His').'.sql', $backup);
	}
}