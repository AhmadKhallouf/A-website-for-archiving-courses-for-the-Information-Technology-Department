<html> 
 <head> 
 <meta charset = "utf-8"> 
 <title>INFORMATION TECHNOLOGY
 </title>
 <?php
 include('db_connnection.php')
 ?>
 </head> 
 <body> 
 
 <header><h1>IT Department</h1> <ul>
<hr> </hr><br>
<li><a href = "home.php">home</a></li> 
<li><a href = "courses.php">courses</a></li> 
<li><a href = "q2.php">add course</a></li> 
<li><a href = "http://www.Aboutus.com">About us</a></li> 
<li><a href = "http://www.contactus.com">contact us </a></li>


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
</ul>
 </header>
<hr></hr>
<?php
$sql = "SELECT * FROM ItDepartmentCourse";
$result = $conn->query($sql);
?>
<table style="border: black solid; margin:auto; padding: top 80px; padding: bottom 50px;    ">
<tr style="background-color: gray;">
    <th>ID</th>
    <th>Course Name</th>
    <th>Course ID</th>
    <th>Level</th>
    <th>Edit Course</th>
    <th>Delete Course</th>
</tr>
<?php foreach($result as $course){ ?>
<tr>
    <td><?php echo $course['ID'] ?></td>
    <td><?php echo $course['Course_Name'] ?></td>
    <td><?php echo $course['Course_ID'] ?></td>
    <td><?php echo $course['Lavel'] ?></td>
    <td><a href=" ">Edit Course</a></td>
    <td><a href=" ">Delete Course</a></td>
    </tr>
    <?php } ?>
</table>

<footer>
 <h5>&copy; copyrigh2018 </h5>
   </footer>

  
 </body> 
</html>