<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function validate() {

        $usuario = $this->security->xss_clean($this->input->post('usuario'));
        $clave = md5($this->security->xss_clean($this->input->post('clave')));

        $this->db->where('usuario', $usuario);
        $this->db->where('clave', $clave);
        $this->db->where('estado', 'A');

        $query = $this->db->get('usuario');


        if ($query->num_rows() > 0) {
            $row = $query->row();
            $data = array(
                'usuario_id' => $row->usuario_id,
                'nombre' => $row->nombre,
                'paterno' => $row->paterno,
                'materno' => $row->materno,
                'conectado' => 1,
                'administrador' => $row->administrador
            );

            $this->session->set_userdata($data);
            return true;
        }
    }

}
