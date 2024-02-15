<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChapterList extends CI_Controller {



    public function index() {
        $this->load->view('index-message');
    }

    public function chapterdetails() {
        $this->load->model('ChapterDetails');
        $dataone['chapters'] = $this->ChapterDetails->retivedata();
        $this->load->view('chapterlist_message', $dataone);
    }
    public function chapteradd(){
        $this->load->view('addnewchapter');
        $this->load->model('ChapterDetails');
    
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $chaptersName = $this->input->post('chaptersName');
            $chapterDetails = $this->input->post('chapterDetails');
            $chapterStatus = $this->input->post('chapterStatus'); // Update variable name
            
            $data = array(
                'chapters' => $chaptersName, // Update variable name
                'detail' => $chapterDetails,
                'status' => $chapterStatus,
            );
    
            $this->ChapterDetails->addchapter($data);
    
            echo "Chapter added successfully!";
        } else {
        
        }
    }
    public function chapterupdateid()
    {
        $this->load->model('ChapterDetails');
        $chapterId = $this->input->get('id');
        $datanew['result'] = $this->ChapterDetails->updatechapter($chapterId);
        $this->load->view('chapterupdate',$datanew);
    }
   public function updatechapter(){
    $this->load->view('chapterupdate');
    $this->load->model('ChapterDetails');
    if($this->input->server('REQUEST_METHOD') == 'POST') {
        $chapterId = $this->input->post('chapterId');
        $chapterName = $this->input->post('chapterName');
        $chapterDetails = $this->input->post('chapterDetails');
        $chapterStatus = $this->input->post('chapterStatus');

        $data = array(
            'chapters' => $chapterName,
            'details' => $chapterDetails,
            'status' => $chapterStatus,
        );

        $this->ChapterDetails->updatechapterone($chapterId, $data);

        echo "Chapter update added successfully!";
    } else {
        // Handle non-POST requests or display a message
        // echo "Chapter update not successful!";
    }
}

public function delete_chapter() {
    $this->load->model('ChapterDetails');
    $input_data = file_get_contents("php://input");
    $data = json_decode($input_data);

    if ($data && isset($data->chapterId)) {
        $chapterId = $data->chapterId;
        
        $deleted = $this->ChapterDetails->delete_chapter($chapterId);

        if ($deleted) {
            $response = "Chapter deleted successfully";
        } else {
            $response = "Error deleting chapter";
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    } else {
        echo "Invalid data received";
    }
}

public function assigncourse(){
    $this->load->model('ChapterDetails');
    $course_id = $this->input->get('id');


    $data['courses']=$this->ChapterDetails->getassigncourse($course_id);
    $data['resultinfo']=$this->ChapterDetails->getassignchapter($course_id);
    $data['result1']=$this->ChapterDetails->courseassign($course_id);


    
    $this->load->view('assignchapters',$data);
}
// public function assignchapter(){
//     $this->load->model('ChapterDetails');
//     $course_id = $this->input->get('id');
//     $data['resultinfo']=$this->ChapterDetails->getassignchapter($course_id);
//     $this->load->view('assignchapters',$data);
// }
// public function getcourseassign(){
//     $this->load->model('ChapterDetails');
//     $course_id = $this->input->get('id');
//     $data['result1']=$this->ChapterDetails->courseassign($course_id);
//     $this->load->view('assignchapters',$data);
// }
public function assignchaptersone() {
    $this->load->model('ChapterDetails'); 

    $course_id = $this->input->post('course_id');
    $chapter_id = $this->input->post('chapter_id'); 

    $response = $this->ChapterDetails->assign_chapters($course_id, $chapter_id);
    

    if ($response) {
        echo json_encode("Chapters added successfully");
    } else {
        echo json_encode("Error inserting chapters");
    }
}


public function getenrolldata(){
    $this->load->model('ChapterDetails');
    $data['chapters'] = $this->ChapterDetails->getenrolldata();
    $this->load->view('enrollchapter_message', $data);
}



   }


