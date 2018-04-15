<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home extends CI_Controller {

    public function index() {
        $data['get_special'] = $this->home_model->get_special();
        $data['get_latest'] = $this->home_model->get_latest();
        $data['get_featured'] = $this->home_model->get_featured();
        $data['get_feature'] = $this->home_model->get_feature();
        $data['get_bestseller'] = $this->home_model->get_bestseller();
        $data['get_banner'] = $this->home_model->get_banner();
        $data['category'] = $this->home_model->get_category();
        $this->load->view('home', $data);
    }

    public function privacy_policy() {
        $data['category'] = $this->home_model->get_category();
        $data['get_feature'] = $this->home_model->get_feature();
        $data['get_bestseller'] = $this->home_model->get_bestseller();
        $this->load->view('privacy_policy', $data);
    }

    public function terms() {
        $data['category'] = $this->home_model->get_category();
        $data['get_feature'] = $this->home_model->get_feature();
        $data['get_bestseller'] = $this->home_model->get_bestseller();
        $this->load->view('terms', $data);
    }

    public function contact() {
        $data['category'] = $this->home_model->get_category();
        $data['get_feature'] = $this->home_model->get_feature();
        $data['get_bestseller'] = $this->home_model->get_bestseller();
        $this->load->view('contact', $data);
    }

    function sendEmail() {
        $redirect = $this->input->post('redirect', TRUE);
        $pName = $this->input->post('pName', TRUE);
        $pCode = $this->input->post('pCode', TRUE);
        $pSize = $this->input->post('pSize', TRUE);
        $pColor = $this->input->post('pColor', TRUE);
        $dLocation = $this->input->post('dLocation', TRUE);
        $email = $this->input->post('email', TRUE);
        $phone = $this->input->post('phone', TRUE);
        $message = $this->input->post('message', TRUE);
        $Cname = $this->input->post('name', TRUE);

        $to = "dipesh.rijal@gmail.com";
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'dipesh.rijal@gmail.com',
            'smtp_pass' => 'promiser123'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from($to, $Cname);
        $this->email->to($to);
        $this->email->subject('Buying Product');
        $this->email->message(
                ' My Name is ' . $Cname . '. I want to buy ' . $pName . ' which product code is ' . $pCode . ' of ' . $pSize . ' size and ' . $pColor . ' color.' . '   
                        ' . 'My Email Address is ' . $email . '.' . '
                        ' . 'My Nearest Delivey Location is ' . $dLocation . '.' . '
                        ' . 'My contact number is ' . $phone . '.' . '
                        ' . 'Message form user: ' .
                        $message
        );

        if ($this->email->send()) {
            $this->session->set_flashdata('welcome', 'Thanks you for buying the product. Your product will soon be delivered.');
            redirect($redirect);
        } else {
            show_error($this->email->print_debugger());
            $this->session->set_flashdata('welcome', 'Something went wrong.Please try again!!');
            redirect($redirect);
        }
        $this->email->clear();
    }

    function contact_us() {
        $name = $this->input->post('name', TRUE);
        $email = $this->input->post('email', TRUE);
        $enquiry = $this->input->post('enquiry', TRUE);

        $to = "dipesh.rijal@gmail.com";
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'dipesh.rijal@gmail.com',
            'smtp_pass' => 'promiser123'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from($to, $name);
        $this->email->to($to);
        $this->email->subject('Enquiry');
        $this->email->message(
                'My Name is ' . $name . '.' .
                'My Email Address is ' . $email . '.' .
                'Message from User: ' .
                $enquiry
        );

        if ($this->email->send()) {

            $this->session->set_flashdata('welcome', 'Your email has been sent.');
            redirect('home');
        } else {
            show_error($this->email->print_debugger());
            $this->session->set_flashdata('welcome', 'Something went wrong.Please try again!!');
            redirect('home');
        }
        $this->email->clear();
    }

    public function search() {
        $value = $this->input->post('search');
        $data['search'] = $this->home_model->search($value);
        $data['category'] = $this->home_model->get_category();
        $data['get_feature'] = $this->home_model->get_feature();
        $data['get_bestseller'] = $this->home_model->get_bestseller();
        $this->load->view('search', $data);
    }

    function our_team() {
        $data['category'] = $this->home_model->get_category();
        $data['get_feature'] = $this->home_model->get_feature();
        $data['get_bestseller'] = $this->home_model->get_bestseller();
        $this->load->view('our_team', $data);
    }

}
