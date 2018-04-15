<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class category extends CI_Controller {

    function add_category() {
        $this->load->view('add_category');
    }

    function insert_category() {
        $this->category_model->insert_category();
        $this->session->set_flashdata('welcome', 'Category Successfully Added.');
        redirect('category/view_category');
    }

    function view_category() {
        $data['category'] = $this->category_model->view_category();
        $this->load->view('view_category', $data);
    }

    function update_category() {
        $this->category_model->update_category();
        $this->session->set_flashdata('welcome', 'Category Successfully Updated.');
        redirect('category/view_category');
    }

    function edit_category() {
        $cat_id = $this->uri->segment(3);
        $data['get_category'] = $this->category_model->edit_category($cat_id);
        $this->load->view('edit_category', $data);
    }

    function deleteCategory() {
        $cat_id = $this->uri->segment(3);
        $this->category_model->deleteCategory($cat_id);
        $this->session->set_flashdata('welcome', 'Category Successfully Deleted.');
        redirect('category/view_category');
    }

}