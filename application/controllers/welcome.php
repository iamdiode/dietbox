<?php if(!defined('BASEPATH')) die("Not a valid entry");

/**
* @author D R DILIP
* @version 1.0
* @copyright diliproy.com
*/

class Welcome extends CI_Controller {

	private $_data;

	public function __construct()
	{
		parent::__construct();
		$this->_data = array();
	}

	public function index()
	{
		$this->load->view("staticlayout");
	}
}