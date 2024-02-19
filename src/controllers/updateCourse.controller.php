<?php
include_once __DIR__ . "/../models/Course.php";


function updateCourse()
{

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
        if ($_SESSION['role'] == "student") {
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




function uploadImage()
{

    $HOST = "http://localhost/e-learning_php/";

    if (isset($_FILES["update_image"]["name"]) && $_FILES["update_image"]["name"] != '' && $_FILES["update_image"]["name"] != 'undefined' && $_FILES["update_image"]["name"] != null) {

        // ========================// upload image //==================================
        // get image file
        $target_directory = "../../assets/images/courses/";
        $file_name = basename($_FILES["update_image"]["name"]);
        $current_date_time = date("YmdHis");
        $target_file = $target_directory . $current_date_time . '_' . $file_name;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        move_uploaded_file($_FILES["update_image"]["tmp_name"], $target_file);
        $image_url = $HOST . "assets/images/courses/" . basename($target_file);
        return $image_url;
    } else {
        return '';
    }

    // ========================// End upload image //==================================
}


// @desc  func call
updateCourse();
