<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
      $this->load->library('form_validation');
  }

  // menampilkan halaman login
  function index()
  {

  }

  // menampilkan halaman register
  public function register($value='')
  {


    $this->load->view('auth/register');


  }

  // melakukan proses register
  public function prosesRegister($value='')
  {
    // code...

    $this->form_validation->set_rules('username', 'Username', 'trim|required',[
      'require' => 'Wajib Ada'
    ]);
    $this->form_validation->set_rules('email', 'Alamat Email', 'trim|required|valid_email',[
      'require' => 'Wajib Ada',
      'valid_mail' => 'Email Tidak Valid'
    ]);


  if ($this->form_validation->run() === FALSE) {
        $this->load->view('auth/register');

    }
    else {
      redirect('penyedia/Home');
    }
  }

  public function prosesLogin($value='')
  {
    // code...
  }
  // melakuan proses login



}
