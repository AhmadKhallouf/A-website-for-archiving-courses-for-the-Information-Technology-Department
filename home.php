<html> 
 <head> 
 <meta charset = "utf-8"> 
 <title>INFORMATION TECHNOLOGY
 </title>
 <?php

//include connection of database file
include('db_connnection.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//test if the connection failed
if($conn->connect_errno){
    die("connection failed:".$conn->connect_errno);
}
try{
$query = "select 1 from ItDepartmentCourse";
$val = mysqli_query($conn,$query);

}
catch(Exception $e){
//create table it_department_course in database
$sql = "CREATE TABLE ItDepartmentCourse(
    ID INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Course_Name VARCHAR(30) NOT NULL,
    Course_ID VARCHAR(50) NOT NULL,
    Lavel INT(10) NOT NULL
)";
$result = $conn->query($sql);

//test if creating table failed
if($result != true){
    echo "Error creating table:".$conn->error;
}

 

//insert records in table it_department_course
$sql2 = "INSERT INTO ItDepartmentCourse(Course_Name,Course_ID,Lavel) VALUES ('Multi-tier Architecture','1T331','7'),('Operating System','1T360','4') ";
$result2 = $conn->query($sql2);

//test if inserting records failed
if($result2 != TRUE){
    echo "Error creating in insert:".$conn->error;
}
}



finally{
    
}



?>

 </head> 
 <body> 
 
 <header><h1>IT Department</h1> <ul>
<hr> </hr><br>
<li><a href = "home.php">home</a></li> 
<li><a href = "courses.php">courses</a></li> 
<li><a href = "q2.html">add course</a></li> 
<li><a href = "">About us</a></li> 
<li><a href = "">contact us </a></li>


<style>

h2{float: right;}


ul li:hover {
  background-color: #eee;
}
ul li {
  border: 3px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 14px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: inline;
  position: relative;
}
a {
   text-decoration: none;
}
a {
   text-decoration: none;
}
h6{float:right}
li  {
  display: block;
  padding: 8px;
  background-color: #dddddd;
}
header{   border: 2px solid ; background-color: #dddddd;}

footer{  

clear: both;
    position: relative;
    height: 100px;
  padding: 5px;
  border: 2px solid ;
margin: auto;
background-color: #dddddd;
}
section{
	    position: relative;
    height: 500px;
	border-style: solid;   border: 2px solid ;}
</style>
<h4 id="de"></h4> 
</ul> </header>
<hr></hr>
<h6 id="demo"></h6>
<section><br>Overveiw</h1> 

<h5>I would like to welcome you to the course website of the Information Technology Department
 <br>IT department undertook new tasks that ensure that the computing infrastructure 
 is suitable for any<br> <br>organization to operate efficiently and reliability , and meet the computer - related needs of individuals , 
 and developing appropriate solutions for problems <br><br>, Today , all kinds of organizations dramatically rely on IT departments 
. They need to have appropriate regulations , and it is working properly ,
 and to be locked and are constantly updated and maintained in a timely manner</h5>
</section>
<hr></hr>

<footer>
 <h5>&copy; copyrigh2018 </h5>
   </footer>

    
 </body> 
 </html>