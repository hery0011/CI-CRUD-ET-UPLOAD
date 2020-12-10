<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class articleController extends CI_Controller {

	public function quiSommeNous(){
		$this->load->view('cabinet/quiSommeNous');
	}
}