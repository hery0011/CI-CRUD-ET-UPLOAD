<?php 

	class LoginModel extends CI_model{

		public function selectLogin($data)
		{
			$email = $data['login_identifiant'];
			$password = $data['login_password'];

			$query = $this->db->get_where('login', array('login_identifiant'=>$email,'login_password'=>$password));

			if ($query->num_rows()>0) {
				$query = $this->db->get('article');
				$posts = $query->result();
				$this->load->view('admin/dashboard', ['posts'=>$posts]);
			}
			else{
				$this->load->view('welcome_message');
			}

		}
	}
 ?>