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
<form action="deletion.php" method="post">
<table >
 <tr>
  <th>BOOK ID</th>
  <th>TITLE</th>
  <th>AUTHOR</th>
  <th>PRICE</th>
  <th>SELECT</th>
 </tr>
<?php 
  for($i=0;$i<$num;$i++)
  {
	  $row=mysqli_fetch_array($result);
?>
  <tr>
  <td><?php echo $row['book_id']?></td>
  <td><?php echo $row['title']?></td>
  <td><?php echo $row['author']?></td>
  <td><?php echo $row['price']?></td>
  <td><input type ="checkbox" value="<?php echo $row['book_id']?>" name="b<?php echo $i ?>"></td>
  </tr>
<?php
  }
?>
 <tr>
  <td><input type="submit" value="DELETE"</td>
 </tr>
</table>
</form>
</body>
</html>