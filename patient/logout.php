<?php

session_start();
session_destroy();



 $link = 'patient.php';
      header('Location:' .$link);
?>