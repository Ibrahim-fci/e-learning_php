<?php
include_once __DIR__ . "/../models/Student.php";
include_once __DIR__ . "/../models/Teacher.php";



function update()
{
    try {

        session_start();
        // @desc get the form data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $country = $_POST['country'];
        $phone = $_POST['phone'];
        $profileImage = uploadImage();

        if ($_SESSION['role'] == "student") {
            $student = new Student($first_name, $last_name, $gender, $address, $email, $password);
            $student->setImage($profileImage);
            $result = $student->updateStudent($_SESSION['user_id']);

            if ($result) {
                header("Location: ../views/profile.php");
                exit();
            } else {
                session_start();
                $_SESSION['update_errors'] = ["Something went wrong. Please try again."];
                header("Location: ../views/profile.php");
                exit();
            }
        } else {


            $teacher = new Teacher($first_name, $last_name, $gender, $address, $email, $password);
            $teacher->setImage($profileImage);
            $result = $teacher->updateTeacher($_SESSION['user_id']);
            echo $result;

            if ($result) {
                header("Location: ../views/profile.php");
                exit();
            } else {
                session_start();
                $_SESSION['update_errors'] = ["Something went wrong. Please try again."];
                header("Location: ../views/profile.php");
                exit();
            }
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
        $target_directory = "../../assets/images/";
        $file_name = basename($_FILES["image"]["name"]);
        $current_date_time = date("YmdHis");
        $target_file = $target_directory . $current_date_time . '_' . $file_name;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image_url = $HOST . "assets/images/" . basename($target_file);
        return $image_url;
    } else {
        return '';
    }

    // ========================// End upload image //==================================
}




// @desc fun call
update();
