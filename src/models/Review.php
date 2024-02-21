<?php

include_once __DIR__ . "/../models/DbConnector.php";

class Review extends DbConnector
{
    public $Ratting, $review, $course_id, $student_id;
    public function __construct($Ratting, $review, $course_id, $student_id)
    {
        parent::__construct();

        $this->Ratting = $Ratting;
        $this->review = $review;
        $this->course_id = $course_id;
        $this->student_id = $student_id;
    }

    public function createReview()
    {
        $sql = "INSERT INTO Review (Rating , Comment , CourseID , student_id) VALUES ('" . $this->Ratting . "' , '" . $this->review . "' , '" . $this->course_id . "' , '" . $this->student_id . "');";
        $result = $this->runDml($sql);
        return $result;
    }

    public function getAllReviews($course_id)
    {
        $sql = "SELECT * FROM Review WHERE CourseID = '" . $course_id . "';";
        $result = $this->runDml($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
