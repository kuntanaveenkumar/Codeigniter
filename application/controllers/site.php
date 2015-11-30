<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/Site_controller.php';
class Site extends Site_controller 
{
	function __construct()
	{		
		parent::__construct();		
		
	}
	public function index_get($page = 'index')
	{			
		$data=array();
		$data['session_data'] = $this->session->all_userdata();			
		$this->load->library('cache_fragment');
		$this->load->view('main.php',$data);     
	}
}
?>