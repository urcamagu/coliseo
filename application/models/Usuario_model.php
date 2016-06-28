<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getAll() {
        $this->db->order_by('usuario', 'asc');
        $query = $this->db->get('usuario');
        return $query->result_array();
    }

    function save() {
        $data = array(
            'nombre' => $this->security->xss_clean($this->input->post('nombre')),
            'paterno' => $this->security->xss_clean($this->input->post('paterno')),
            'materno' => $this->security->xss_clean($this->input->post('materno')),
            'usuario' => $this->security->xss_clean($this->input->post('usuario')),
            'clave' => md5($this->security->xss_clean($this->input->post('clave'))),
            'administrador' => $this->security->xss_clean($this->input->post('administrador')),
            'estado' => $this->security->xss_clean($this->input->post('estado'))
        );
        if ($id_usuario = $this->security->xss_clean($this->input->post('id_usuario'))) {
            $this->db->where('id_usuario', $id_usuario);
            $this->db->update('usuario', $data);
        } else {
            $this->db->insert('usuario', $data);
        }
        return true;
    }

    function search($id_usuario) {
        $this->db->where('id_usuario', $id_usuario);
        $query = $this->db->get('usuario');
        return $query->result_array();
    }

}
