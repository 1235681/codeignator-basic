
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!--    -->
<link rel="stylesheet" href="././css/sidebar.css">  
<link rel="stylesheet" href="../css/test.css"> 
<link rel="stylesheet" href="../css/update.css"> 
<link rel="stylesheet" href="./css/assests/coursedetails.css"> 
<link rel="stylesheet" href="./css/courselist.css"> 
<link rel="stylesheet" href="css/assigncourse.css">
<link rel="stylesheet" href="css/updatechapter.css"> 
<link rel="stylesheet" href="css/form.css">  
<link rel="stylesheet" href="../css/assests/enroll.css">  





    
</head>
<body>
<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid" style="background-color:white;">
  <img src="img\itt-logo.svg" alt="Your Logo" />
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item flexs" >
          <a class="nav-link active" aria-current="page" href="#">IttStar</a>
        </li>
       
      <div class="navdropdown">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           HELLO,
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </div>

      <div class="font-icon" style="padding-left:550px;">
      <i class="fa fa-commenting" aria-hidden="true"></i>
      </div>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>


        

    </div>
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img src="<?php echo base_url() ?>/assests/itt-logo.svg" alt="Your Logo" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#" style="font-size: 40px; color: black;">ITT_OJT</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <li><a class="dropdown-item" id="logoutButton" href="#"><i class="fa fa-sign-out" aria-hidden="true" style="color:blue;"></i>Logout</a></li>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="logoutButton" href="#"><i class="fa fa-sign-out" aria-hidden="true" style="color:blue;"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

    </div>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



<script>

    $(document).ready(function() {
      $('#logoutButton').on('click', function(e) {
        e.preventDefault();

        $.ajax({
          url: 'header.php',
          type: 'POST',
          data: {
            logout: true
          },
          success: function(response) {
            window.location.href = 'http://localhost/admin_panel/signup.php';
          },
          error: function(error) {
            console.error('Error:', error);
          }
        });
      });
    });
  </script>


</body>
</html>