<?php

include_once __DIR__ . "/../models/Student.php";
include_once __DIR__ . "/../models/Teacher.php";

function signup()
{
    // @desc Get FormData
    try {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];


        if ($role == "teacher") {
            $teacher = new Teacher($first_name, $last_name, '', '', $email, $password);
            $teacher->create();
            header("Location: ../views/login.php");
        } else {
            $student = new Student($first_name, $last_name, '', '', $email, $password);
            $student->create();
            header("Location: ../views/login.php");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


// func call
signup();
