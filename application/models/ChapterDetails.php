<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class ChapterDetails extends  CI_Model{
    
function retivedata(){
    $sqli = "SELECT `id`, `chapters`, `details`, `date`, `status` FROM `chapters`";
    $query = $this->db->query($sqli);
    return $query->result_array();
}

function addchapter($data){
        $sql = "INSERT INTO `chapters`(`chapters`, `details`, `status`) VALUES (?, ?, ?)";
        $query = $this->db->query($sql, array(
            $data['chapters'],
            $data['detail'],
            $data['status'],
        ));
   
        return $query;
    }

// update
    function updatechapter($chapterId) {
        $sql = "SELECT `id`, `chapters`, `details`, `date`, `status` FROM `chapters` WHERE id=?";
        $query = $this->db->query($sql, array($chapterId));
        return $query->result_array();
    }
    function updatechapterone($chapterId, $data){
            $sql = "UPDATE `chapters` SET 
                `chapters` = ?,
                `details` = ?,
                `date` = ?,
                `status` = ?
                WHERE `id` = ?";
        
            $this->db->query($sql, array(
                $data['chapters'],
                $data['details'],
                $data['date'],
                $data['status'],
                $chapterId
            ));
            return $this->db->affected_rows();
        }
        // delete
 function delete_chapter($chapterId) {
    $sql = "DELETE FROM `chapters` WHERE id = ?";
    $this->db->query($sql, array($chapterId));

    if ($this->db->error()) {
        echo "Database Error: " . $this->db->error()['message'];
    }

    return ($this->db->affected_rows() > 0);
}

// assignchapter
function getassigncourse($course_id){
    $sql = "SELECT `id`, `name` FROM `course` WHERE id = ?";
    $query = $this->db->query($sql, array($course_id));
    return $query->result_array();
}
function getassignchapter($course_id){
    $sql = "SELECT cp.*FROM chapters as cp LEFT JOIN course_chapter_map as cm ON FIND_IN_SET(cp.id,cm.chapter_id) AND cm.course_id =? WHERE cm.chapter_id IS NULL OR NOT FIND_IN_SET(cp.id,cm.chapter_id)";
    $query = $this->db->query($sql, array($course_id));
    return $query->result_array();
}

function courseassign($course_id){
    $sql1 = "SELECT cp.id,
    cp.chapters
    FROM  course_chapter_map as cm
    JOIN course as c  
    ON c.id=cm.course_id
    JOIN chapters as cp
    ON FIND_IN_SET(cp.id ,cm.chapter_id) WHERE c.id=?;";
    $query = $this->db->query($sql1, array($course_id));
    return $query->result_array();
}

// function insertchapter() {
//     $course_id = $this->input->post('course_id');
    
//     // Check if $course_id is not empty before executing DELETE query
//     if (!empty($course_id)) {
//      return $query->result_array();
// }    $sql = "DELETE FROM `course_chapter_map` WHERE course_id=$course_id";
//         $query = $this->db->query($sql);
//     } else {
//         return array('error' => 'Invalid course_id');
//     }
    
//     $chapterId = $this->input->post('chapter_id');
    
//     $sqli = "INSERT INTO `course_chapter_map`(`course_id`, `chapter_id`) VALUES ($course_id, '$chapterId')";
//     $query = $this->db->query($sqli);
    
   
  function getenrolldata(){
    $sql = "SELECT `id`, `chapters`, `details`, `date`, `status` FROM `chapters`";
    $query = $this->db->query($sql);
    return $query->result_array();
  }
  public function assign_chapters($course_id, $chapter_id) {
 
    if ($course_id !== NULL) {

        $sql_delete = "DELETE FROM course_chapter_map WHERE course_id = ?";
        $this->db->query($sql_delete, array($course_id));

        $sql = "INSERT INTO course_chapter_map (course_id, chapter_id) VALUES (?, ?)";
        $this->db->query($sql, array($course_id, $chapter_id));

        return ($this->db->affected_rows() > 0);
    } else {
   
        return false;
    }
}


    }
    




?>

