<?php 
class ValidForm extends CI_Controller{
  public function getformdatademo(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('email', 'EmailID', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');
    $this->form_validation->set_rules('name', 'Name', 'required|alpha');
    $this->form_validation->set_rules('age', 'age', 'required|numeric');

    if ($this->form_validation->run() == FALSE)
    {
   
      $this->load->view('formval');
    }
    else
    {
    $postdata=$this->input->POST('name');
    echo( $postdata);
       echo"login success!";
    }
}


  }


?>

