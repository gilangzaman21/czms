<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('protected/user_model');
        $this->load->library('form_validation');
        $this->general->cekUserLogin();
        $this->general->cekRules('super_admin');


    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'user/index/';
        $config['total_rows'] = $this->user_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'user.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $user = $this->user_model->index_limit($config['per_page'], $start);

        $data = array(
            'user_data' => $user,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->template->load('templates/admin/template','protected/user/user_list', $data);
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'user/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'user/index/';
        }

        $config['total_rows'] = $this->user_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'user/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $user = $this->user_model->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'user_data' => $user,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('templates/admin/template','protected/user/user_list', $data);
    }

    public function read($id) 
    {
        $row = $this->user_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'user_username' => $row->user_username,
		'user_password' => $row->user_password,
		'user_last_login' => $row->user_last_login,
		'user_rules' => $row->user_rules,
	    );
            $this->template->load('templates/admin/template','protected/user/user_read', $data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('protected/user'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('protected/user/create_action'),
	    'id' => set_value('id'),
	    'user_username' => set_value('user_username'),
	    'user_password' => set_value('user_password'),
	    'user_rules' => set_value('user_rules'),
	);
        $this->template->load('templates/admin/template','protected/user/user_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'user_username' => $this->input->post('user_username',TRUE),
		'user_password' => sha1(md5($this->input->post('user_password',TRUE))),
		'user_rules' => $this->input->post('user_rules',TRUE),
	    );

            $this->user_model->insert($data);
            $this->session->set_flashdata('message_text', 'Create Record Success');
            redirect(site_url('protected/user'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->user_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('protected/user/update_action'),
		'id' => set_value('id', $row->id),
		'user_username' => set_value('user_username', $row->user_username),
		'user_password' => set_value('user_password', $row->user_password),
		'user_rules' => set_value('user_rules', $row->user_rules),
	    );
            $this->template->load('templates/admin/template','protected/user/user_form', $data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('protected/user'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'user_username' => $this->input->post('user_username',TRUE),
		'user_password' => sha1(md5($this->input->post('user_password',TRUE))),
		'user_rules' => $this->input->post('user_rules',TRUE),
	    );

            $this->user_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message_text', 'Update Record Success');
            redirect(site_url('protected/user'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->user_model->get_by_id($id);

        if ($row) {
            $this->user_model->delete($id);
            $this->session->set_flashdata('message_text', 'Delete Record Success');
            redirect(site_url('protected/user'));
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('protected/user'));
        }
    }

    public function getJson() 
    {

        $no = 1;
        foreach ($this->user_model->get_json() as $rw) {
            $data[]= array(
                $no++,
            	$rw->user_username,
            	$rw->user_last_login,
            	$rw->user_rules,
            	"<a href='".base_url('protected/user/read')."/$rw->id' class=\"btn btn-xs btn-icon btn-circle btn-warning\"><i class=\"fa fa-eye\"></i></a> <a href='".base_url('protected/user/update')."/$rw->id' class=\"btn btn-xs btn-icon btn-circle btn-success\"><i class=\"fa fa-edit\"></i></a> <a href='".base_url('protected/user/delete')."/$rw->id' onclick=\"javasciprt: return confirm('Anda Yakin ?')\" class=\"btn btn-xs btn-icon btn-circle btn-danger\"><i class=\"fa fa-times\"></i></a>",
            );
            
            $row = array(
                    'aaData' => $data
            );
            
            $this->output->set_content_type('application/json')->set_output(json_encode($row));
        }
    }

    function _rules() 
    {
	$this->form_validation->set_rules('user_username', ' ', 'trim|required');
	$this->form_validation->set_rules('user_password', ' ', 'trim');
	$this->form_validation->set_rules('user_rules', ' ', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */