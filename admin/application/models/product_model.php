<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class product_model extends CI_Model {

    function insert_product() {

        $data = array(
            'sub_cat_id' => $this->input->post('sName'),
            'product_name' => $this->input->post('productName'),
            'product_desc' => $this->input->post('productDesc'),
            'product_price' => $this->input->post('productPrice'),
            'product_discount_price' => $this->input->post('productdPrice'),
            'product_color' => $this->input->post('productColor'),
            'product_code' => $this->input->post('productCode'),
            'product_size' => $this->input->post('productSize'),
            'product_status' => $this->input->post('pStatus'),
            'product_availability' => $this->input->post('pAvailability')
        );
        $this->db->insert('product', $data);

        $product_id = $this->db->insert_id();

        $new_file = $_FILES['userfile1']['name'];
        $poster_name = "poster" . date('Y-m-dH-i-s') . '.jpg';
        $new_file1 = $_FILES['userfile2']['name'];
        $right_name = "right" . date('Y-m-dH-i-s') . '.jpg';
        $new_file2 = $_FILES['userfile3']['name'];
        $left_name = "left" . date('Y-m-dH-i-s') . '.jpg';


        $data = array(
            array(
                'product_image_name' => $poster_name,
                'product_image_path' => 'products/' . $poster_name,
                'product_image_type' => 'poster',
                'product_id' => $product_id
            ),
            array(
                'product_image_name' => $right_name,
                'product_image_path' => 'products/' . $right_name,
                'product_image_type' => 'right',
                'product_id' => $product_id
            ),
            array(
                'product_image_name' => $left_name,
                'product_image_path' => 'products/' . $left_name,
                'product_image_type' => 'left',
                'product_id' => $product_id
            ),
        );
        $this->db->insert_batch('product_image', $data);
    }

    function view_product() {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('sub_category', 'product.sub_cat_id=sub_category.sub_cat_id');
        $this->db->join('category', 'category.cat_id=sub_category.cat_id');
        $query = $this->db->get();
        return $query->result();
    }

    function insert_image() {
        $image_type = $this->input->post('image_type');
        $product_id = $this->input->post('product_name');
        $file = $_FILES ['userfile4']['name'];
        $poster_name = "$image_type" . date('Y-m-dH-i-s') . '.jpg';
        $data = array(
            'product_image_name' => $poster_name,
            'product_image_path' => 'products/' . $poster_name,
            'product_image_type' => $image_type,
            'product_id' => $product_id
        );
        $this->db->insert('product_image', $data);
    }

    function edit_product($product_id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('sub_category', 'product.sub_cat_id=sub_category.sub_cat_id');
        $this->db->join('category', 'category.cat_id=sub_category.cat_id');
        $this->db->where('product.product_id', $product_id);
        $query = $this->db->get();
        return $query->result();
    }

    function edit_image($product_id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->where('product.product_id', $product_id);
        $query = $this->db->get();
        return $query->result();
    }

    function update_product() {
        $product_id = $this->input->post('product_id');
        $data = array(
            'sub_cat_id' => $this->input->post('sName'),
            'product_name' => $this->input->post('productName'),
            'product_desc' => $this->input->post('productDesc'),
            'product_price' => $this->input->post('productPrice'),
            'product_discount_price' => $this->input->post('productdPrice'),
            'product_color' => $this->input->post('productColor'),
            'product_code' => $this->input->post('productCode'),
            'product_size' => $this->input->post('productSize'),
            'product_status' => $this->input->post('pStatus'),
            'product_availability' => $this->input->post('pAvailability')
        );
        $this->db->where('product_id', $product_id);
        if ($this->db->update('product', $data)) {
            return true;
        } else {
            return false;
        }
    }

    function update_image() {
        $product_image_id = $this->input->post('image_id');
        $old_file = $this->input->post('old_file_name');

        $data = array(
            'product_image_type' => $this->input->post('image_type'),
            'product_image_name' => $old_file,
            'product_image_path' => 'products/' . $old_file,
            'product_image_id' => $product_image_id
        );
        $this->db->update('product_image', array('product_image_id', $product_image_id));
    }

    function product_image($product_id) {

        $this->db->select('*');
        $this->db->from('product_image');
        //$this->db->join('product', 'product.product_id=product_image.product_id');
        $this->db->where('product_image.product_id', $product_id);
        $query = $this->db->get();
        return $query->result();
    }

}