<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home_model extends CI_Model {

    function get_category() {
        $this->db->select('*');
        $this->db->from('category');
        $query = $this->db->get();
        return $query->result();
    }

    function fetch_subcat($cat_id) {
        $this->db->select('*');
        $this->db->from('sub_category');
        $this->db->where('cat_id', $cat_id);
        $query = $this->db->get();
        return $query->result();
    }

    function get_special() {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->join('sub_category', 'product.sub_cat_id=sub_category.sub_cat_id');
        $this->db->join('category', 'category.cat_id=sub_category.cat_id');
        $this->db->where('product_image.product_image_type', 'poster');
        $this->db->where('product.product_status', 'special');
        $this->db->group_by('product_image.product_id');
        $this->db->order_by('product.product_id', 'RANDOM');
        $query = $this->db->get(0, 6);
        return $query->result();
    }

    function get_latest() {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->join('sub_category', 'product.sub_cat_id=sub_category.sub_cat_id');
        $this->db->join('category', 'category.cat_id=sub_category.cat_id');
        $this->db->where('product_image.product_image_type', 'poster');
        $this->db->where('product.product_status', 'new');
        $this->db->group_by('product_image.product_id');
        $this->db->order_by('product.product_id', 'RANDOM');
        $query = $this->db->get(0, 6);
        return $query->result();
    }

    function get_featured() {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->join('sub_category', 'product.sub_cat_id=sub_category.sub_cat_id');
        $this->db->join('category', 'category.cat_id=sub_category.cat_id');
        $this->db->where('product_image.product_image_type', 'poster');        
        $this->db->where('product.product_status', 'featured');
        $this->db->group_by('product_image.product_id');
        $this->db->order_by('product.product_id', 'RANDOM');
        $query = $this->db->get(0, 6);
        return $query->result();
    }

    function get_feature() {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->join('sub_category', 'product.sub_cat_id=sub_category.sub_cat_id');
        $this->db->join('category', 'category.cat_id=sub_category.cat_id');
        $this->db->where('product_image.product_image_type', 'poster');
        $this->db->where('product.product_status', 'featured');
        $this->db->group_by('product_image.product_id');
        $this->db->order_by('product.product_id', 'RANDOM');
        $query = $this->db->get(0, 2);
        return $query->result();
    }

    function get_bestseller() {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->join('sub_category', 'product.sub_cat_id=sub_category.sub_cat_id');
        $this->db->join('category', 'category.cat_id=sub_category.cat_id');
        $this->db->where('product_image.product_image_type', 'poster');
        $this->db->where('product.product_status', 'bestsellers');
        $this->db->group_by('product_image.product_id');
        $this->db->order_by('product.product_id', 'RANDOM');
        $query = $this->db->get(0, 2);
        return $query->result();
    }
    
    function get_banner(){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->join('sub_category', 'product.sub_cat_id=sub_category.sub_cat_id');
        $this->db->join('category', 'category.cat_id=sub_category.cat_id');
        $this->db->where('product_image.product_image_type', 'slider');
        $this->db->group_by('product_image.product_id');
        $query = $this->db->get();
        return $query->result();
        
    }
    
    function search($value){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_image', 'product_image.product_id=product.product_id');
        $this->db->join('sub_category', 'product.sub_cat_id=sub_category.sub_cat_id');
        $this->db->join('category', 'category.cat_id=sub_category.cat_id');
        $this->db->where('product_image.product_image_type', 'poster');
        $this->db->group_by('product_image.product_id');
        $this->db->like('product.product_name', $value);
        $query = $this->db->get();
        return $query->result();
        
    }

}