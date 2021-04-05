<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('Mod_login');
    $this->auth->cek_auth(); //ngambil auth dari library
  }

  function index(){
    $ambil_akun = $this->Mod_login->ambil_user($this->session->userdata('username'));
    $data = array(
      'user'  => $ambil_akun,
    );
    $stat = $this->session->userdata('lvl');

    if($stat==1){//admin
      $this->load->view('anggota/anggota_data',$data);
    }else{ //user
      $this->load->view('anggota/anggota_data',$data);
    }
  }

  function login(){
    $session = $this->session->userdata('isLogin');
    if($session == FALSE){
      $this->load->view('formlogin/login_data');
    }else{
      redirect('dashboard');
    }
  }

  function logout(){
    $this->session->sess_destroy();
    redirect('login','refresh');
  }
}