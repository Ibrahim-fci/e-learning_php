<?php

include_once '../models/Courses.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course List</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for additional styling */
    .course-card {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <!-- Search Bar -->
    <div class="row mb-3">
      <div class="col">
        <input type="text" class="form-control" id="searchInput" placeholder="Search courses...">
      </div>
    </div>
    <!-- Course List -->
    <div class="row" id="courseList">
    <?php 
    $courses = new Course;
    $data = $courses->getAllCourses();
    foreach($data as $course) {
    ?>
    <div class="col-md-4">
    <div class="card course-card">
        <div class="card-body">
          <img src="<?php echo $course['imageurl']?>">
            <h5 class="card-title"><?php echo $course['title']; ?></h5>
            
            <!-- <p class="card-text">Instructor: <?php echo $course['']; ?></p> -->
            <!-- <p class="card-text">Category: <?php echo $course['category']; ?></p> -->
            <p class="card-text"><?php echo $course['description']; ?></p>
            <p class="card-text">Price: <?php echo $course['price']; ?></p>
            <a href="course-details.php?id=<?php echo $course['id']?>">more details</a>
        </div>
    </div>
    </div>
    <?php
    }
?>      
  </div>

  <!-- Bootstrap JS (Optional for certain functionalities like dropdowns) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
</body>
</html>
