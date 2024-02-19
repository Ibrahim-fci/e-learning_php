<?php
include_once __DIR__ . "/../models/Review.php";


function createReview()
{

    try {

        // get form date
        session_start();
        $Ratting = $_POST['rating'];
        $review = $_POST['comment'];
        $course_id = $_POST['course_id'];
        $student_id = $_SESSION['user_id'];




        // create new review
        $review = new Review($Ratting, $review, $course_id, $student_id);
        $review->createReview();
        header("Location: ../views/course-details.php?course_id=" . $course_id);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


createReview();
