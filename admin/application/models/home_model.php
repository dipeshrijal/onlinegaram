<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home_model extends CI_Model {

    public function validate_admin($username, $password) {
        $username = $username;
        $password = $password;
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array('user_name' => $username,
            'user_password' => md5($password)
                )
        );
        $query = $this->db->get();
        return $query->result();
    }

    public function get_member($user_id) {
        $query = $this->db->get_where('user', array('user_id' => $user_id));
        return $query->result();
    }

}

?>
