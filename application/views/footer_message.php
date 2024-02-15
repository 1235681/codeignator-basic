<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Your Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.social-icons {
    display: flex;
}

.icon-link {
    margin: 0 10px;
}

.icon-link img {
    width: 30px; 
    height: 30px; 
}

.company-info {
    text-align: left;
}

.logo {
    width: 100px; 
    height: auto;
}
</style>

    
</head>
<body>


  <footer>
    <div class="footer-content">
      <div class="social-icons">
        <!-- <a href="#" target="_blank" class="icon-link"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#" target="_blank" class="icon-link"><img src="twitter-icon.png" alt="Twitter"></a>
        <a href="#" target="_blank" class="icon-link"><img src="instagram-icon.png" alt="Instagram"></a> -->
      
        <a href="#" target="_blank" class="icon-link"> <i class="fab fa-instagram" aria-hidden="true" style="font-size:2em";></i></a>
        <a href="#" target="_blank" class="icon-link"><i class="fab fa-facebook" aria-hidden="true"style="font-size:2em"></i></a>
    <a href="#" target="_blank" class="icon-link"><i class="fab fa-twitter" aria-hidden="true"style="font-size:2em"></i></a>



</a>
      </div>
      <div class="company-info">
      <img src="../img/itt-logo.svg" alt="Your Logo" /> 
        <p>&copy; 2024 Your Company Name. All rights reserved.</p>
        <p>123 Main Street, Cityville, Country</p>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script>
    //  function editCourse(courseId) {
    //     var url = 'courseupdate/' + courseId;
    //     window.location.href = url;
    // }

    function deletecourse(courseId) {
    console.log(courseId);
    if (confirm("Are you sure you want to delete this course?")) {
        $.ajax({
            url: 'http://localhost/CodeigniterDemo/index.php/Welcome/delete_course',
            type: 'DELETE',
            data: JSON.stringify({
        courseId: courseId
    }),
            contentType: 'application/json',
            success: function (response) {
                alert("data inserted");
            }
        });
    }
}
    function redirectToDetailsPage(button) {
        var courseId = button.getAttribute('data-course-id');
        $.ajax({
                url: '../sessionstorage/sessionstore.php',
                type: 'POST',
                data: { id: courseId },
                success: function (response) {
                    console.log(response);
                   
                }
            });
        window.location.href = 'http://localhost/ojt_admin/includes/coursedetails.php';
    }
    function redirectToPageOne(){
    window.location.href = 'http://localhost/CodeigniterDemo/index.php/Welcome/add';
  }
// coursedetails

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

    function addchapterdetails(){
        window.location.href = 'http://localhost/ojt_admin/includes/test.php';
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

    $('#deleteid').on('click',function(){
        let deleteid=$(this).data('deleteid');
        console.log("dydtfyjfujgjgj",deleteid);
    })
// courseassign

$(document).ready(function() {

$("#chapterForm").submit(function(event) {

    event.preventDefault();


    var formData = $(this).serialize();

 
    $.ajax({
        type: "POST",
        url: "../ajax/assignchapterdb.php",
        data: formData,
        success: function(response) {
          
            alert(response);
        },
        error: function(error) {
            console.error("AJAX request failed: ", error);
        }
    });
});
});

// chapterupdate
$(document).ready(function () {
                  $("#editForm").submit(function () {
                    // e.preventDefault();

                    let chapterName = $("#chapterName").val();
                    let chapterDetails = $("#chapterdetails").val();
                    let chapterStatus = $("#chapterStatus").val();
                    let chapterId= $("#chapterId").val();

                    $.ajax({
                      type: "POST",
                      url: "updatechapter",
                      data: {
                        chapterId:chapterId,
                        chapterName: chapterName,
                        chapterDetails: chapterDetails,
                        chapterStatus: chapterStatus,
                      },
                      success: function (response) {
               
                        // $("#response").html(response);
                        window.location.href = "http://localhost/CodeigniterDemo/index.php/ChapterList/chapterdetails";
                        

                      },
                      error: function (error) {
                        console.log(error);
                      }
                    });
                  });
                });
          // assigncourse
          $(document).ready(function() {

$("#chapterForm").submit(function(event) {

    event.preventDefault();


    var formData = $(this).serialize();

 
    $.ajax({
        type: "POST",
        url: "../ajax/assignchapterdb.php",
        data: formData,
        success: function(response) {
          
            alert(response);
        },
        error: function(error) {
            console.error("AJAX request failed: ", error);
        }
    });
});
});
// courseupdate
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
                            window.location.href = "http://localhost/ojt_admin/includes/courselist.php";
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
                });
            });
            // formcourse
            $(document).ready(function() {
    $('#add').on('click', function(e) {
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

// listofcourse
// function editChapter(chapterId) {
//   window.location.href = 'chapterupdate.php?id=' + chapterId;
//     alert("Edit chapter with ID " + chapterId);
//   }

  function deleteChapter(chapterId) {
    console.log(chapterId);
    if (confirm("Are you sure you want to delete this course?")) {
        $.ajax({
            url:'http://localhost/CodeigniterDemo/index.php/ChapterList/delete_chapter',
            type: 'DELETE',
            data: JSON.stringify({
              chapterId: chapterId
    }),
            contentType: 'application/json',
            success: function (response) {
      
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


  // test.php
  $(function () {
            $("#allFacets, #userFacets").sortable({
                    connectWith: "ul",
                    placeholder: "placeholder",
                    delay: 150
                })
                .disableSelection()
                .dblclick(function (e) {
                    var item = e.target;
                    if (e.currentTarget.id === 'allFacets') {
                        $(item).fadeOut('fast', function () {
                            $(item).appendTo($('#userFacets')).fadeIn('slow');
                        });
                    } else {
                        $(item).fadeOut('fast', function () {
                            $(item).appendTo($('#allFacets')).fadeIn('slow');
                        });
                    }
                });

            $("#assignButton").on("click", function () {

                var checkElement = document.getElementById('check');
            
                var dataInfoValue = checkElement.getAttribute('data-info');
                    

                var ulList = document.getElementById('userFacets');
                var listItems = ulList.getElementsByTagName('li');
                var arr = []

                for (var i = 0; i < listItems.length; i++) {
                    var listItemValue = listItems[i].getAttribute('value');
                    arr.push(listItemValue)
                }
                var res = arr.join(',');
                $.ajax({
                    type: "POST",
                    url: "assignchaptersone",
                    data: {
                        course_id:dataInfoValue,
                        chapaterId:res,
                    },
                    success: function (response) {
                        console.log(response);
                    },
                    error: function (error) {
                        console.error("Ajax request failed: ", error);
                    }
                });
            });
        });

        // coursedetails
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

    function addchapterdetails(){
        window.location.href = 'http://localhost/ojt_admin/includes/test.php';
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
            url: "assignchaptersone",
            data: {
                courseId: courseId,
                chapaterId:res,
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

    $('#deleteid').on('click',function(){
        let deleteid=$(this).data('deleteid');
        console.log("dydtfyjfujgjgj",deleteid);
    })


    // enroll .php

    $(document).ready(function () {
    $(".enquire-btn").click(function () {
        var courseId = $(this).data('course-id');
        var courseName = $(this).data('course-name');

        $("#courseIdInput").val(courseId);
        $("#courseNameInput").val(courseName);
        $("#selectedCourseName").text(courseName);

        $("#enquireModal").modal("show");
    });

    $("#enquireForm").submit(function (e) {
        e.preventDefault();

        if (validateForm()) {
            var name = $("#name").val();
            var email = $("#email").val();
            var number = $("#number").val();
            var comment = $("#comment").val();
            var course = $("#courseNameInput").val(); // Include course name

            $.ajax({
                type: 'POST',
                url: 'EnrollController/enroll',
                data: {
                    name: name,
                    email: email,
                    number: number,
                    comment: comment,
                    course: course, // Include course name in the data
                },
                success: function (response) {
                    console.log(response);
                    if (response.includes("Email already registered")) {
                        alert(response);
                    } else {
                        window.location.href = 'http://localhost/ojt_admin/signin.php';
                    }
                },
                error: function (error) {
                    console.error(error);
                }
            });
        }
    });

    function validateForm() {
        var name = $("#name").val();
        var email = $("#email").val();
        var number = $("#number").val();
        var comment = $("#comment").val();

        if (name === '' || email === '' || number === '' || comment === '') {
            alert('All fields are required.');
            return false;
        }

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Invalid email address.');
            return false;
        }

        return true;
    }

});

function redirectToDetailsPagechapetr() {
    window.location.href = 'http://localhost/CodeigniterDemo/index.php/ChapterList/getenrolldata';
}






    // enroll

    // $(document).ready(function () {
    //     $(".enquire-btn").click(function () {
    //         var courseId = $(this).data('course-id');
    //         var courseName = $(this).data('course-name');

    //         $("#courseIdInput").val(courseId);
    //         $("#courseNameInput").val(courseName);
    //         $("#selectedCourseName").text(courseName);

    //         $("#enquireModal").modal("show");
    //     });

    //     $("#enquireForm").submit(function (e) {
    //         e.preventDefault();

     
    //         var name = $("#name").val();
    //         var email = $("#email").val();
    //         var number = $("#number").val();
    //         var comment = $("#comment").val();
    //         var coursename =$("#selectedCourseName").val();
    //         // var rememberMe = $("#rememberMe").is(":checked") ? 1 : 0;
     
            
                
    //         $.ajax({
    //             type: 'POST',
    //             url: '../ajax/enrolldb.php', 
    //             data: {
    //             name: name,
    //             email: email,
    //             number: number,
    //             comment: comment,
    //             coursename:coursename,
    //             // rememberMe: rememberMe,
            

    //             },
    //             success: function (response) {
    //                 console.log(response);
                  
       
    //             window.location.href = 'http://localhost/ojt_admin/signin.php';
    //                 // $("#enquireModal").modal("hide");
    //             },
    //             error: function (error) {
    //                 console.error(error);
 
                  
             
    //             }
    //         });
    //     });
    // });
    // function redirectToDetailsPagechapetr(){
    //     window.location.href = 'http://localhost/ojt_admin/includes/demo.php';
        
    // }

</script>

</body>
</html>

