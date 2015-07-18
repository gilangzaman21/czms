<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','user');
	}

	public function index()
	{
		if ($this->session->userdata('user_is_login')) {
			redirect('protected');
		}else{
	            if ($this->input->post()) {
					$username = $this->input->post('username');
					$password = sha1(md5($this->input->post('password')));
					$is_login = $this->user->cekLogin($username,$password);

					if (!empty($is_login)) {
						$sessionData['user_is_login'] = TRUE;
		                $sessionData['user_id'] = $is_login['id'];
		                $sessionData['user_username'] = $is_login['user_username'];
		                $sessionData['user_fullname'] = $is_login['user_fullname'];
		                $sessionData['user_email'] = $is_login['user_email'];
		                $sessionData['user_picture'] = $is_login['user_picture'];
		                $sessionData['user_rules'] = $is_login['user_rules'];

				        $this->session->set_userdata($sessionData);
				        $this->user->last_login($this->session->userdata('user_id'));
						$this->session->set_flashdata('message_text', 'Selamat Datang Kembali '.$this->session->userdata('user_username'));
						redirect('protected');
					}else{

        				$this->session->set_flashdata('message_text','Username dan Password Yang Anda Masukan Tidak Sesuai!');

					}
				}

			// Load View Login
			$this->load->view('templates/login/login');
		}
	}

	public function logout() {

        $this->session->sess_destroy();
        redirect('login');
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */