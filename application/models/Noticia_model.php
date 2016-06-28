<?php

if (!defined('BASEPATH')){
    exit('No direct script access allowed');
}

class Noticia_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getAll() {
        $this->db->order_by('fecha_desde', 'desc');
        $this->db->limit(10);
        $query = $this->db->get('noticia');
        return $query->result_array();
    }

    function save() {
        $data = array(
            'id_seccion_noticia' => $this->security->xss_clean($this->input->post('id_seccion_noticia')),
            'titulo' => $this->security->xss_clean($this->input->post('titulo')),
            'fecha_desde' => $this->security->xss_clean($this->input->post('fecha_desde')),
            'fecha_hasta' => $this->security->xss_clean($this->input->post('fecha_hasta')),
            'estado' => $this->security->xss_clean($this->input->post('estado'))
        );
        if ($id_noticia = $this->security->xss_clean($this->input->post('id_noticia'))) {
            $this->db->where('id_noticia', $id_noticia);
            $this->db->update('noticia', $data);
        } else {
            $this->db->insert('noticia', $data);
        }
        return true;
    }

    function search($id_noticia) {
        $this->db->where('id_noticia', $id_noticia);
        $query = $this->db->get('noticia');
        return $query->result_array();
    }

}
