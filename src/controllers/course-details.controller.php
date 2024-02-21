<?php

include_once __DIR__ . "/../models/Course.php";


function courseDetails()
{

    // Get query parameters
    $queryParams = $_GET;
    $id = $queryParams['course_id'];

    $course = new Course('', '', '', '', '', '', '');
    $result = $course->getCourseById($id);
    echo $result['title'];
}


courseDetails();
