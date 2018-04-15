<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class error extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['category'] = $this->home_model->get_category();
        $data['get_feature'] = $this->home_model->get_feature();
        $data['get_bestseller'] = $this->home_model->get_bestseller();
        $this->load->view('error', $data);
    }

}

