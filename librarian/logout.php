<?php

  session_start();
  session_destroy();
  header('Location: librarian_login.php');
?>
