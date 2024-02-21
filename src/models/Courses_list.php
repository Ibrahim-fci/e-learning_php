<?php
class Course{
    private $connection;
    public $id,$title,$img,$description,$instructor,$duration,$price,$category;
    public function __construct()
    {
        try{
            $this->connection=new PDO("mysql:host=localhost;dbname=e-learning;charset=utf8","root","");
        }catch(Exception $e){
            $e->getMessage();
        }
    }

    public function runDML($sql){ 
        return $this->connection->query($sql);
    }
    
    public function search($keyword) {
        $keyword = trim($keyword);
        $sql = "SELECT Course.*, Category.title AS category_name, Teacher.first_name AS instructor_name
                FROM Course
                LEFT JOIN Category ON Course.category_id = Category.id
                LEFT JOIN Teacher ON Course.teacher_id = Teacher.teacher_id
                WHERE Course.title LIKE '%$keyword%' 
                   OR Category.title LIKE '%$keyword%' 
                   OR Teacher.first_name LIKE '%$keyword%' 
                   OR Course.price LIKE '%$keyword%'";
        
        $result = $this->runDML($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        
        return $data;
    }
    // public function searchCourses($keyword) {
    //     $keyword = trim($keyword);
    //     $sql = "SELECT Course.*, Category.title AS category_name
    //     FROM Course
    //     LEFT JOIN Category ON Course.category_id = Category.id
    //     WHERE Category.title LIKE '%$keyword%'";

        
    //     return $data;
    // }
    
    public function getAllCourses(){
        $stmt="SELECT * FROM Course";
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