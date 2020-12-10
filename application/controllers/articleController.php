<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class articleController extends CI_Controller {

	public function getArticle($id)
	{
		$this->load->model('articleModel');
	    $this->articleModel->getArticle($id);
	}

	public function newArticle()
	{
		$this->load->view('admin/article');
	}

	public function dashboard()
	{
		$this->load->model('articleModel');
		$posts = $this->articleModel->getAllArticle();
		$this->load->view('admin/dashboard', ['posts'=>$posts]);

	}

	public function createArticle()
	{
		$config['upload_path']='./assets/uploads';
		$config['allowed_types']='*';
		$this->load->library('upload', $config);
		$this->upload->do_upload('file_name');
		$file_name=$this->upload->data();

		$data=array('image_art'=>$file_name['file_name'],
					'titre_art' =>$this->input->post('titre'),
					'date_pub_art' =>$this->input->post('date'),
					'contenu_art' =>$this->input->post('contenu'),
					'signature_art' =>$this->input->post('signature')
				);
 
	      $this->load->model('articleModel');
	      $this->articleModel->addArticle($data);
	}

	public function modifArticle(){
		$config['upload_path']='./assets/uploads';
		$config['allowed_types']='*';
		$this->load->library('upload', $config);
		$this->upload->do_upload('file_name');
		$file_name=$this->upload->data();

		$data=array('titre_art' =>$this->input->post('titre'),
					'date_pub_art' =>$this->input->post('date'),
					'contenu_art' =>$this->input->post('contenu'),
					'signature_art' =>$this->input->post('signature')
				);
		$id =$this->input->post('id');
		$sary = $file_name['file_name'];

	    $this->load->model('articleModel');
	    $this->articleModel->updateArticle($data, $id, $sary);
	}

	public function deleteArticle($id){
		$this->load->model('articleModel');
	    $this->articleModel->daleteArticle($id);
	}

	
}