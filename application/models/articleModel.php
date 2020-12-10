<?php 

	class articleModel extends CI_model{

		public function getAllArticle(){
			$query = $this->db->order_by('id_art', 'DESC')
					->get('article');
			return $query->result();
		}

		public function getTroisDernierArticle(){
			$query = $this->db->order_by('id_art', 'DESC')
							->limit(3)
							->get('article');
			return $query->result();
		}

		public function getArticle($id){
			$query = $this->db->get_where('article', array('id_art'=>$id));
			$posts = $query->result_array();
			/*var_dump($posts['0']['contenu_art']);die();*/
			$this->load->view('admin/edit', ['posts'=>$posts]);
		}

		public function addArticle($data){
			$this->db->insert('article', $data);

			$query = $this->db->order_by('id_art', 'DESC')
								->get('article');
			$posts = $query->result();
			$this->load->view('admin/dashboard', ['posts'=>$posts]);
		}

		public function updateArticle($data, $id, $sary){
			$query = $this->db->get_where('article', array('id_art'=>$id));
			$posts = $query->result_array();
			$toph = $posts['0']['image_art'];

		
			if ($sary == '') {
				$data1 = array('titre_art'=> $data['titre_art'],
							'image_art' => $toph,
							'date_pub_art' => $data['date_pub_art'],
							'contenu_art' => $data['contenu_art'],
							'signature_art' => $data['signature_art']

			);
				$this->db->where('id_art', $id);
				$this->db->update('article', $data1);
			}else{

			$data2 = array('titre_art'=> $data['titre_art'],
							'image_art' => $sary,
							'date_pub_art' => $data['date_pub_art'],
							'contenu_art' => $data['contenu_art'],
							'signature_art' => $data['signature_art']

			);
				$this->db->where('id_art', $id);
				$this->db->update('article', $data2);
			}

		}

		public function daleteArticle($id){
			$this->db->where('id_art', $id);
			$this->db->delete('article');

			$query = $this->db->order_by('id_art', 'DESC')
								->get('article');
			$posts = $query->result();
			$this->load->view('admin/dashboard', ['posts'=>$posts]);
		}

	}
