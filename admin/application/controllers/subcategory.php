<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class subcategory extends CI_Controller {

    function add_sub_category() {
        $data['category'] = $this->category_model->view_category();
        $this->load->view('add_subcategory', $data);
    }

    function view_sub_category() {
        $data['subCategory'] = $this->subcategory_model->view_subcategory();
        $this->load->view('view_subcategory', $data);
    }

    function insert_subCategory() {
        $this->subcategory_model->insert_subCategory();
        $this->session->set_flashdata('welcome', 'Sub-Category Successfully Added.');
        redirect('subcategory/view_sub_category');
    }

    function deleteSubCategory() {
        $sub_cat_id = $this->uri->segment(3);
        $this->subcategory_model->deleteSubCategory($sub_cat_id);
        $this->session->set_flashdata('welcome', 'Sub-Category Successfully Deleted.');
        redirect('subcategory/view_sub_category');
    }
    
    function update_subcategory(){
        $this->subcategory_model->update_subcategory();
        $this->session->set_flashdata('welcome', 'Sub-Category Successfully Updated.');
        redirect('subcategory/view_sub_category');
    }
    function edit_subcategory() {
        $sub_cat_id = $this->uri->segment(3);
        $data['category'] = $this->category_model->view_category();
        $data['get_subcategory'] =$this->subcategory_model->edit_subcategory($sub_cat_id);
        $this->load->view('edit_subcategory',$data);
    }

}