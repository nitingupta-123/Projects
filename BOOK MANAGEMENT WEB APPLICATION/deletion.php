<?php
$size=sizeof($_POST);
$j=0;
for($i=0;$i<$size;$i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index]))
	{
		$b_id[$i]=$_POST[$index];
	}
	else
	{
		$i--;
	}
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'book_record');
for($k=0;$k<$i;$k++)
{
$q="delete from book where book_id=".$b_id[$k];
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
     if($i)
      echo $size." DELETION SUCESSFULL!";
   ?>
</p>
<span>To back on previous page </span><a href="deletionForm.php">click here!</a></br>
<span>To back on home page </span><a href="home.php">click here!</a>
</body>
</html>