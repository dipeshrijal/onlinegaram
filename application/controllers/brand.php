<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class brand extends CI_Controller {

	
	public function index()
	{
		$this->load->view('brands.php');
	}
}
