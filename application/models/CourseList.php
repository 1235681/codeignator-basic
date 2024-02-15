
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CourseList extends CI_Model {
    function getdata() {
        $sql = "SELECT * FROM course ORDER BY id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>