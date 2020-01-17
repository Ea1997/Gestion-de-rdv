<?php

  $dep=$_GET['idpatient'];
    $bdd = new PDO('mysql:host=localhost;dbname=psychologue;charset=utf8', 'root', '');
   $pdostat= $bdd->prepare('DELETE FROM patient WHERE idpatient=:num LIMIT 1');
   
   $pdostat->bindValue(':num',$_GET['idpatient'],PDO::PARAM_INT); 
   $executeisok=$pdostat->execute();
  
   if ($executeisok) {
   $message='Succes';
    
   }
   else{
    $message='Echec de la suppression';
   }
   header('Location:patient.php');
?>