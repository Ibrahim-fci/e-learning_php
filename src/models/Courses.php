<?php
class Course{
    private $connection;
    public $id,$title,$img,$description,$instructor,$duration,$price,$category;
    public function __construct()
    {
        try{
            $this->connection=new PDO("mysql:host=localhost;dbname=e_learning;charset=utf8","root","");
        }catch(Exception $e){
            $e->getMessage();
        }
    }

    public function runDML($sql){ 
        return $this->connection->query($sql);
    }

    
    public function getAllCourses(){
        $stmt="SELECT * FROM course";
        $result=$this->runDML($stmt); 
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        if($data){
            return $data;
        }
        else{
            return false;
        }
    }
    public function getoneCourses($id){
        $stmt="SELECT * FROM course where id =$id";
        $result=$this->runDML($stmt); 
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        if($data){
            return $data;
        }
        else{
            return false;
        }
    }
    
}
?>