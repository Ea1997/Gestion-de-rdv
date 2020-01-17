<?php

session_start();
session_destroy();



 $link = 'loginadmin.php';
      header('Location:' .$link);
?>