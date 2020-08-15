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
<form action ="update.php" method="post">
<table >
 <tr>
  <th>BOOK ID</th>
  <th>TITLE</th>
  <th>AUTHOR</th>
  <th>PRICE</th>
 </tr>
<?php 
  for($i=0;$i<$num;$i++)
  {
	  $row=mysqli_fetch_array($result);
?>
  <tr>
  <td><?php echo $row['book_id']?>      <input type="hidden"  name="bookid<?php echo$i ?>"  value=" <?php echo $row['book_id']?> "/></td>
  <td><input type="text"    name="title<?php  echo$i ?>"  value=" <?php echo $row['title']?>"/></td>
  <td><input type="text"    name="author<?php echo$i ?>"  value=" <?php echo $row['author']?>"/></td>
  <td><input type="text"    name="price<?php  echo$i ?>"  value=" <?php echo $row['price']?>" </td>
  </tr>
<?php
  }
?> 
</table>
<input type="submit" value="Update"/>
<form/>
</body>
</html>