<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {

    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Data_mobil_model');
    $this->load->library('form_validation');
    $this->load->library('datatables');
  }


  function index()
  {
    $data = array(
      'menu' => 'template/menu_member',
      'konten' => 'member/Konten',
      'title' => 'Dashboard Member',
    );
    $this->load->view('template/index', $data);
  }



  public function rentacar(){
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
        'menu' => 'template/menu_member',
        'title' => 'Dashboard Member',
        'konten' => 'data_mobil/data_mobil_list',
        'q' => $q,
        'pagination' => $this->pagination->create_links(),
        'total_rows' => $config['total_rows'],
        'start' => $start,
    );
    $this->load->view('template/index', $data);
  }
  public function order($id)
  {
    echo $id;
    // code...
  }

}
