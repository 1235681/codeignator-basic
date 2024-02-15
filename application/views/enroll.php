


<div>
<?php $this->load->view('header_message');  ?>;
</div>
<div>
    <button type='submit' onclick="redirectologin()"  style="margin-left:1500px">Login</button>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<style>
    
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.container-fluid {
    margin-top: 20px;
}

.card {
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width:100%;
}

.card img {
    width: 100%;
    height: auto;
    border-radius: 4px;
    margin-bottom: 10px;
}

.enquire-btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 8px 12px;
    cursor: pointer;
}

/* Add additional styles for your modal if needed */

/* Optional: Add styling for form elements */
form {
    background-color: #fff;
    padding: 20px;
    border-radius: 4px;
}

input,
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ced4da;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
}
.row{
    padding-left:180px;
}

</style>
        <div class='col-md-8 col-lg-8'>
            <div class="row">
                <?php if (count($result1) > 0): ?>
                    <?php foreach ($result1 as $row): ?>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                                    <img src="<?php echo $row['img']; ?>" alt='Course Image'>
                                    <p><?php echo $row['description']; ?></p>
                    <p><strong>Duration :</strong> <?php echo $row['duration']; ?> Hours</p>
                    <p style='display:flex; gap:10px'>
                        <strong>Status:</strong> 
                        <span class='stat' style="border: 1px solid grey;  border-radius: 5px;  background-color:green;  color:white;  display:inline;    padding:3px">
                            <?php echo $row['status']; ?>
                        </span>

                      
 

                    </p>
                    
                    <div style='display:flex; gap:10px; justify-content:end; '>
                        <button class='view-course btx' data-course-id='<?php echo $row["id"]; ?>' onclick='redirectToDetailsPagechapetr(this)'> Read more
                        <i class="fas fa-eye"></i> 
                        </button>
                    </div>
                                    <button class="enquire-btn" style="width: 20%;" data-toggle="modal" data-target="#enquireModal" data-course-id="<?php echo $row['id']; ?>" data-course-name="<?php echo $row['name']; ?>">Enroll here</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>


        <div class="modal" id="enquireModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Enquire Form</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
    <p>Selected Course: <span id="selectedCourseName"></span></p>
    <form method="post" action="send.php" id="enquireForm">
        <input type="hidden" name="course_id" id="courseIdInput" value="">
        <input type="hidden" name="course_name" id="courseNameInput" value="Course Name Here" required>

        <fieldset>
            <input placeholder="Enter your name" name="name" id="name" type="text" tabindex="2" required>
        </fieldset>

        <fieldset>
            <input placeholder="Your Email Address" name="email" id="email" type="email" tabindex="2" required>
        </fieldset>
         <br> 
        <fieldset>
            <input placeholder="Enter your phone number" name="number" id="number" type="tel" tabindex="10">
        </fieldset>
        <br> 
        <fieldset>
            <textarea placeholder="comment your words" name="comment" tabindex="10" id="comment"></textarea>
        </fieldset>
        <br> 
        <!-- <fieldset>
            <label for="date">Select a date:</label>
            <input type="date" id="date" name="date" tabindex="10" required>
        </fieldset> -->

        <!-- <div style="display:flex;">
            <div>
                <input type="checkbox" id="rememberMe" name="rememberMe" id="rememberMe" checked />
            </div>
            <div style="margin-left:5px; font-size:15px;">
                <label for="rememberMe">Remember me</label>
            </div>
        </div> -->
         <br>
        <fieldset>
            <button type="submit" name="send" id="contact-submit">Enquire</button>
        </fieldset>
    </form>
</div>

                </div>
            </div>
        </div>

        <?php $this->load->view('footer_message'); ?>


    </div>
</div>
