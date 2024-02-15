<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('session'); 
    }

    public function index() {
        $this->load->view('index-message');
    }
    public function indexdemo() {
        $this->load->model('CourseList');
        $data['result'] = $this->CourseList->getdata();
        $this->load->view('courselist_message', $data);
    }

    public function indexdemoone() {
        $this->load->model('demo');
        $data['result'] = $this->demo->demodata();
        $this->load->view('demo_message', $data);
    }

    // public function courseupdate() {
    //     $this->load->model('Course_model');

    //     if ($this->input->server('REQUEST_METHOD') == 'POST') {
    //         $courseId = $this->input->post('courseId');
    //         $newName = $this->input->post('courseName');
    //         $newDescription = $this->input->post('courseDescription');
    //         $newDuration = $this->input->post('courseDuration');
    //         $newImage = $this->input->post('courseImage');
    //         $newStatus = $this->input->post('courseStatus');
          

    //         $data = array(
    //             'name' => $newName,
    //             'description' => $newDescription,
    //             'duration' => $newDuration,
    //             'img' => $newImage,
    //             'status' => $newStatus,
             
    //         );

    //         $affectedRows = $this->Course_model->updateCourse($courseId, $data);

    //         if ($affectedRows > 0) {
    //             echo "Update successful!";
    //         } else {
    //             echo "Error updating course.";
    //         }
    //     } else {
   
    //         $courseId = $this->input->get('id');
    //         $data['course'] = $this->Course_model->getCourseDetails($courseId);

    //         $this->load->view('courseupdate', $data); 
    //     }
    // }

    public function add() {
        $this->load->view('addform');
        $this->load->model('AddForm');

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
           

            $courseName = $this->input->post('courseName');
            $courseDescription = $this->input->post('courseDescription');
            $courseDuration = $this->input->post('courseDuration');
            $courseImg = $this->input->post('courseImg');
            $courseStatus = $this->input->post('courseStatus');

            $data = array(
                'name' => $courseName,
                'description' => $courseDescription,
                'duration' => $courseDuration,
                'img' => $courseImg,
                'status' => $courseStatus,
            );

            $this->AddForm->insertCourse($data);

            echo "Course added successfully!";
        } else {
            // echo "Course added not successfully!";
            // $this->load->view('addform');
        }
        

    }

    function getcoursedetails(){
        $this->load->model('Course_Details');
        $course_id = $this->input->get('id');
        $dataname['result1'] = $this->Course_Details->getdetails($course_id);
        $this->load->view('coursedeatils-message', $dataname);   
    }
   
    public function delete_course() {
        $this->load->model('Course_Details');
        $input_data = file_get_contents("php://input");
        $data = json_decode($input_data);

        if ($data && isset($data->courseId)) {
            $course_id = $data->courseId;
            
           
            $deleted = $this->Course_Details->delete_course($course_id);

      
            $response = $deleted ? "Course deleted successfully" : "Error deleting course";
            $this->output->set_content_type('application/json')->set_output(json_encode($response));
        } else {
            echo "Invalid data received";
        }
    }
    public function getcourseid(){
        $this->load->model('Course_model');
        $courseId = $this->input->get('id');
        $data['result11']=$this->Course_model->getCoursedetails($courseId);
        $this->load->view('courseupdate',$data);
    }

    public function courseupdatedata() {
        $this->load->view('courseupdate');
        $this->load->model('Course_model');
    
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $courseId = $this->input->post('courseId');
            $courseName = $this->input->post('courseName');
            $courseDescription = $this->input->post('courseDescription');
            $courseDuration = $this->input->post('courseDuration');
            $courseImage = $this->input->post('courseImage');
            $courseStatus = $this->input->post('courseStatus');
    
            $data = array(
                'name' => $courseName,
                'description' => $courseDescription,
                'duration' => $courseDuration,
                'img' => $courseImage,
                'status' => $courseStatus,
            );
    
            $this->Course_model->updatedata($courseId, $data);
            $this->session->set_flashdata('staus', 'updatedsuccesfully');
            echo "Update added successfully!";
        } else {
            // Handle non-POST requests or display a message
            // echo "Course update not successful!";
        }
    }
    public function signin() {
        $this->load->view('signin');

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $enteremail = $this->input->post('itemname');
            $enterpassword = $this->input->post('itemdesc');

            if (!empty($enteremail) && !empty($enterpassword)) {
                $this->load->model('SignInModel'); 
                $user_exists = $this->SignInModel->check_user($enteremail, $enterpassword);

                if ($user_exists) {
                    $this->session->set_userdata('email', $enteremail);
                    redirect('http://localhost/CodeigniterDemo/index.php/Welcome/'); 
                } else {
                    echo "User does not exist";
                }
            } else {
                echo "Email or password not entered";
            }
        }
    }

   public function leadsdata(){
    $this->load->model('Leads');
    $data['formData']=$this->Leads->getleadsdata();
    $this->load->view('leads',$data);
   }

   public function deleteChapterDetails(){
    $this->load->view('coursedeatils-message'); 
    $this->load->model('Course_Details');
    $cid = $this->input->post('cid');
    $id = $this->input->post('id');

    $query = $this->Course_Details->deleteChapter($cid, $id);

    if ($query) {
        echo "Delete successful";
    } else {
        echo "Delete failed: " . $this->db->error();
    }
}
public function enrolldata(){
$this->load->model('Enroll');
$data['result1']=$this->Enroll->getenrolldata();
$this->load->view('enroll',$data);
}

}
 
    