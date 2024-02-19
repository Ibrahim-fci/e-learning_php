<?php

include_once __DIR__ . "/../models/Student.php";
include_once __DIR__ . "/../models/Teacher.php";

function login()
{

    // @desc Get FormData
    try {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        if ($role == "teacher") {

            $teacher = new Teacher("", "", "", "", $email, $password);
            $result = $teacher->login($email, $password);
            $data = json_decode(json_encode($result), true);


            if ($data) {
                // @desc create session
                session_start();
                $_SESSION['user'] = $data['email'];
                $_SESSION['role'] = "teacher";
                $_SESSION['user_id'] = $data['teacher_id'];


                // @desc free login_errors array
                $_SESSION['login_errors'] = [];
                header("Location: ../views/index.php");
                exit();
            } else {
                session_start();

                $_SESSION['login_errors'] = ['wrong email or password'];
                header("Location: ../views/login.php");
                exit();
            }
        } else {


            $student = new Student("", "", "", "", $email, $password);
            $result = $student->login($email, $password);
            $data = json_decode(json_encode($result), true);


            if ($data) {
                // @desc create session
                session_start();
                $_SESSION['user'] = $data['email'];
                $_SESSION['role'] = "student";
                $_SESSION['user_id'] = $data['student_id'];


                // @desc free login_errors array
                $_SESSION['login_errors'] = [];
                header("Location: ../views/index.php");
                exit();
            } else {
                session_start();

                $_SESSION['login_errors'] = ['wrong email or password'];
                header("Location: ../views/login.php");
                exit();
            }
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


// @desc func call
login();
