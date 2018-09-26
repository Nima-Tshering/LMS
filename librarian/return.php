<?php
include('connection.php');
$d=date('d-M-Y');
$id=$_GET['id'];
$s="UPDATE `issue_books` SET `books_return_date`='$d' WHERE `id`='$id'";
$run=$con->query($s);
if($run)
{

  $r=mysqli_query($con,"SELECT * FROM `issue_books` WHERE `id`='$id'");
  $row=mysqli_fetch_assoc($r);
  $book=$row['books_name'];
   mysqli_query($con,"UPDATE add_books SET avialable_qty=avialable_qty+1 WHERE books_name='$book' ");
  header('Location: return_books.php');

}


?>
