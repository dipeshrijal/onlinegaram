<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class subcategory_model extends CI_Model {

    function insert_subCategory() {
        $data = array(
            'cat_id' => $this->input->post('category_name'),
            'sub_cat_name' => $this->input->post('subCategory')
        );
        $this->db->insert('sub_category', $data);
    }

    function view_subcategory() {
        $this->db->select('*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.cat_id=sub_category.cat_id');
        $query = $this->db->get();
        return $query->result();
    }

    function deleteSubCategory($sub_cat_id) {
        $this->db->delete('sub_category', array('sub_cat_id' => $sub_cat_id));
    }

    function edit_subcategory($sub_cat_id) {
        $this->db->select('*');
        $this->db->from('sub_category');
        $this->db->where('sub_cat_id', $sub_cat_id);
        $query = $this->db->get();
        return $query->result();
    }

    function update_subcategory() {
        $sub_cat_id = $this->input->post('sub_categoryid');
        $data = array(
            'sub_cat_name' => $this->input->post('subCategory'),
            'cat_id' => $this->input->post('category_name')
        );
        $this->db->where('sub_cat_id', $sub_cat_id);
        if ($this->db->update('sub_category', $data)) {
            return true;
        } else {
            return false;
        }
    }

}