<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class acceuilController extends CI_Controller {

	public function acceuil(){
		$this->load->model('articleModel');
		$posts = $this->articleModel->getTroisDernierArticle();

		$this->load->view('acceuil/acceuil', ['posts'=>$posts]);

	}
}