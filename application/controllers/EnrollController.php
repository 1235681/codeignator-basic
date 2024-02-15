<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EnrollController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Enroll');
    }

    public function enroll() {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $number = $this->input->post('number');
        $comment = $this->input->post('comment');
        $course = $this->input->post('course');

        if (!$this->Enroll->checkExistingEnrollment($email, $course)) {
            $data = array(
                'name' => $name,
                'email' => $email,
                'number' => $number,
                'comment' => $comment,
                'course' => $course
            );

       
            $this->Enroll->insertEnrollment($data);

    
            echo "Thank you! Our team will contact you soon.";
        } else {
            echo "This email is already registered for your selected course.";
        }
    }
}
