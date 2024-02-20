<?php
include_once __DIR__ . "/../models/DbConnector.php";

class Category extends DbConnector
{
    public $title;

    public function __construct()
    {
        parent::__construct();
    }



    public function getAllCategories()
    {
        $sql = "SELECT * FROM Category";
        $result = $this->runDML($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getCategoryById($id)
    {
        $sql = "SELECT * FROM Category WHERE id = '$id'";
        $result = $this->runDML($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}
