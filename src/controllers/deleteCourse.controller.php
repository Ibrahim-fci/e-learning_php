<?php
include_once __DIR__ . "/../models/Course.php";


function deleteCourse()
{

    // @desc get form data
    try {


        $id = $_POST['delete_id'];


        $course = new Course('', '', '', '', '', '', '');
        $result = $course->deleteCourse($id);

        if ($result) {
            header("Location: ../views/services.php");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


deleteCourse();
