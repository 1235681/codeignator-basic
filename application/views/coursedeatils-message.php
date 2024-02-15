

<div>
<?php $this->load->view('header_message'); ?>
</div>

<div class="butn">

<button type="button" class="btn btn-primary" style="margin-left: 1250px;" onclick="addchapterdetails(<?php echo $result1[0]['course_id'] ?>)">
        <i class="fa fa-plus" aria-hidden="true"></i>Assign chapters
    </button>
</div>

<div class=''>
    <div class="row">
        <div class='col-md-3 col-lg-3'>
            <?php $this->load->view('welcome_message'); ?>
        </div>

        <div class='col-md-8 col-lg-8'>
            <div class="row">
                <h3>COURSE DETAILS:</h3><br>

                <?php if (!empty($result1) && isset($result1[0])): ?>
                    <div>
                        <b><?php echo $result1[0]['name'] ?></b>
                        <div class='card-content'>
                            <p><strong>Description:</strong><?php echo $result1[0]['description'] ?></p>
                            <p><strong>Duration:</strong> <?php echo $result1[0]['duration'] ?> Hours</p>
                            <p><strong>Status:</strong> <?php echo $result1[0]['status'] ?></p>
                            <p><strong>Image:</strong></p>
                            <img src=<?php echo $result1[0]['img'] ?> alt='Course Image' style='height:30vh;'>
                        </div>
                    </div><br>

                    <ul id="userFacets" class="facet-list">
                        <h5>Chapter Details:</h5>
                        <div class='sortable accordion'>
                            <?php foreach ($result1 as $row): ?>
                                <li class="facet" value='<?php echo $row['chapter_id'] ?>' style="list-style-type: none;">
                                    <div class='col-1' style="padding-left:1000px;">
                                        <a href='#' onclick="chapterDelete(<?php echo $row['course_id'] ?>, <?php echo $row['chapter_id'] ?>)">
                                            <i class='fa-solid fa-trash text-danger'></i>
                                        </a>
                                    </div>
                                    <div class='accordion-item' data-chapter-id='<?php echo $row["chapter_id"]; ?>'>
                                        <p>
                                            <strong>Chapters:</strong><?php echo $row["chapters"] ?><br>
                                        </p>
                                        <div class='accordion-content'>
                                            <p><strong>Details:</strong><?php echo $row['details'] ?></p>
                                            <p><strong>Date:</strong><?php echo $row['date'] ?></p>
                                            <p><strong>Status:</strong><?php echo $row['status'] ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </div>
                    </ul>

                    <button type="button" class="btn btn-success" onclick="shuffleAndSave(<?php echo $result1[0]['course_id'] ?>)" style="width:40%; margin-left:340px">
                        Shuffle Chapters and Save
                    </button>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
    $(document).ready(function () {
        $(".sortable").sortable({
            update: function (event, ui) {
                saveChapterOrder();
            }
        });
        $(".sortable").disableSelection();

      
        $(document).on('click', '.accordion-item', function () {
            toggleAccordion(this);
        });
    });

    function toggleAccordion(item) {
        var content = $(item).find('.accordion-content');
        content.slideToggle();
    }

    function addchapterdetails(id){
        window.location.href =`http://localhost/CodeigniterDemo/index.php/ChapterList/assigncourse?id=${id}`;
        
    }

    function shuffleAndSave(courseId) {
        console.log("Selected Course ID:", courseId);

        var ulList = document.getElementById('userFacets');
        var listItems = ulList.getElementsByTagName('li');
        var arr = [];

        for (var i = 0; i < listItems.length; i++) {
            var listItemValue = listItems[i].getAttribute('value');
            if (listItemValue) {
                arr.push(listItemValue);
            }
        }

        console.log(arr);
        var res = arr.join(',');
        console.log(res, courseId);

        $.ajax({
            type: "POST",
            url: "../ajax/mapping.php",
            data: {
                courseId: courseId,
                chapaterId: res,
            },
            success: function (response) {
                console.log(response);
                alert("updated");
            },
            error: function (error) {
                console.error("Ajax request failed: ", error);
            }
        });
    }

    function chapterDelete(cid, id) {
    $.ajax({
        url: 'http://localhost/CodeigniterDemo/index.php/Welcome/deleteChapterDetails',
        type: 'POST',
        data: {
            cid: cid,
            id: id
        },
        success: function (response) {
            alert("Data Deleted");
            // You can perform additional actions here if needed
        }
    });
}



</script>

</body>

</html>



