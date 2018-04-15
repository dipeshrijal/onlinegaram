<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home extends CI_Controller {

  

    public function index() {
        $this->load->view('index');        
    }

    function members_area() {
        $this->load->view('members_area');
    }

    function validate() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin_data = $this->home_model->validate_admin($username, $password);
        $num = count($admin_data);
        if ($num == 1) {
            foreach ($admin_data as $admin_data) {
                $email = $admin_data->user_email;
                $username = $admin_data->user_name;
                $user_id = $admin_data->user_id;
            }
            $data = array(
                'user_id' => $user_id,
                'user_email' => $email,
                'is_logged_in' => true
            );
            $this->session->set_userdata($data);
            $this->session->set_flashdata('welcome', 'Welcome Admin to Online Garaum Admin Panel.');
            redirect('home/members_area');
        } else {
            $this->session->set_flashdata('login', 'UserName or Password Incorrect....');
            redirect('home');
        }
    }

    function change_password() {
        $data['user_data'] = $this->home_model->get_member($this->session->userdata('user_id'));
        $this->load->view('change_password', $data);
    }

    function change_pass() {
        $user_id = $this->input->post('user_id');
        $old_pass = $this->input->post('old_pass');
        $new_pass = $this->input->post('new_pass');
        $confirm_pass = $this->input->post('confirm_pass');

        $old_pass1 = md5($old_pass);

        $this->db->select('user_id');
        $this->db->where('user_name', $this->session->userdata('user_name'));
        $this->db->where('user_password', $old_pass1);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            $pass = md5($new_pass);
            $data = array(
                'user_password' => $pass
            );
            if ($this->db->update('user', $data, array('user_id' => $user_id))) {
                $this->session->set_flashdata('changepassword', 'Your Password Has Been Successfully Changed');
                redirect('home/change_password');
            } else {
                $this->session->set_flashdata('changepassword', 'SomThing Is Worng !! We Will Fix It Soon...');
                redirect('home/change_password');
            }
        } else {
            $this->session->set_flashdata('changepassword', 'Please Enter Your Old Password Correctly');
            redirect('home/change_password');
        }
    }

    function logout() {
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('is_logged_in');
        $this->session->sess_destroy();        
        $this->session->set_flashdata('login', 'You have successfully logged out.');
        //$this->session->session_destroy();
        redirect('home');
    }

}