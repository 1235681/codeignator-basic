

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
 
</head>
<body>
  <div>
 
  <?php		$this->load->view('header_message');  ?>;
  
  </div>
  
  <div class="">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-lg-3">
        <?php 
      	$this->load->view('welcome_message'); 
        ?>
      </div>

      <div class="col-md-8 col-sm-8 col-lg-8">
        <div class='row row-one'>
          <h1>Choose Your Course</h1>
                 
          <div class="card" style="width:20rem; padding:30px; margin-right:20px;">
            <img src="https://cdn3.vectorstock.com/i/1000x1000/78/37/free-online-courses-template-vector-21627837.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text"> Find Complete Info on various streams course details present here. Refer to Category Wise list of courses & career options to pursue ...</p>
              <button type="button" style="background-color:#c4b723;border-radius:10px; border:none;padding:10px;">Enroll</button>
            </div>
          </div>

          <div class="card" style="width:20rem; padding:30px; margin-right:20px;">
            <img src="https://img.freepik.com/free-photo/development-knowledge-study-education-concept_53876-144838.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text"> Find Complete Info on various streams course details present here. Refer to Category Wise list of courses & career options to pursue ...</p>
              <button type="button" style="background-color:#c4b723;border-radius:10px; border:none;padding:10px;">Enroll</button>
            </div>
          </div>
          <div class="card" style="width:20rem; padding:30px; margin-right:20px;">
            <img src="https://img.freepik.com/free-vector/online-tutorials-concept_52683-37480.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text"> Find Complete Info on various streams course details present here. Refer to Category Wise list of courses & career options to pursue ..</p>
              <button type="button" style="background-color:#c4b723;border-radius:10px; border:none;padding:10px;">Enroll</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div>
  
<?php $this->load->view('footer_message'); ?>
 
  </div>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>
