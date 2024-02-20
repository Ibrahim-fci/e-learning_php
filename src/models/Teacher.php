<?php
include_once __DIR__ . "/../models/Person.php";


// namespace App\Models;

class Teacher extends Person
{

    public function __construct($first_name, $last_name, $gender, $address, $email = null, $password = null)
    {
        parent::__construct($first_name, $last_name, $gender, $address, $email, $password);
    }

    public function create()
    {
        $sql = "INSERT INTO Teacher (first_name, last_name, gender, address, email, password) VALUES ('" . $this->first_name . "', '" . $this->last_name . "', '" . $this->gender . "', '" . $this->address . "' , '" . $this->email . "', '" . $this->password . "');";
        $result = $this->runDml($sql);
        return $result;
    }

    public function login($email, $password)
    {

        $sql = "SELECT * FROM Teacher WHERE email = '" . $email . "' AND password = '" . $password . "';";
        $result = $this->runDml($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getTeacherById($id)
    {

        $sql = "SELECT * FROM Teacher WHERE teacher_id = '" . $id . "';";
        $result = $this->runDml($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function updateTeacher($id)
    {
        $sql = '';
        if (isset($this->first_name)) {
            $sql = "UPDATE Teacher SET first_name = '" . $this->first_name . "' WHERE teacher_id = '" . $id . "';";
            $this->runDml($sql);
        }

        if (isset($this->last_name)) {
            $sql = "UPDATE Teacher SET last_name = '" . $this->last_name . "' WHERE teacher_id = '" . $id . "';";
            $this->runDml($sql);
        }

        if (isset($this->gender)) {
            $sql = "UPDATE Teacher SET gender = '" . $this->gender . "' WHERE teacher_id = '" . $id . "';";
            $this->runDml($sql);
        }

        if (isset($this->address)) {
            $sql = "UPDATE Teacher SET address = '" . $this->address . "' WHERE teacher_id = '" . $id . "';";
            $this->runDml($sql);
        }

        if (isset($this->password)) {
            $sql = "UPDATE Teacher SET password = '" . $this->password . "' WHERE teacher_id = '" . $id . "';";
            $this->runDml($sql);
        }

        if (isset($this->image) && $this->image != '') {
            $sql = "UPDATE Teacher SET image = '" . $this->image . "' WHERE teacher_id = '" . $id . "';";
            $this->runDml($sql);
        }


        return true;
    }
}