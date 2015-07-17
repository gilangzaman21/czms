<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_detail extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('protected/user_detail_model');
        $this->load->library('form_validation');
        $this->general->cekUserLogin();
        $this->general->cekRules('super_admin');


    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'user_detail/index/';
        $config['total_rows'] = $this->user_detail_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'user_detail.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $user_detail = $this->user_detail_model->index_limit($config['per_page'], $start);

        $data = array(
            'user_detail_data' => $user_detail,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->template->load('templates/admin/template','protected/user_detail/user_detail_list', $data);
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'user_detail/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'user_detail/index/';
        }

        $config['total_rows'] = $this->user_detail_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'user_detail/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $user_detail = $this->user_detail_model->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'user_detail_data' => $user_detail,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('templates/admin/template','protected/user_detail/user_detail_list', $data);
    }

    public function read($id) 
    {
        $row = $this->user_detail_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'user_id' => $row->user_id,
		'user_detail_fullname' => $row->user_detail_fullname,
		'user_detail_email' => $row->user_detail_email,
		'user_detail_picture' => $row->user_detail_picture,
	    );
            $this->template->load('templates/admin/template','protected/user_detail/user_detail_read', $data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('protected/user_detail'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('protected/user_detail/create_action'),
	    'id' => set_value('id'),
	    'user_id' => set_value('user_id'),
	    'user_detail_fullname' => set_value('user_detail_fullname'),
	    'user_detail_email' => set_value('user_detail_email'),
	    'user_detail_picture' => set_value('user_detail_picture'),
	);
        $this->template->load('templates/admin/template','protected/user_detail/user_detail_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'user_id' => $this->input->post('user_id',TRUE),
		'user_detail_fullname' => $this->input->post('user_detail_fullname',TRUE),
		'user_detail_email' => $this->input->post('user_detail_email',TRUE),
		'user_detail_picture' => $this->input->post('user_detail_picture',TRUE),
	    );

            $this->user_detail_model->insert($data);
            $this->session->set_flashdata('message_text', 'Create Record Success');
            redirect(site_url('protected/user_detail'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->user_detail_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('protected/user_detail/update_action'),
		'id' => set_value('id', $row->id),
		'user_id' => set_value('user_id', $row->user_id),
		'user_detail_fullname' => set_value('user_detail_fullname', $row->user_detail_fullname),
		'user_detail_email' => set_value('user_detail_email', $row->user_detail_email),
		'user_detail_picture' => set_value('user_detail_picture', $row->user_detail_picture),
	    );
            $this->template->load('templates/admin/template','protected/user_detail/user_detail_form', $data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('protected/user_detail'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'user_id' => $this->input->post('user_id',TRUE),
		'user_detail_fullname' => $this->input->post('user_detail_fullname',TRUE),
		'user_detail_email' => $this->input->post('user_detail_email',TRUE),
		'user_detail_picture' => $this->input->post('user_detail_picture',TRUE),
	    );

            $this->user_detail_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message_text', 'Update Record Success');
            redirect(site_url('protected/user_detail'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->user_detail_model->get_by_id($id);

        if ($row) {
            $this->user_detail_model->delete($id);
            $this->session->set_flashdata('message_text', 'Delete Record Success');
            redirect(site_url('protected/user_detail'));
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('protected/user_detail'));
        }
    }

    public function getJson() 
    {

        $no = 1;
        foreach ($this->user_detail_model->get_json() as $rw) {
                    $data[]= array(
                        $no++,
        
	$rw->user_id,
	$rw->user_detail_fullname,
	$rw->user_detail_email,
	$rw->user_detail_picture,
	"<a href='".base_url('protected/user_detail/read')."/$rw->id' class=\"btn btn-xs btn-icon btn-circle btn-warning\"><i class=\"fa fa-eye\"></i></a> <a href='".base_url('protected/user_detail/update')."/$rw->id' class=\"btn btn-xs btn-icon btn-circle btn-success\"><i class=\"fa fa-edit\"></i></a> <a href='".base_url('protected/user_detail/delete')."/$rw->id' onclick=\"javasciprt: return confirm('Anda Yakin ?')\" class=\"btn btn-xs btn-icon btn-circle btn-danger\"><i class=\"fa fa-times\"></i></a>",
    );
    $row = array(
                'aaData' => $data
            );
        $this->output->set_content_type('application/json')->set_output(json_encode($row));
}}

    function _rules() 
    {
	$this->form_validation->set_rules('user_id', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('user_detail_fullname', ' ', 'trim|required');
	$this->form_validation->set_rules('user_detail_email', ' ', 'trim|required');
	$this->form_validation->set_rules('user_detail_picture', ' ', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file User_detail.php */
/* Location: ./application/controllers/User_detail.php */