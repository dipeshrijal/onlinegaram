<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class product extends CI_Controller {

    public function index() {
        $this->load->view('product');
    }

    public function list_product($start = 0) {
        $cat_id = $this->uri->segment(3);
        $sub_cat_id = $this->uri->segment(4);
        $abc = $this->product_model->count_product();
        $data['category'] = $this->home_model->get_category();
        $data['get_feature'] = $this->home_model->get_feature();
        $data['get_bestseller'] = $this->home_model->get_bestseller();
        $data['product_list'] = $this->product_model->list_product(9, $start);
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'product/list_product/' . $cat_id . '/' . $sub_cat_id . '/';
        $config['total_rows'] = $abc;
        $config['per_page'] = 9;
        $config['uri_segment'] = 5;
        $config['full_tag_open'] = '<div class="pagination" style="font-size:large;"><div class="links">';
        $config['full_tag_close'] = '</div></div>';
        $this->pagination->initialize($config);
        $data['pages'] = $this->pagination->create_links();
        $this->load->view('product', $data);
    }

    public function product_details() {
        $product_id = $this->uri->segment(3);
        $sub_cat_id = $this->uri->segment(4);
        $data['prod_details'] = $this->product_model->product_details($product_id);
        $data['get_image'] = $this->product_model->get_image($product_id);
        $data['related_news'] = $this->product_model->related_news($sub_cat_id);
        $data['category'] = $this->home_model->get_category();
        $data['get_feature'] = $this->home_model->get_feature();
        $this->load->view('product_details', $data);
    }

    public function all_products($start = 0) {
        $data['category'] = $this->home_model->get_category();
        $data['get_feature'] = $this->home_model->get_feature();
        $data['get_bestseller'] = $this->home_model->get_bestseller();
        $abc = $this->product_model->getAllproducts_count();
        $data['allprod'] = $this->product_model->getAllproducts(9, $start);
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'product/all_products/';
        $config['total_rows'] = $abc;
        $config['per_page'] = 9;
        $config['uri_segment'] = 3;
        $config['full_tag_open'] = '<div class="pagination" style="font-size:large;"><div class="links">';
        $config['full_tag_close'] = '</div></div>';
        $this->pagination->initialize($config);
        $data['pages'] = $this->pagination->create_links();
        $this->load->view('all_products', $data);
    }

    public function getProductstatus($start = 0) {
        $product_status = $this->uri->segment(3);
        $data['category'] = $this->home_model->get_category();
        $data['get_feature'] = $this->home_model->get_feature();
        $data['get_bestseller'] = $this->home_model->get_bestseller();
        $abc  = $this->product_model->getProductstatus_count();
        $data['pStatus'] = $this->product_model->getProductstatus(9, $start);
        
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'product/getProductstatus/' . $product_status.'/';
        $config['total_rows'] = $abc;
        $config['per_page'] = 9;
        $config['uri_segment'] = 4;
        $config['full_tag_open'] = '<div class="pagination" style="font-size:large;"><div class="links">';
        $config['full_tag_close'] = '</div></div>';
        $this->pagination->initialize($config);
        $data['pages'] = $this->pagination->create_links();
        
        $this->load->view('product_status', $data);
    }

}