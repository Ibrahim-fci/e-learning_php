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
    
    public function search($keyword) {
        $keyword = trim($keyword);
        $sql = "SELECT course.*, category.title AS category_name, teacher.first_name AS instructor_name
                FROM course
                LEFT JOIN category ON course.category_id = category.id
                LEFT JOIN teacher ON course.teacher_id = teacher.teacher_id
                WHERE course.title LIKE '%$keyword%' 
                   OR category.title LIKE '%$keyword%' 
                   OR teacher.first_name LIKE '%$keyword%' 
                   OR course.price LIKE '%$keyword%'";
        
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