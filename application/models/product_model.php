<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class product_model extends CI_Model {

    function count_product() {
        $cat_id = $this->uri->segment(3);
        $sub_cat_id = $this->uri->segment(4);
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->join('sub_category', 'product.sub_cat_id=sub_category.sub_cat_id');
        $this->db->join('category', 'category.cat_id=sub_category.cat_id');
        $this->db->where('sub_category.sub_cat_id', $sub_cat_id);
        $this->db->where('product.sub_cat_id', $sub_cat_id);
        $this->db->where('product_image.product_image_type', 'poster');
        $this->db->group_by('product_image.product_id');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function list_product($start, $num) {
        $cat_id = $this->uri->segment(3);
        $sub_cat_id = $this->uri->segment(4);
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->join('sub_category', 'product.sub_cat_id=sub_category.sub_cat_id');
        $this->db->join('category', 'category.cat_id=sub_category.cat_id');
        $this->db->where('sub_category.sub_cat_id', $sub_cat_id);
        $this->db->where('product.sub_cat_id', $sub_cat_id);
        $this->db->where('product_image.product_image_type', 'poster');
        $this->db->limit(9, $this->uri->segment('5'));
        $this->db->group_by('product_image.product_id');
        $query = $this->db->get();
        return $query->result();
    }

    function product_details($product_id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->where('product.product_id', $product_id);
        $this->db->where('product_image.product_image_type', 'poster');
        $this->db->group_by('product_image.product_id');
        $query = $this->db->get();
        return $query->result();
    }

    function get_image($product_id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->where('product.product_id', $product_id);
        $this->db->where("product_image.product_image_type !=", 'slider');
        $query = $this->db->get();
        return $query->result();
    }

    function getAllproducts($start, $num) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->where('product_image.product_image_type', 'poster');
        $this->db->limit(9, $this->uri->segment(3));
        $this->db->group_by('product_image.product_id');
        $query = $this->db->get();
        return $query->result();
    }

    function getAllproducts_count() {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->where('product_image.product_image_type', 'poster');
        $this->db->group_by('product_image.product_id');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function getProductstatus($start, $num) {
        $product_status = $this->uri->segment(3);
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->where('product_image.product_image_type', 'poster');
        $this->db->where('product.product_status', $product_status);
        $this->db->limit(9, $this->uri->segment('4'));
        $this->db->group_by('product_image.product_id');
        $query = $this->db->get();
        return $query->result();
    }

    function getProductstatus_count() {
        $product_status = $this->uri->segment(3);
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->where('product_image.product_image_type', 'poster');
        $this->db->where('product.product_status', $product_status);
        $this->db->group_by('product_image.product_id');
        $query = $this->db->get()->num_rows();
        return $query;
        ;
    }

    function related_news($sub_cat_id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->join('sub_category', 'product.sub_cat_id=sub_category.sub_cat_id');
        $this->db->join('category', 'category.cat_id=sub_category.cat_id');
        $this->db->where('product.sub_cat_id', $sub_cat_id);
        $this->db->where('product_image.product_image_type', 'poster');
        $this->db->group_by('product_image.product_id');
        $this->db->order_by('product.product_id', 'RANDOM');
        $query = $this->db->get(0, 4);
        return $query->result();
    }

}