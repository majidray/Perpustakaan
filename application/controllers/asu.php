<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Ciperpus extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $ciperpus = $this->db->get('user')->result();
        } else {
            $this->db->where('id', $id);
            $ciperpus = $this->db->get('user')->result();
        }
        $this->response($ciperpus, 200);
    }
function index_post() {
       $data = array(
                  'id'    => $this->post('id'),
                  'nama'  => $this->post('nama'),
                  'username' => $this->post('username'),
                  'password'   =>  $this->post('password'),
                  'level'=>  $this->post('level'));
       $insert = $this->db->insert('user', $data);
       if ($insert) {
           $this->response($data, 200);
       } else {
           $this->response(array('status' => 'fail', 502));
       }
   }
    //Masukan function selanjutnya disini
}
?>