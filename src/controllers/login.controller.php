<?php

include_once "../models/Student.php";

// use App\Models\Student;
// use App\Models\Teacher;

$student = new Student('Ibrahim Ismail', 20, 'Male');
$student2 = new Student('Mohamed Ismail', 20, 'Male');
echo $student->name;
echo "<br/>";

echo $student2->name;
echo "<br/>";

?>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>

<body>
    <button class="btn btn-primary">Logout</button>

    <script src="../../assets/js/bootstrap.min.js"></script>
</body>

</html>