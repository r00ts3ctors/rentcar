<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_mobil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_mobil_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'data_mobil/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'data_mobil/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'data_mobil/index.html';
            $config['first_url'] = base_url() . 'data_mobil/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Data_mobil_model->total_rows($q);
        $data_mobil = $this->Data_mobil_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'data_mobil_data' => $data_mobil,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('data_mobil/data_mobil_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_mobil_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'idPemilik' => $row->idPemilik,
		'jenismobil' => $row->jenismobil,
		'tahun' => $row->tahun,
		'tramisi' => $row->tramisi,
		'warna' => $row->warna,
		'foto_luar' => $row->foto_luar,
		'nostnk' => $row->nostnk,
		'nopolisi' => $row->nopolisi,
		'asuransi' => $row->asuransi,
		'foto_dalam' => $row->foto_dalam,
		'harga_dalam' => $row->harga_dalam,
		'harga_sewadalam' => $row->harga_sewadalam,
		'harga_sewaluar' => $row->harga_sewaluar,
		'harga_luar' => $row->harga_luar,
		'status' => $row->status,
		'ket' => $row->ket,
	    );
            $this->load->view('data_mobil/data_mobil_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_mobil'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_mobil/create_action'),
	    'id' => set_value('id'),
	    'idPemilik' => set_value('idPemilik'),
	    'jenismobil' => set_value('jenismobil'),
	    'tahun' => set_value('tahun'),
	    'tramisi' => set_value('tramisi'),
	    'warna' => set_value('warna'),
	    'foto_luar' => set_value('foto_luar'),
	    'nostnk' => set_value('nostnk'),
	    'nopolisi' => set_value('nopolisi'),
	    'asuransi' => set_value('asuransi'),
	    'foto_dalam' => set_value('foto_dalam'),
	    'harga_dalam' => set_value('harga_dalam'),
	    'harga_sewadalam' => set_value('harga_sewadalam'),
	    'harga_sewaluar' => set_value('harga_sewaluar'),
	    'harga_luar' => set_value('harga_luar'),
	    'status' => set_value('status'),
	    'ket' => set_value('ket'),
	);
        $this->load->view('data_mobil/data_mobil_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idPemilik' => $this->input->post('idPemilik',TRUE),
		'jenismobil' => $this->input->post('jenismobil',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
		'tramisi' => $this->input->post('tramisi',TRUE),
		'warna' => $this->input->post('warna',TRUE),
		'foto_luar' => $this->input->post('foto_luar',TRUE),
		'nostnk' => $this->input->post('nostnk',TRUE),
		'nopolisi' => $this->input->post('nopolisi',TRUE),
		'asuransi' => $this->input->post('asuransi',TRUE),
		'foto_dalam' => $this->input->post('foto_dalam',TRUE),
		'harga_dalam' => $this->input->post('harga_dalam',TRUE),
		'harga_sewadalam' => $this->input->post('harga_sewadalam',TRUE),
		'harga_sewaluar' => $this->input->post('harga_sewaluar',TRUE),
		'harga_luar' => $this->input->post('harga_luar',TRUE),
		'status' => $this->input->post('status',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Data_mobil_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_mobil'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_mobil_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_mobil/update_action'),
		'id' => set_value('id', $row->id),
		'idPemilik' => set_value('idPemilik', $row->idPemilik),
		'jenismobil' => set_value('jenismobil', $row->jenismobil),
		'tahun' => set_value('tahun', $row->tahun),
		'tramisi' => set_value('tramisi', $row->tramisi),
		'warna' => set_value('warna', $row->warna),
		'foto_luar' => set_value('foto_luar', $row->foto_luar),
		'nostnk' => set_value('nostnk', $row->nostnk),
		'nopolisi' => set_value('nopolisi', $row->nopolisi),
		'asuransi' => set_value('asuransi', $row->asuransi),
		'foto_dalam' => set_value('foto_dalam', $row->foto_dalam),
		'harga_dalam' => set_value('harga_dalam', $row->harga_dalam),
		'harga_sewadalam' => set_value('harga_sewadalam', $row->harga_sewadalam),
		'harga_sewaluar' => set_value('harga_sewaluar', $row->harga_sewaluar),
		'harga_luar' => set_value('harga_luar', $row->harga_luar),
		'status' => set_value('status', $row->status),
		'ket' => set_value('ket', $row->ket),
	    );
            $this->load->view('data_mobil/data_mobil_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_mobil'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'idPemilik' => $this->input->post('idPemilik',TRUE),
		'jenismobil' => $this->input->post('jenismobil',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
		'tramisi' => $this->input->post('tramisi',TRUE),
		'warna' => $this->input->post('warna',TRUE),
		'foto_luar' => $this->input->post('foto_luar',TRUE),
		'nostnk' => $this->input->post('nostnk',TRUE),
		'nopolisi' => $this->input->post('nopolisi',TRUE),
		'asuransi' => $this->input->post('asuransi',TRUE),
		'foto_dalam' => $this->input->post('foto_dalam',TRUE),
		'harga_dalam' => $this->input->post('harga_dalam',TRUE),
		'harga_sewadalam' => $this->input->post('harga_sewadalam',TRUE),
		'harga_sewaluar' => $this->input->post('harga_sewaluar',TRUE),
		'harga_luar' => $this->input->post('harga_luar',TRUE),
		'status' => $this->input->post('status',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Data_mobil_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_mobil'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_mobil_model->get_by_id($id);

        if ($row) {
            $this->Data_mobil_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_mobil'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_mobil'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('idPemilik', 'idpemilik', 'trim|required');
	$this->form_validation->set_rules('jenismobil', 'jenismobil', 'trim|required');
	$this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
	$this->form_validation->set_rules('tramisi', 'tramisi', 'trim|required');
	$this->form_validation->set_rules('warna', 'warna', 'trim|required');
	$this->form_validation->set_rules('foto_luar', 'foto luar', 'trim|required');
	$this->form_validation->set_rules('nostnk', 'nostnk', 'trim|required');
	$this->form_validation->set_rules('nopolisi', 'nopolisi', 'trim|required');
	$this->form_validation->set_rules('asuransi', 'asuransi', 'trim|required');
	$this->form_validation->set_rules('foto_dalam', 'foto dalam', 'trim|required');
	$this->form_validation->set_rules('harga_dalam', 'harga dalam', 'trim|required|numeric');
	$this->form_validation->set_rules('harga_sewadalam', 'harga sewadalam', 'trim|required|numeric');
	$this->form_validation->set_rules('harga_sewaluar', 'harga sewaluar', 'trim|required|numeric');
	$this->form_validation->set_rules('harga_luar', 'harga luar', 'trim|required|numeric');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Data_mobil.php */
/* Location: ./application/controllers/Data_mobil.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-09 14:47:54 */
/* http://harviacode.com */