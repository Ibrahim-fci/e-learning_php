<?php

include_once __DIR__ . "/../models/DbConnector.php";

class Course extends DbConnector
{
    public $title, $imageurl, $description, $price, $duration, $teacher_id, $category_id;
    public function __construct($title, $imageurl, $description, $price, $duration, $teacher_id, $category_id)
    {
        parent::__construct();

        $this->title = $title;
        $this->imageurl = $imageurl;
        $this->description = $description;
        $this->price = $price;
        $this->duration = $duration;
        $this->teacher_id = $teacher_id;
        $this->category_id = $category_id;
    }


    public function createCourse()
    {
        $sql = "INSERT INTO Course (title , description , price, duration , category_id ,teacher_id, imageurl) VALUES ('" . $this->title . "' , '" . $this->description . "' , '" . $this->price . "' , '" . $this->duration . "' , '" . $this->category_id . "' , '" . $this->teacher_id . "' , '" . $this->imageurl . "');";
        $result = $this->runDml($sql);
        return $result;
    }


    public function getAllCourses()
    {
        $sql = "SELECT * FROM Course";
        $result = $this->runDml($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateCourse($id, $title, $description, $imageurl, $price, $duration, $category_id)
    {
        if (isset($imageurl)) {
            $sql = "UPDATE Course SET title = '$title', description = '$description', price = '$price', duration = '$duration', category_id = '$category_id', imageurl = '$imageurl' WHERE id = '$id'";
            $this->runDml($sql);
        } else {
            $sql = "UPDATE Course SET title = '$title', description = '$description', price = '$price', duration = '$duration', category_id = '$category_id' WHERE id = '$id'";
            $this->runDml($sql);
        }
        return true;
    }
}
