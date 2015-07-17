<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('protected/menu_model');
        $this->load->library('form_validation');
        $this->general->cekUserLogin();
        $this->general->cekRules('super_admin');


    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'menu/index/';
        $config['total_rows'] = $this->menu_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'menu.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $menu = $this->menu_model->index_limit($config['per_page'], $start);

        $data = array(
            'menu_data' => $menu,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->template->load('templates/admin/template','protected/menu/menu_list', $data);
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'menu/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'menu/index/';
        }

        $config['total_rows'] = $this->menu_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'menu/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $menu = $this->menu_model->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'menu_data' => $menu,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('templates/admin/template','protected/menu/menu_list', $data);
    }

    public function read($id) 
    {
        $row = $this->menu_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'posisi' => $row->posisi,
		'nama_menu' => $row->nama_menu,
		'icon' => $row->icon,
		'link' => $row->link,
		'parent' => $row->parent,
		'rules' => $row->rules,
		'aktif' => $row->aktif,
	    );
            $this->template->load('templates/admin/template','protected/menu/menu_read', $data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('protected/menu'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('protected/menu/create_action'),
	    'id' => set_value('id'),
	    'posisi' => set_value('posisi'),
	    'nama_menu' => set_value('nama_menu'),
	    'icon' => set_value('icon'),
	    'link' => set_value('link'),
	    'parent' => set_value('parent'),
	    'rules' => set_value('rules'),
	    'aktif' => set_value('aktif'),
	);
        $this->template->load('templates/admin/template','protected/menu/menu_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'posisi' => $this->input->post('posisi',TRUE),
		'nama_menu' => $this->input->post('nama_menu',TRUE),
		'icon' => $this->input->post('icon',TRUE),
		'link' => $this->input->post('link',TRUE),
		'parent' => $this->input->post('parent',TRUE),
		'rules' => $this->input->post('rules',TRUE),
		'aktif' => $this->input->post('aktif',TRUE),
	    );

            $this->menu_model->insert($data);
            $this->session->set_flashdata('message_text', 'Create Record Success');
            redirect(site_url('protected/menu'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->menu_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('protected/menu/update_action'),
		'id' => set_value('id', $row->id),
		'posisi' => set_value('posisi', $row->posisi),
		'nama_menu' => set_value('nama_menu', $row->nama_menu),
		'icon' => set_value('icon', $row->icon),
		'link' => set_value('link', $row->link),
		'parent' => set_value('parent', $row->parent),
		'rules' => set_value('rules', $row->rules),
		'aktif' => set_value('aktif', $row->aktif),
	    );
            $this->template->load('templates/admin/template','protected/menu/menu_form', $data);
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('protected/menu'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'posisi' => $this->input->post('posisi',TRUE),
		'nama_menu' => $this->input->post('nama_menu',TRUE),
		'icon' => $this->input->post('icon',TRUE),
		'link' => $this->input->post('link',TRUE),
		'parent' => $this->input->post('parent',TRUE),
		'rules' => $this->input->post('rules',TRUE),
		'aktif' => $this->input->post('aktif',TRUE),
	    );

            $this->menu_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message_text', 'Update Record Success');
            redirect(site_url('protected/menu'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->menu_model->get_by_id($id);

        if ($row) {
            $this->menu_model->delete($id);
            $this->session->set_flashdata('message_text', 'Delete Record Success');
            redirect(site_url('protected/menu'));
        } else {
            $this->session->set_flashdata('message_text', 'Record Not Found');
            redirect(site_url('protected/menu'));
        }
    }

    public function getJson() 
    {

        $no = 1;
        foreach ($this->menu_model->get_json() as $rw) {
                    $data[]= array(
                        $no++,
        
	$rw->posisi,
	$rw->nama_menu,
	$rw->icon,
	$rw->link,
	$rw->parent,
	$rw->rules,
	$rw->aktif,
	"<a href='".base_url('protected/menu/read')."/$rw->id' class=\"btn btn-xs btn-icon btn-circle btn-warning\"><i class=\"fa fa-eye\"></i></a> <a href='".base_url('protected/menu/update')."/$rw->id' class=\"btn btn-xs btn-icon btn-circle btn-success\"><i class=\"fa fa-edit\"></i></a> <a href='".base_url('protected/menu/delete')."/$rw->id' onclick=\"javasciprt: return confirm('Anda Yakin ?')\" class=\"btn btn-xs btn-icon btn-circle btn-danger\"><i class=\"fa fa-times\"></i></a>",
    );
    $row = array(
                'aaData' => $data
            );
        $this->output->set_content_type('application/json')->set_output(json_encode($row));
}}

    function _rules() 
    {
	$this->form_validation->set_rules('posisi', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('nama_menu', ' ', 'trim|required');
	$this->form_validation->set_rules('icon', ' ', 'trim');
	$this->form_validation->set_rules('link', ' ', 'trim|required');
	$this->form_validation->set_rules('parent', ' ', 'trim');
	$this->form_validation->set_rules('rules', ' ', 'trim');
	$this->form_validation->set_rules('aktif', ' ', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Menu.php */
/* Location: ./application/controllers/Menu.php */