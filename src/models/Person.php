<?php

// namespace App\Models;
include_once __DIR__ . "/../models/DbConnector.php";


class Person extends DbConnector
{
    public $first_name;
    public $last_name;
    public $date_of_birth;
    public $gender;
    public $address;
    public $email;
    public $password;
    public $image;


    public function __construct($first_name, $last_name, $gender, $address, $email = null, $password = null, $image = null)
    {
        parent::__construct();

        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $this->address = $address;
        $this->email = $email;
        $this->password = $password;
        $this->image = $image;
    }
}