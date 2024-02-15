<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class AddForm  extends CI_Model{

    public function insertCourse($data) {
        $sql = "INSERT INTO course (name, description, duration, img, status) VALUES (?, ?, ?, ?, ?)";
        $query = $this->db->query($sql, array(
            $data['name'],
            $data['description'],
            $data['duration'],
            $data['img'],
            $data['status']
        ));
   
        return $query;
    }
    
    


}


 ?>