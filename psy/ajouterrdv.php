

<!DOCTYPE html>
<html lang="fr">
   <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../assets/img/ensa1.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psychologues X</title>
    <link href="../assets/css/main.css" rel="stylesheet">
       <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


   
  </head>

  <body>
 












<div class="header" id="myDIV">
  <a href="#default" class="logo">CompanyLogo</a>
  <div class="header-right">
    <a  href="admin.php">Acceuil</a>
    <a   href="patient.php">Patient</a>
    <a class="active" href="rdv.php">Rendez-vous</a>
    <a  href="logout.php">Déconnexion</a>
    
  </div>


 

</div>

  <body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

  <div id="ww">
      <div class="container">
      <div class="row">
        <div class="pnl">
  <form action="rdvreg.php" method="POST">

 <label>Nom Du Patient</label>
 <?php
    $bdd = new PDO('mysql:host=localhost;dbname=psychologue;charset=utf8', 'root', '');
    $articles = $bdd->query('select nom,idpatient from patient');
    foreach ($articles as $article): ?>
    <select name="nompat" required>
    <option value="<?php echo $article['idpatient'] ?>"><?php echo $article['nom'] ?></option>
    
  </select>


    <label for="date">La date :</label>
    <input type="date" id="date" name="date" required>

    <label for="lname">L'heure</label>
    <input type="time" id="lname" name="time" required>
    <label for="lname">jusqu'a l'heure</label>
    <input type="time" id="lname" name="time1" required>


    
  
    
   
  
    <input type="submit" name="Submit" value="Submit">
  </form>
</div>
      </div>
      </div> 
  </div>
   <?php endforeach ?>
  
  
  
  
<br>
<br>
<br>
<br>
  
  
<?php include '../psy/footeradmin.php'; ?>


   
    
  </body>
</html>