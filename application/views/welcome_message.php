<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Responsive Sidebar Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        #container {
            display: flex;
			flex-direction:row;
			float:left;
        }

        #sidebar {
            width: 250px;
            height: 100vh;
            background-color: #115e91;
            color: #fff;
            padding: 20px;
            z-index: 1;
            top: 0;
            left: 0;
            
            overflow-x: hidden;
           padding-top: 20px;
           
        }

        #content {
            flex: 1;
            padding: 20px;
        }

        #sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            /* transition: background-color 0.3s; */
        }

        #sidebar a:hover,
        #sidebar a.active {
            background-color: #555;
        }

        #toggle-btn {
            font-size: 20px;
            cursor: pointer;
            background: none;
            border: none;
            color: #fff;
            padding: 10px;
        }
    </style>
</head>
<body>

<div id="container" >
    <div id="sidebar">
        <button id="toggle-btn" onclick="toggleSidebar()">☰Home</button>
        <a href="http://localhost/CodeigniterDemo/index.php/Welcome/"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
        <a href="http://localhost/CodeigniterDemo/index.php/Welcome/indexdemo"><i class="fa fa-list-ul"></i> List Courses</a>
        <a href="http://localhost/CodeigniterDemo/index.php/Welcome/add"><i class="fa fa-plus"></i> Create new Course</a>
        <a href="http://localhost/ojt_admin/includes/courseupdate.php?id=33"><i class="fa fa-pencil"></i> Update Course</a>
        <a href="http://localhost/ojt_admin/includes/assigncourse.php"><i class="fa fa-info-circle" aria-hidden="true"></i> Assign the chapters</a>
    
        <a href="http://localhost/ojt_admin/includes/leads.php"><i class="fa-sharp fa-solid fa-user-tie"></i> Leads</a>

        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                Chapters
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:grey;">
                <li><a class="dropdown-item" href="http://localhost/CodeigniterDemo/index.php/ChapterList/chapterdetails">List of chapters</a></li>
                <li><a class="dropdown-item" href="http://localhost/CodeigniterDemo/index.php/ChapterList/chapteradd">Create new chapter</a></li>
            </ul>
        </div>
    </div>

    <div id="content">
      
    </div>
</div>
