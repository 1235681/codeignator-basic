<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Course_Details extends CI_Model {
    function getdetails($course_id) {
        $sqli = "SELECT c.id as course_id,
            c.name,
            c.description,
            c.duration,
            c.img,
            cp.chapters,
            cp.details,
            cp.status,
            cp.id as chapter_id,
            cp.date
        FROM course_chapter_map as cm
        RIGHT JOIN course as c on c.id = cm.course_id
        LEFT JOIN chapters as cp ON FIND_IN_SET(cp.id, cm.chapter_id)
        WHERE c.id ='$course_id'";
    // $sqli="SELECT * from course where id=$course_id";
        $query = $this->db->query($sqli);
        return $query->result_array();
    }

  

    public function delete_course($course_id){
        $sql = "DELETE FROM course WHERE id = ?";
        $this->db->query($sql, array($course_id));

        return ($this->db->affected_rows() > 0);
    }

    public function deleteChapter($cid, $id) {
        if (empty($cid) || !is_numeric($cid) || empty($id) || !is_numeric($id)) {
            return false;
        }
    
        $cid = $this->db->escape($cid);
        $id = $this->db->escape($id);
    
        $sql = "UPDATE course_chapter_map
                SET chapter_id = TRIM(BOTH ',' FROM REPLACE(CONCAT(',', chapter_id, ','), ',$id,', ','))
                WHERE course_id = $cid
                AND FIND_IN_SET($id, chapter_id) > 0";
    
        $query = $this->db->query($sql);
    
        return $query;
    }
    
    }

?>