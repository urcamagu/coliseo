<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Seccion_noticia_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getAll() {
        $this->db->order_by('orden', 'asc');
        $query = $this->db->get('seccion_noticia');
        return $query->result_array();
    }

    function save() {
        $data = array(
            'descripcion' => $this->security->xss_clean($this->input->post('descripcion')),
            'orden' => $this->security->xss_clean($this->input->post('orden')),
            'estado' => $this->security->xss_clean($this->input->post('estado'))
        );
        if ($id_seccion_noticia = $this->security->xss_clean($this->input->post('id_seccion_noticia'))) {
            $this->db->where('id_seccion_noticia', $id_seccion_noticia);
            $this->db->update('seccion_noticia', $data);
        } else {
            $this->db->insert('seccion_noticia', $data);
        }
        return true;
    }

    function search($id_seccion_noticia) {
        $this->db->where('id_seccion_noticia', $id_seccion_noticia);
        $query = $this->db->get('seccion_noticia');
        return $query->result_array();
    }

}
