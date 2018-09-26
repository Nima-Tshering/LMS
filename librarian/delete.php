<?php
include('connection.php');
$id=$_GET['bid'];
$run=mysqli_query($con,"DELETE FROM `add_books` WHERE `bid`='$id'");
if($run)
{
  ?>
  <script>
  alert('Book Successfully Deleted!');
  </script>
  <?php
    header('Location: display_books.php');
}
?>
