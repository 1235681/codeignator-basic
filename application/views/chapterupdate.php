

  <div>
 
<div>
<?php $this->load->view('header_message'); ?>
</div>
  </div>

  <div class="">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-lg-3">
      <?php $this->load->view('welcome_message'); ?>
      </div>

      <div class="col-md-8 col-sm-8 col-lg-8">
        <div class='row'>
        <?php if(!empty($result)): ?>
            <?php foreach($result as $chapter): ?>
          
              <form id="editForm">
                <input type="hidden" id="chapterId" name="id" value="<?php echo $chapter['id']; ?>">

                <label for="name"> Chapter Name:</label>
                <input type="text" id="chapterName" name="name" value="<?php echo $chapter['chapters']; ?>"><br>

                <label for="details">Details:</label>
                <textarea id="chapterdetails" name="description"><?php echo $chapter['details']; ?></textarea><br>

                <label for="chapterStatus">Status:</label>
                <select id="chapterStatus" name="courseStatus">
                  <option value="Active">Active</option>
                  <option value="Inactive">Inactive</option>
                </select><br>

                <input type="submit" name="submit" value="Update"  >
              </form>

              <div id="response"></div>

              <?php endforeach; ?>
<?php endif; ?>

              <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
              <script>
                $(document).ready(function () {
                  $("#editForm").submit(function () {
                    // e.preventDefault();

                    let chapterName = $("#chapterName").val();
                    let chapterDetails = $("#chapterdetails").val();
                    let chapterStatus = $("#chapterStatus").val();
                    let chapterId= $("#chapterId").val();

                    $.ajax({
                      type: "POST",
                      url: "../ajax/updatechapter.php",
                      data: {
                        chapterId:chapterId,
                        chapterName: chapterName,
                        chapterDetails: chapterDetails,
                        chapterStatus: chapterStatus,
                      },
                      success: function (response) {
               
                        // $("#response").html(response);
                        window.location.href = "http://localhost/ojt_admin/includes/listofchapter.php";
                        

                      },
                      error: function (error) {
                        console.log(error);
                      }
                    });
                  });
                });
              </script> -->
           
        </div>
      </div>
    </div>
  </div>

  <div>

  </div>
  <?php $this->load->view('footer_message'); ?>

