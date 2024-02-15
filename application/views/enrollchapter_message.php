


<div>
<?php $this->load->view('header_message'); ?>
</div>
<div class=''>
    <div class="row">
       <div class='col-md-3 col-lg-3'>
       <?php $this->load->view('welcome_message'); ?>
       </div>
       <div class='col-md-8 col-lg-8'>
          <div class="row">
            <h2> Details  of Chapter</h2>
            <div class="container mt-5">
              <div id="accordion" class="sortable">
                <?php foreach ($chapters as $chapter): ?>
                  <div class="card sortable-item">
                    <div class="card-header" id="heading<?= $chapter['id'] ?>">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?= $chapter['id'] ?>" aria-expanded="true" aria-controls="collapse<?= $chapter['id'] ?>">
                          Chapter <?= $chapter['id'] ?>: <?= $chapter['chapters'] ?>
                        </button>
                    
                        <span class="float-right">
                        <!--  -->
                        </span>
                      </h5>
                    </div>

                    <div id="collapse<?= $chapter['id'] ?>" class="collapse" aria-labelledby="heading<?= $chapter['id'] ?>" data-parent="#accordion">
                      <div class="card-body">
                        <p>Date: <?= $chapter['date'] ?></p>
                        <p>Status: <?= $chapter['status'] ?></p>
                        <p>Details: <?= $chapter['details'] ?></p>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
       </div>
    </div>
  </div>

<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>

function editChapter(chapterId) {
  window.location.href = 'chapterupdate.php?id=' + chapterId;
    alert("Edit chapter with ID " + chapterId);
  }

  function deleteChapter(chapterId) {
    console.log(chapterId);
    if (confirm("Are you sure you want to delete this course?")) {
        $.ajax({
            url: '../ajax/deletechapter.php',
            type: 'DELETE',
            data: JSON.stringify({
              chapterId: chapterId
    }),
            contentType: 'application/json',
            success: function (response) {
                // alert(response);
                alert("data inserted");
            }
        });
    }
}

  $(document).ready(function() {
    $(".sortable").sortable({
      handle: ".card-header",
      axis: "y",
    });
    $(".sortable").disableSelection();
  });
</script> -->

<?php $this->load->view('footer_message'); ?>