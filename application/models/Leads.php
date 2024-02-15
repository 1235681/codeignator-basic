<?php 
class Leads  extends CI_Model{

    public function getleadsdata(){
        $sql = "SELECT `id`, `name`, `email`, `number`, `comment`, `date` FROM `form_data`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    


}


 ?>