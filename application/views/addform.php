
<div>
<?php $this->load->view('header_message'); ?>
  </div>
 

  <div class="">
  <div class="row">
    <div class="col-md-3 col-sm-3 col-lg-3">
    <?php $this->load->view('welcome_message'); ?>
    </div>
    <div class="col-md-8 col-sm-8 col-lg-8">
    <div class='row'>
  
    <div class="alert alert-success">helloo</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Add Course</h5>
    
    <form class="custom-form">
    <div class="form-group">
    

  <div class="form-group">
    <label for="courseName">Name</label>
    <input type="text" class="form-control" id="courseName" placeholder="Enter Course Name">
  </div>

  <div class="form-group">
    <label for="courseDescription">Description</label>
    <textarea class="form-control" id="courseDescription" placeholder="Enter Course Description"></textarea>
  </div>

  <div class="form-group">
    <label for="courseDuration">Duration</label>
    <input type="text" class="form-control" id="courseDuration" placeholder="Enter Course Duration">
  </div>

  <div class="form-group">
    <label for="courseImg">Image URL</label>
    <input type="text" class="form-control" id="courseImg" placeholder="Enter Course Image URL">
  </div>

  <div class="form-group">
    <label for="courseStatus">Status</label>
    <select class="form-control" id="courseStatus">
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select>
  </div>

  <!-- <div class="form-group">
    <label for="courseDate">Date</label>
    <input type="date" class="form-control" id="courseDate">
</div> -->
<br>

<button type="button"  id="add" class="btn btn-primary" >Add</button>
    </form>

  </div>
</div>





    </div>
  </div>
</div>


<?php $this->load->view('footer_message'); ?>














