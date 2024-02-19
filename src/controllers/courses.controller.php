<?php
include_once __DIR__ . "/../models/Course.php";

function addCourse()
{

    try {



        // @desc Get form data
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
        $result = $course->createCourse();
        if ($result) {
            header("Location: ../views/services.php");
            die();
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


function uploadImage()
{

    $HOST = "http://localhost/e-learning_php/";

    if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != '' && $_FILES["image"]["name"] != 'undefined' && $_FILES["image"]["name"] != null) {

        // ========================// upload image //==================================
        // get image file
        $target_directory = "../../assets/images/courses/";
        $file_name = basename($_FILES["image"]["name"]);
        $current_date_time = date("YmdHis");
        $target_file = $target_directory . $current_date_time . '_' . $file_name;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image_url = $HOST . "assets/images/courses/" . basename($target_file);
        return $image_url;
    } else {
        return '';
    }

    // ========================// End upload image //==================================
}


// @desc func call
addCourse();
