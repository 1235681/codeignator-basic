<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignInModel extends CI_Model {

    public function check_user($enteremail, $enterpassword) {
        $query = $this->db->get_where('user-info', array('email' => $enteremail, 'password' => $enterpassword));
        return $query->num_rows() > 0;
    }
}
