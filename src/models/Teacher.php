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
        return $result;
    }
}