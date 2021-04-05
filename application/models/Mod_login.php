<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Mod_login extends CI_Model {

    public function auth($user,$pass){
        $this->db->where('username',$user);
        $this->db->where('password',$pass);
        return $this->db->get('anggota')->row();
    }
}