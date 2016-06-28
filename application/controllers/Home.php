<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->check_isvalidated();
    }

    public function index() {
        $this->layout->view('/home/index_view');
    }

    private function check_isvalidated() {
        //print_r($this->session->userdata('conectado'));
        if (!$this->session->userdata('conectado'))
            redirect('login');
    }

    public function do_logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}
