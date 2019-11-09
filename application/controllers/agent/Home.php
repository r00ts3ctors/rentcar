<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index(){
    $data = array(
      'konten' => 'agent/Konten',
      // 'konten' => 'agent/home',
    );
    $this->load->view('template/index', $data);
  }

  public function listOrderRentCar()
  {
    $data = array(
      'konten' => 'agent/list_order_rentcar',
    );
    $this->load->view('template/index', $data);
  }

  public function invoice()
  {
    $data = array(
      'konten' => 'agent/invoice',
    );
    $this->load->view('template/index', $data);
  }

}
