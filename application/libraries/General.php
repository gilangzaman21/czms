<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class General
{
	
	var $ci;

	public function __construct(){

		$this->ci = &get_instance();
		//Do your magic here
	}

    // Session Untuk Admin
	function UserIsLogin() {
        if ($this->ci->session->userdata('user_is_login') == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function cekUserLogin() {
        if ($this->UserIsLogin() != TRUE) {
        	$this->ci->session->set_flashdata('message_text','Anda Harus Login Untuk Akses Halaman Tersebut');
            redirect(base_url('login'));
        }
    }

    function cekRules($rules)
    {
        if ($this->ci->session->userdata('user_rules') != 'super_admin' AND $this->ci->session->userdata('user_rules') != $rules) {
            $this->ci->session->set_flashdata('message_text','Anda Tidak Di Perbolehkan Untuk Akses Halaman Tersebut');
            redirect(base_url('protected/'));
        }
    }

}

/* End of file General.php */
/* Location: ./application/libraries/General.php */