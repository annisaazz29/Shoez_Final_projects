<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function index(){
        $user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['judul'] = 'Home Page';
        $this->load->view('templates/header_dashbo', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer_dashbo');
    }
}