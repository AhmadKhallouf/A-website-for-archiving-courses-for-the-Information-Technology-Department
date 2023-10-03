<?php 
//include connection of database file
include('db_connnection.php');

//test if the connection failed
if($conn->connect_errno){
    die("connection failed:".$conn->connect_errno);
}

// catch the data from the form
$course_name = $_POST['course_name'];
$course_id = $_POST['course_id'];
$level = $_POST['n'];

//insert data in table
$sql = "INSERT INTO ItDepartmentCourse(Course_Name,Course_ID,Lavel) VALUES('$course_name','$course_id','$level')";
$result = $conn->query($sql);

//test if inserting records failed
if($result != TRUE){
    echo "Error creating in insert:".$conn->error;
}

header('location:http://localhost/LABASSIGNMENT_2/q2.php')







?>