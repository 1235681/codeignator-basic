
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
  

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Add Course</h5>
    
    <form class="custom-form">
    <div class="form-group">
    

  <div class="form-group">
    <label for="courseName">Name</label>
    <input type="text" class="form-control" id="chapterName" placeholder="Enter Course Name">
  </div>

  <div class="form-group">
    <label for="courseDescription">Description</label>
    <textarea class="form-control" id="chapterDescription" placeholder="Enter Course Description"></textarea>
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

<button type="button"  id="add1" class="btn btn-primary" >Add</button>
    </form>

  </div>
</div>





    </div>
  </div>
</div>
<script>
               $(document).ready(function() {
    $('#add1').on('click', function(e) {
        e.preventDefault();
        submitForm();
    });

    function submitForm() {
        let courseName = $("#courseName").val();
        let courseDescription = $("#courseDescription").val();
        let courseDuration = $("#courseDuration").val();
        let courseImg = $("#courseImg").val();
        let courseStatus = $("#courseStatus").val();

        $.ajax({
            type: "POST",
            url: "add",
            data: {
                courseName: courseName,
                courseDescription: courseDescription,
                courseDuration: courseDuration,
                courseImg: courseImg,
                courseStatus: courseStatus
            },
            success: function(response) {
                console.log("Success:", response);
                alert("Course added");
               // Update the URL
            },
            error: function(error) {
                console.log("Error:", error);
            }
        });
    }
});
</script>

<?php $this->load->view('footer_message'); ?>














