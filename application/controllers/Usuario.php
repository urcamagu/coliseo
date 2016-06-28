<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usuario_model');
        $this->check_isvalidated();
       // !($this->session->userdata('administrador') == 0) ? die('Acceso restringido') : '';
    }

    public function index() {
        $data['usuario'] = $this->usuario_model->getAll();
        $this->layout->view('usuario/index_view', $data);
    }

    public function add_user() {
        $this->layout->view('usuario/new_view');
    }

    public function new_user() {
        if ($this->usuario_model->save()) {
            $data['msg'] = "<div class='alert alert-success' role='alert'>Datos registrados con éxito</div>";
            $data['usuario'] = $this->usuario_model->getAll();
            $this->layout->view('usuario/index_view', $data);
        }
    }

    public function edit_user($id_usuario) {
        $data['usuario'] = $this->usuario_model->search($id_usuario);
        //print_r($data['usuario']);
        $this->layout->view('usuario/new_view', $data);
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('conectado') && $this->session->userdata('administrador') != 1)
            redirect('login');
    }

}
