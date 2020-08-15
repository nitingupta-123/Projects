<!Doctype html>
<html>
<head>
<link rel="stylesheet" href="./css/viewstyle.css"/>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'book_record');
$q="select *from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
</head>
<body>
<h1>BOOK MANAGEMENT RECORD</h1>
<table >
 <tr>
  <th>BOOK ID</th>
  <th>TITLE</th>
  <th>AUTHOR</th>
  <th>PRICE</th>
 </tr>
<?php 
  for($i=1;$i<=$num;$i++)
  {
	  $row=mysqli_fetch_array($result);
?>
  <tr>
  <td><?php echo $row['book_id']?></td>
  <td><?php echo $row['title']?></td>
  <td><?php echo $row['author']?></td>
  <td><?php echo $row['price']?></td>
  </tr>
<?php
  }
?>
</table>
<span>To back on home page </span><a href="home.php">click here!</a>
</body>
</html>