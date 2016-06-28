<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Seccion_noticia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('seccion_noticia_model');
        $this->check_isvalidated();
       // !($this->session->secciondata('administrador') == 0) ? die('Acceso restringido') : '';
    }

    public function index() {
        $data['seccion_noticia'] = $this->seccion_noticia_model->getAll();
        $this->layout->view('seccion_noticia/index_view', $data);
    }

    public function add_seccion() {
        $this->layout->view('seccion_noticia/new_view');
    }

    public function new_seccion() {
        if ($this->seccion_noticia_model->save()) {
            $data['msg'] = "<div class='alert alert-success' role='alert'>Datos registrados con éxito</div>";
            $data['seccion_noticia'] = $this->seccion_noticia_model->getAll();
            $this->layout->view('seccion_noticia/index_view', $data);
        }
    }

    public function edit_seccion($id_seccion_noticia) {
        $data['seccion_noticia'] = $this->seccion_noticia_model->search($id_seccion_noticia);
        //print_r($data['seccion_noticia']);
        $this->layout->view('seccion_noticia/new_view', $data);
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('conectado') && $this->session->userdata('administrador') != 1)
            redirect('login');
    }

}
