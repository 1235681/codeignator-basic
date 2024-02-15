<!-- ... (your head section remains unchanged) ... -->

<body>
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
              <h5 class="card-title">Add Chapter</h5>
              
              <form class="custom-form">
                <div class="form-group">
                  <label for="chaptersName">Name</label>
                  <input type="text" class="form-control" id="chaptersName" placeholder="Enter Chapter Name">
                </div>

                <div class="form-group">
                  <label for="chapterDetails">Description</label>
                  <textarea class="form-control" id="chapterDetails" placeholder="Enter Chapter Description"></textarea>
                </div>

             

                <div class="form-group">
                  <label for="chaptersStatus">Status</label>
                  <select class="form-control" id="chaptersStatus">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                  </select>
                </div>
                <button type="button"  id="add1" class="btn btn-primary" >Add</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    $(document).ready(function()){
    $('#add1').on('click', function(e){
        e.preventDefault();
        submitFormChapter();
    });

    function submitFormChapter() {
        let chaptersName = $("#chaptersName").val();  
        let chapterDetails = $("#chapterDetails").val();
        let chapterStatus = $("#chaptersStatus").val();
      
       
        $.ajax({
    type: "POST",
    url: "ChapterList/chapteradd", 
    data: {
        chaptersName: chaptersName,
        chapterDetails: chapterDetails,
        chaptersStatus: chapterStatus, // Corrected key name
    },
    success: function(response) {
        console.log("Success:", response);
        alert("Chapter added");
    },
    error: function(error) {
        console.log("Error:", error);
    }
});

}
    }

  
  </script>
  
 
</body>
</html>
