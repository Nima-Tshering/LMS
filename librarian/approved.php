<?php
include('connection.php');
$id=$_GET['id'];
$sql="UPDATE `sregistration` SET `status`='yes' WHERE `sid`='$id'";
$run=$con->query($sql);
 if($run)
 {
   ?>
   <script type="text/javascript">
   window.location="librarian_home.php";
   </script>
   <?php
 }
 else {
   echo $con->error;
 }
?>
