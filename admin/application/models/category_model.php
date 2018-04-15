<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class category_model extends CI_Model {

    function insert_category() {
        $data = array(
            'cat_name' => $this->input->post('category'),
        );
        $this->db->insert('category', $data);
    }

    function update_category() {
        $cat_id = $this->input->post('cat_id');
        $data = array(
            'cat_name' => $this->input->post('category'),
        );
        $this->db->where('cat_id', $cat_id);
        if ($this->db->update('category', $data)) {
            return true;
        } else {
            return false;
        }
    }

    function view_category() {
        $this->db->select('*');
        $this->db->from('category');
        $query = $this->db->get();
        return $query->result();
    }

    function deleteCategory($cat_id) {
        $this->db->delete('category', array('cat_id' => $cat_id));
    }

    function edit_category($cat_id) {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('cat_id', $cat_id);
        $query = $this->db->get();
        return $query->result();
    }

}