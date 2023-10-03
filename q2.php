<html> 
 <head> 
 <meta charset = "utf-8">
 
 <title>form</title> 
 

 </head> 
 <body> 
 <header><h1>Add course form </h1><ul>
 <li><a href = "home.php">home</a></li> 
<li><a href = "courses.php">courses</a></li> 
<li><a href = "q2.php">add course</a></li> 
<li><a href = "http://www.Aboutus.com">About us</a></li> 
<li><a href = "http://www.contactus.com">contact us </a></li> 
<h4 id="de"></h4>
</ul></header>

<hr> </hr>
<section><h6 id="demo" ></h6>
<form   action="addCourse.php"  method = "post" >
 <p><label>Cource Name:<br>
 <input type = "text"  placeholder = "Course Name" name="course_name" required />  </label></p>
<p><label>Cource id:<br>
 <input type = "text"  placeholder = "Course id" name="course_id" required />  </label></p>
 
 <p>level:<br>
 <input type="radio" name="n" value="1" > 1<br>
  <input type="radio" name="n" value="2"> 2<br>
  <input type="radio" name="n" value="3"> 3<br> 
 <input type="radio" name="n" value="4" > 4<br>
  <input type="radio" name="n" value="5"> 2<br>
  <input type="radio" name="n" value="6"> 6<br>
  <input type="radio" name="n" value="7"> 7<br>
  <input type="radio" name="n" value="8"> 8<br></p>
  <input type="submit" value="send">
<input type="reset" value="reset">

</section><hr></hr>
 <?php include 'db_connnection.php';?>
<footer>
 <h5>&copy; copyrigh2018 </h5>
   </footer>
 </form> </body>  </html>