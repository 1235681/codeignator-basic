

<div>
<?php $this->load->view('header_message'); ?>
</div>
<div class=''>
    <div class="row">
       <div class='col-md-3 col-lg-3'>
       <?php $this->load->view('welcome_message'); ?>
       </div>
       <style>
        
#editForm {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f8f9fa;
}

/* Style form labels */
label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

/* Style form inputs */
input[type="text"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
    box-sizing: border-box;
}

/* Style submit button */
input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    border-radius: 3px;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}


#response {
    margin-top: 10px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #ffffff;
}

       </style>
       <div class='col-md-8 col-lg-8'>
        <div class="row">
<?php if(!empty($result11)): ?>
    <?php foreach($result11 as $course): ?>
       
        <form id="editForm">
            <input type="hidden" id="courseId" name="id" value="<?php echo $course['id']; ?>">
            
            <label for="name">Name:</label>
            <input type="text" id="courseName" name="name" value="<?php echo $course['name']; ?>"><br>

            <label for="description">Description:</label>
            <textarea id="courseDescription" name="description"><?php echo $course['description']; ?></textarea><br>

            <label for="duration">Duration:</label>
            <input type="text" id="courseDuration" name="duration" value="<?php echo $course['duration']; ?>"><br>

            <label for="courseImage">Image:</label>
           <input type="text" id="courseImage" name="courseImage" value="<?php echo $course['img']; ?>"><br>

           <label for="courseStatus">Status:</label>
        <select id="courseStatus" name="courseStatus">
    <option value="Active">Active</option>
    <option value="Inactive">Inactive</option>
</select>
<br>


            <input type="submit" name="submit" value="Update">
        </form>

        <div id="response"></div>
    <?php endforeach; ?>
<?php endif; ?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#editForm").submit(function (e) {
                    e.preventDefault(); 
           
                    let courseId = $("#courseId").val();
                    let courseName = $("#courseName").val();
                    let courseDescription = $("#courseDescription").val();
                    let courseDuration = $("#courseDuration").val();
                    let courseImage = $("#courseImage").val();
                    let courseStatus =   $("#courseStatus").val();

                    $.ajax({
                        type: "POST",
                        url: "courseupdatedata",
                        data: {
                            courseId: courseId,
                            courseName: courseName,
                            courseDescription: courseDescription,
                            courseDuration: courseDuration,
                            courseImage:courseImage,
                            courseStatus:courseStatus
                            
                        },
                        success: function (response) {
                            $("#response").html(response); 
                            window.location.href = "http://localhost/CodeigniterDemo/index.php/Welcome/indexdemo";
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
                });
            });
        </script>
