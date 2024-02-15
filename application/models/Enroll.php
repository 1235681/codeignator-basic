
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Enroll extends CI_Model{
    function getenrolldata() {
        $sql = "SELECT * FROM course";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

        public function checkExistingEnrollment($email, $course) {
            $existingEnrollment = $this->db->query("SELECT course FROM form_data WHERE email = ? AND course = ?", array($email, $course));
            return $existingEnrollment->num_rows() > 0;
        }
    
        function insertEnrollment($data) {
            $this->db->insert('form_data', $data);
            return $this->db->insert_id();
        }
        
    }



 ?>