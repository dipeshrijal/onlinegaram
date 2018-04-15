<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class product extends CI_Controller {

    function add_product() {
        $data ['subCategory'] = $this->subcategory_model->view_subcategory();
        $this->load->view('add_product', $data);
    }

    function view_product() {
        $data['view_product'] = $this->product_model->view_product();
        $this->load->view('view_product', $data);
    }

    function insert_product() {
        $this->do_upload();
        $this->product_model->insert_product();
        $this->session->set_flashdata('welcome', 'Product Successfully Added.');
        redirect('product/view_product');
    }

    function do_upload($image_type) {
// Has the form been posted?
// Load the library - no config specified here
        $this->load->library('upload');

// Check if there was a file uploaded - there are other ways to
// check this such as checking the 'error' for the file - if error
// is 0, you are good to code
        if (!empty($_FILES['userfile1']['name'])) {
            $poster_name = "poster" . date('Y-m-dH-i-s') . '.jpg';
            $config['file_name'] = $poster_name;
// Specify configuration for File 1
            $config['upload_path'] = './assets/img/products';
            $config['allowed_types'] = 'gif|jpg|png';
// Initialize config for File 1
            $this->upload->initialize($config);

// Upload file 1
            if ($this->upload->do_upload('userfile1')) {
                $data = $this->upload->data();
            } else {
                echo $this->upload->display_errors();
            }
        }

// Do we have a second file?
        if (!empty($_FILES['userfile2']['name'])) {
// Config for File 2 - can be completely different to file 1's config
// or if you want to stick with config for file 1, do nothing!
            $right_name = "right" . date('Y-m-dH-i-s') . '.jpg';
            $config['file_name'] = $right_name;
            $config['upload_path'] = './assets/img/products';
            $config['allowed_types'] = 'gif|jpg|png';

// Initialize the new config
            $this->upload->initialize($config);

// Upload the second file
            if ($this->upload->do_upload('userfile2')) {
                $data = $this->upload->data();
            } else {
                echo $this->upload->display_errors();
            }
        }
        if (!empty($_FILES['userfile3']['name'])) {
// Specify configuration for File 1
            $left_name = "left" . date('Y-m-dH-i-s') . '.jpg';
            $config['file_name'] = $left_name;
            $config['upload_path'] = './assets/img/products';
            $config['allowed_types'] = 'gif|jpg|png';

// Initialize config for File 1
            $this->upload->initialize($config);

// Upload file 1
            if ($this->upload->do_upload('userfile3')) {
                $data = $this->upload->data();
            } else {
                echo $this->upload->display_errors();
            }
        }
        if (!empty($_FILES['userfile4']['name'])) {
// Specify configuration for File 1
            $other_name = "$image_type" . date('Y-m-dH-i-s') . '.jpg';
            $config['file_name'] = $other_name;
            $config['upload_path'] = './assets/img/products';
            $config['allowed_types'] = 'gif|jpg|png';

// Initialize config for File 1
            $this->upload->initialize($config);

// Upload file 1
            if ($this->upload->do_upload('userfile4')) {
                $data = $this->upload->data();
            } else {
                echo $this->upload->display_errors();
            }
        }
    }

    function edit_product() {
        $product_id = $this->uri->segment(3);
        $data ['subCategory'] = $this->subcategory_model->view_subcategory();
        $data['edit_product'] = $this->product_model->edit_product($product_id);
        $this->load->view('edit_product', $data);
    }

    function edit_image() {
        $product_id = $this->uri->segment(3);
        $data['edit_product'] = $this->product_model->edit_image($product_id);
        $this->load->view('edit_image', $data);
    }

    function delete_image() {
        $product_image_id = $this->uri->segment(3);
        $image_path = $this->uri->segment(4);
        $path = "./assets/img/products/".$image_path;
        unlink($path);
        
        $this->db->delete('product_image', array('product_image_id' => $product_image_id));
        $this->session->set_flashdata('welcome', 'Image Successfully Deleted.');
        redirect('product/view_product');
    }

    function update_product() {
        $this->product_model->update_product();
        $this->session->set_flashdata('welcome', 'Product Successfully Updated.');
        redirect('product/view_product');
    }

    function delete_product() {
        $product_id = $this->uri->segment(3);
        $this->product_image($product_id);
        $this->db->delete('product', array('product_id' => $product_id));
        $this->session->set_flashdata('welcome', 'Product Successfully Deleted.');
        redirect('product/view_product');
    }

    function product_image($product_id) {

        $row = $this->product_model->product_image($product_id);

        foreach ($row as $rows) {
            $product_img_name = $rows->product_image_path;
            //echo $product_img_name;
            $path = "./assets/img/".$product_img_name;
            unlink($path);
        }
    }

    function add_image() {
        $data['list_product'] = $this->product_model->view_product();
        $this->load->view('add_image', $data);
    }

    function insert_image() {
        $image_type = $this->input->post('image_type');
        $this->do_upload($image_type);
        $this->product_model->insert_image($image_type);
        $this->session->set_flashdata('welcome', 'Image Successfully Added.');
        redirect('product/view_product');
    }

}