<?php

include_once __DIR__ . "/../models/Student.php";

function login()
{

    // @desc Get FormData
    try {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $student = new Student("", "", "", "", $email, $password);
        $result = $student->login($email, $password);
        $data = json_decode(json_encode($result), true);


        if ($data) {
            // @desc create session
            session_start();
            $_SESSION['user'] = $data['$email'];
            $_SESSION['user_id'] = 1;
            header("Location: ../views/index.php");
            exit();
        } else {
            echo "wrong email or password";
            // header("Location: ../views/login.php");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


// @desc func call
login();