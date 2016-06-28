<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Noticia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('seccion_noticia_model');
        $this->load->model('noticia_model');
        $this->check_isvalidated();
        // !($this->session->newsdata('administrador') == 0) ? die('Acceso restringido') : '';
    }

    public function index() {
        $data['seccion_noticia'] = $this->seccion_noticia_model->getAll();
        $data['noticia'] = $this->noticia_model->getAll();
        $this->layout->view('noticia/index_view', $data);
    }

    public function add_news() {
        $this->layout->view('noticia/new_view');
    }

    public function new_news() {
        if ($this->noticia_model->save()) {
            $data['msg'] = "<div class='alert alert-success' role='alert'>Datos registrados con éxito</div>";
            $data['noticia'] = $this->noticia_model->getAll();
            $this->layout->view('noticia/index_view', $data);
        }
    }

    public function edit_news($id_noticia) {
        $data['noticia'] = $this->noticia_model->search($id_noticia);
        //print_r($data['Noticia']);
        $this->layout->view('noticia/new_view', $data);
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('conectado') && $this->session->userdata('administrador') != 1)
            redirect('login');
    }

}
