
<div>
 
<?php $this->load->view('header_message');  ?>;
  
</div>
<div class="butn">
  <button type="button" class="btn btn-danger" style="margin-left:1350px;margin-bottom:10px;" onclick="redirectToPageOne()"> <i class="fa fa-plus" aria-hidden="true"></i>Add New Course</button>
</div>
<style>
    body {
    font-family: 'Poppins', sans-serif !important;
}

.card {
    box-shadow: 1px 1px 4px grey;
    border-radius: 8px;
    padding: 20px;

}

.card img {
    width: 100%;
    border-radius: 4px;
    margin-bottom: 10px; 
}

.stat {
    border: 1px solid grey;
    border-radius: 5px;
    background-color: green;
    color: white;
    display: inline;
    padding: 3px;
}

.btx {
    border: none;
    background: white;
}
</style>
<div class=''>
    <div class="row">
       <div class='col-md-3 col-lg-3'>
       <?php 
      	$this->load->view('welcome_message'); 
        ?>
       </div>
       
       <div class='col-md-8 col-lg-8'>
        <div class="row">
        <?php if(count($result) > 0): ?>
    <?php foreach($result as $row): ?>
        
        <div class='col-md-6'>
                <div class='card'>
                    <h5><?php echo $row["name"];?></h5>
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
                    <button class='edit-course btx'>
    <a href="http://localhost/CodeigniterDemo/index.php/Welcome/getcourseid?id=<?php echo $row["id"] ?>">edit</a>
    <i class='fa fa-pencil' aria-hidden='true'></i> 
</button>

                        <button class='delete-course btx' id='deletecourse' onclick='deletecourse(<?php echo $row["id"]; ?>)'>
                        delete
                            <i class='fa fa-trash' aria-hidden='true'></i>
                        </button>
                        <button>
                        <a href="http://localhost/CodeigniterDemo/index.php/Welcome/getcoursedetails?id=<?php echo $row["id"] ?>">view</a>
                        <i class="fas fa-eye"></i> 
                        </button>

                    </div>
    </div>
    </div>
    <?php endforeach; ?>
<?php endif; ?>
</div>
 </div>
     </div>

     <?php $this->load->view('footer_message'); ?>
    </div>