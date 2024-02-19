<?php 
include_once __DIR__ . "/../models/Course.php";


function updateCourse(){

    try {
        // @desc Get form data
        $id = $_POST['id'] ?? '';
        $title = $_POST['title'] ?? '';
        $price = $_POST['price'] ?? '';
        $duration = $_POST['duration'] ?? '';
        $category = $_POST['category'] ?? '';
        $description = $_POST['description'] ?? '';
        $imageUrl = uploadImage();


        session_start();
        $techer_id = $_SESSION['user_id'];
        if ($_SESSION['role'] != "teacher") {
            header("Location: services.php");
            die();
        }

        // create course obj

        $course = new Course($title, $imageUrl, $description, $price, $duration, $techer_id, $category);
        $result = $course->updateCourse($id, $title, $description, $imageUrl, $price, $duration, $category);
        if ($result) {
            header("Location: ../views/services.php");
        }

    } catch (Exception $e) {
        echo $e->getMessage();
    }

}