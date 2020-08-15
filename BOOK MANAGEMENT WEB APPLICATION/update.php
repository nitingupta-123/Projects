<?php
$size=sizeof($_POST);
$records=$size/4;
for($i=0;$i<$records;$i++)
{
	$index1="bookid".$i;
    $bookid[$i]=$_POST[$index1];
	$index2="title".$i;
    $title[$i]=$_POST[$index2];
	$index3="author".$i;
    $author[$i]=$_POST[$index3];
	$index4="price".$i;
    $price[$i]=$_POST[$index4];
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'book_record');
for($k=0;$k<$records;$k++)
{
     $q="update book 
     SET title='$title[$k]',author='$author[$k]',price=$price[$k]
     where book_id=$bookid[$k]";
     mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!Doctype html>
<html>
<head>
</head>
<body>
<h1>BOOK MANAGEMENT RECORD</h1>
<p><?php
 
      echo " UPDATE SUCESSFULL!";
   ?>
</p>
<span>To back on previous page </span><a href="updationForm.php">click here!</a></br>
<span>To back on home page </span><a href="home.php">click here!</a>

</body>
</html>