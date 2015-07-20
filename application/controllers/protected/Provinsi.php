<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Provinsi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('protected/provinsi_model');
        $this->load->library('form_validation');
        $this->general->cekUserLogin();
        $this->general->cekRules('admin');


    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'provinsi/index/';
        $config['total_rows'] = $this->provinsi_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'provinsi.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $provinsi = $this->provinsi_model->index_limit($config['per_page'], $start);

        $data = array(
            'provinsi_data' => $provinsi,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->template->load('templates/admin/template','protected/provinsi/provinsi_list', $data);
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'provinsi/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'provinsi/index/';
        }

        $config['total_rows'] = $this->provinsi_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'provinsi/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $provinsi = $this->provinsi_model->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'provinsi_data' => $provinsi,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('templates/admin/template','protected/provinsi/provinsi_list', $data);
    }

    public function read($id) 
    {
        $row = $this->provinsi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'provinsiID' => $row->provinsiID,
		'status' => $row->status,
		'nama_provinsi' => $row->nama_provinsi,
	    );
            $this->template->load('templates/admin/template','protected/provinsi/provinsi_read', $data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('protected/provinsi'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('protected/provinsi/create_action'),
	    'provinsiID' => set_value('provinsiID'),
	    'status' => set_value('status'),
	    'nama_provinsi' => set_value('nama_provinsi'),
	);
        $this->template->load('templates/admin/template','protected/provinsi/provinsi_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'status' => $this->input->post('status',TRUE),
		'nama_provinsi' => $this->input->post('nama_provinsi',TRUE),
	    );

            $this->provinsi_model->insert($data);
            $this->session->set_flashdata('message_text', 'Create Record Success');
            redirect(site_url('protected/provinsi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->provinsi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('protected/provinsi/update_action'),
		'provinsiID' => set_value('provinsiID', $row->provinsiID),
		'status' => set_value('status', $row->status),
		'nama_provinsi' => set_value('nama_provinsi', $row->nama_provinsi),
	    );
            $this->template->load('templates/admin/template','protected/provinsi/provinsi_form', $data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('protected/provinsi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('provinsiID', TRUE));
        } else {
            $data = array(
		'status' => $this->input->post('status',TRUE),
		'nama_provinsi' => $this->input->post('nama_provinsi',TRUE),
	    );

            $this->provinsi_model->update($this->input->post('provinsiID', TRUE), $data);
            $this->session->set_flashdata('message_text', 'Update Record Success');
            redirect(site_url('protected/provinsi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->provinsi_model->get_by_id($id);

        if ($row) {
            $this->provinsi_model->delete($id);
            $this->session->set_flashdata('message_text', 'Delete Record Success');
            redirect(site_url('protected/provinsi'));
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('protected/provinsi'));
        }
    }

    public function getJson() 
    {

        $no = 1;
        foreach ($this->provinsi_model->get_json() as $rw) {
                    $data[]= array(
                        $no++,
        
	$rw->status,
	$rw->nama_provinsi,
	"<a href='".base_url('protected/provinsi/read')."/$rw->provinsiID' class=\"btn btn-xs btn-icon btn-circle btn-warning\"><i class=\"fa fa-eye\"></i></a> <a href='".base_url('protected/provinsi/update')."/$rw->provinsiID' class=\"btn btn-xs btn-icon btn-circle btn-success\"><i class=\"fa fa-edit\"></i></a> <a href='".base_url('protected/provinsi/delete')."/$rw->provinsiID' onclick=\"javasciprt: return confirm('Anda Yakin ?')\" class=\"btn btn-xs btn-icon btn-circle btn-danger\"><i class=\"fa fa-times\"></i></a>",
    );
    $row = array(
                'aaData' => $data
            );
        $this->output->set_content_type('application/json')->set_output(json_encode($row));
}}

    function _rules() 
    {
	$this->form_validation->set_rules('status', ' ', 'trim|required');
	$this->form_validation->set_rules('nama_provinsi', ' ', 'trim|required');

	$this->form_validation->set_rules('provinsiID', 'provinsiID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Provinsi.php */
/* Location: ./application/controllers/Provinsi.php */