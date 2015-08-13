<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kota extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('protected/kota_model');
        $this->load->library('form_validation');
        $this->general->cekUserLogin();
        $this->general->cekRules('admin');


    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'kota/index/';
        $config['total_rows'] = $this->kota_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'kota.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $kota = $this->kota_model->index_limit($config['per_page'], $start);

        $data = array(
            'kota_data' => $kota,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->template->load('templates/admin/template','protected/kota/kota_list', $data);
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'kota/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'kota/index/';
        }

        $config['total_rows'] = $this->kota_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'kota/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $kota = $this->kota_model->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'kota_data' => $kota,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('templates/admin/template','protected/kota/kota_list', $data);
    }

    public function read($id) 
    {
        $row = $this->kota_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kotaID' => $row->kotaID,
		'status' => $row->status,
		'provinsiID' => $row->provinsiID,
		'nama_kota' => $row->nama_kota,
	    );
            $this->template->load('templates/admin/template','protected/kota/kota_read', $data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('protected/kota'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('protected/kota/create_action'),
	    'kotaID' => set_value('kotaID'),
	    'status' => set_value('status'),
	    'provinsiID' => set_value('provinsiID'),
	    'nama_kota' => set_value('nama_kota'),
	);
        $this->template->load('templates/admin/template','protected/kota/kota_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'status' => $this->input->post('status',TRUE),
		'provinsiID' => $this->input->post('provinsiID',TRUE),
		'nama_kota' => $this->input->post('nama_kota',TRUE),
	    );

            $this->kota_model->insert($data);
            $this->session->set_flashdata('message_text', 'Create Record Success');
            redirect(site_url('protected/kota'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->kota_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('protected/kota/update_action'),
		'kotaID' => set_value('kotaID', $row->kotaID),
		'status' => set_value('status', $row->status),
		'provinsiID' => set_value('provinsiID', $row->provinsiID),
		'nama_kota' => set_value('nama_kota', $row->nama_kota),
	    );
            $this->template->load('templates/admin/template','protected/kota/kota_form', $data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('protected/kota'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kotaID', TRUE));
        } else {
            $data = array(
		'status' => $this->input->post('status',TRUE),
		'provinsiID' => $this->input->post('provinsiID',TRUE),
		'nama_kota' => $this->input->post('nama_kota',TRUE),
	    );

            $this->kota_model->update($this->input->post('kotaID', TRUE), $data);
            $this->session->set_flashdata('message_text', 'Update Record Success');
            redirect(site_url('protected/kota'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->kota_model->get_by_id($id);

        if ($row) {
            $this->kota_model->delete($id);
            $this->session->set_flashdata('message_text', 'Delete Record Success');
            redirect(site_url('protected/kota'));
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('protected/kota'));
        }
    }

    public function getJson() 
    {

        $no = 1;
        foreach ($this->kota_model->get_json() as $rw) {
                    $data[]= array(
                        $no++,
        
	$rw->status,
	$rw->nama_provinsi,
	$rw->nama_kota,
	"<a href='".base_url('protected/kota/read')."/$rw->kotaID' class=\"btn btn-xs btn-icon btn-circle btn-warning\"><i class=\"fa fa-eye\"></i></a> <a href='".base_url('protected/kota/update')."/$rw->kotaID' class=\"btn btn-xs btn-icon btn-circle btn-success\"><i class=\"fa fa-edit\"></i></a> <a href='".base_url('protected/kota/delete')."/$rw->kotaID' onclick=\"javasciprt: return confirm('Anda Yakin ?')\" class=\"btn btn-xs btn-icon btn-circle btn-danger\"><i class=\"fa fa-times\"></i></a>",
    );
    $row = array(
                'aaData' => $data
            );
        $this->output->set_content_type('application/json')->set_output(json_encode($row));
}}

    function _rules() 
    {
	$this->form_validation->set_rules('status', ' ', 'trim|required');
	$this->form_validation->set_rules('provinsiID', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('nama_kota', ' ', 'trim|required');

	$this->form_validation->set_rules('kotaID', 'kotaID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Kota.php */
/* Location: ./application/controllers/Kota.php */