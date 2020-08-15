<!Doctype html>
<html>
<head>
<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'book_record');
$q="insert into book(title,author,price) value('$title','$author',$price)";
$i=mysqli_query($con,$q);
mysqli_close($con);
?>
</head>
<body>
<h1>BOOK MANAGEMENT RECORD</h1>
<p><?php
     if($i)
      echo "INSERTION SUCESSFULL!";
     else
	  echo "INSERTION FAILED"; 
   ?>
</p>
<span>To back on previous page </span><a href="insertionForm.php">click here!</a></br>
<span>To back on home page </span><a href="home.php">click here!</a>
</body>
</html>