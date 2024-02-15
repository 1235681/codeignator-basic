<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {

//     public function updateCourse($courseId, $data) {
        // $sql = "UPDATE `course` SET 
        //         `name` = ?,
        //         `description` = ?,
        //         `duration` = ?,
        //         `img` = ?,
        //         `status` = ?
        //         WHERE `id` = ?";

        // $this->db->query($sql, array(
        //     $data['name'],
        //     $data['description'],
        //     $data['duration'],
        //     $data['img'],
        //     $data['status'],    
        //     $courseId
        // ));

//         return $query;
//     }

//     public function getCourseDetails($courseId) {
//         $sql = "SELECT `id`, `name`, `description`, `duration`, `img`, `status`, `date`
//                 FROM `course`
//                 WHERE `id` = ?";
    
//         $query = $this->db->query($sql, array($courseId));
//         return $query->row_array();
    

// }
public function updatedata($courseId, $data) {
    $sql = "UPDATE `course` SET 
        `name` = ?,
        `description` = ?,
        `duration` = ?,
        `img` = ?,
        `status` = ?
        WHERE `id` = ?";

    $this->db->query($sql, array(
        $data['name'],
        $data['description'],
        $data['duration'],
        $data['img'],
        $data['status'],
        $courseId
    ));


    return $this->db->affected_rows();
}


public function getCoursedetails($courseId) {
    $sql = "SELECT `id`, `name`, `description`, `duration`, `img`, `status`, `date` FROM `course` WHERE `id` = $courseId";
    $query = $this->db->query($sql, array($courseId));
    return $query->result_array();
}



  
}

