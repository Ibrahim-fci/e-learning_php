<?php

include_once __DIR__ . "/../models/Person.php";

// namespace App\Models;

class Student extends Person
{
    public function __construct($first_name, $last_name, $gender, $address, $email = null, $password = null)
    {
        parent::__construct($first_name, $last_name, $gender, $address, $email, $password);
    }
    public function setImage($image)
    {
        $this->image = $image;
    }

    public function create()
    {
        $sql = "INSERT INTO Student (first_name, last_name, gender, address, email, password) VALUES ('" . $this->first_name . "', '" . $this->last_name . "', '" . $this->gender . "', '" . $this->address . "' , '" . $this->email . "', '" . $this->password . "');";
        $result = $this->runDml($sql);
        return $result;
    }

    public function login($email, $password)
    {

        $sql = "SELECT * FROM Student WHERE email = '" . $email . "' AND password = '" . $password . "';";
        $result = $this->runDml($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function getStudentById($id)
    {

        $sql = "SELECT * FROM Student WHERE student_id = '" . $id . "';";
        $result = $this->runDml($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function updateStudent($id)
    {
        $sql = '';
        if (isset($this->first_name)) {
            $sql = "UPDATE Student SET first_name = '" . $this->first_name . "' WHERE student_id = '" . $id . "';";
            $this->runDml($sql);
        }

        if (isset($this->last_name)) {
            $sql = "UPDATE Student SET last_name = '" . $this->last_name . "' WHERE student_id = '" . $id . "';";
            $this->runDml($sql);
        }

        if (isset($this->gender)) {
            $sql = "UPDATE Student SET gender = '" . $this->gender . "' WHERE student_id = '" . $id . "';";
            $this->runDml($sql);
        }

        if (isset($this->address)) {
            $sql = "UPDATE Student SET address = '" . $this->address . "' WHERE student_id = '" . $id . "';";
            $this->runDml($sql);
        }

        if (isset($this->password)) {
            $sql = "UPDATE Student SET password = '" . $this->password . "' WHERE student_id = '" . $id . "';";
            $this->runDml($sql);
        }

        if (isset($this->image) && $this->image != '') {
            $sql = "UPDATE Student SET image = '" . $this->image . "' WHERE student_id = '" . $id . "';";
            $this->runDml($sql);
        }


        return true;
    }
}
