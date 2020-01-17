
<?php
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=psychologue;charset=utf8', 'root', '');
   }
   catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
   }
?>

<?php
session_start();
if(isset($_POST['mit'])) {
  $_SESSION['login']=$_POST['login'];
  $_SESSION['passe']=$_POST['passe'];
  $reponse = $bdd->query('SELECT password FROM admin WHERE login=\'' . $_SESSION['login'] . '\'');
    while ($donnees = $reponse->fetch()){
      $Pass = $donnees['password'];
      }
    if ($Pass !=  $_SESSION['passe']) {
      $link = 'logfail.php';
      header('Location:' .$link);
    }

else{

$reponse2 = $bdd->query('SELECT nom FROM admin WHERE login=\'' . $_SESSION['login'] . '\'');
        while ($donnees = $reponse2->fetch()){
        $_SESSION['nom'] = $donnees['nom'];
        }
     
 }
 }
?>



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
 



<div id="customers"><a href="ajouterrdv.php"><button>Enregistrer un nouveau rendez_vous</button></a>
<a  href="historyrdv.php"><button>Historique</button></a></div>
<br>
<br>
<br>

  
      <div  align="center" style="border-collapse: collapse;
  width: 100%;">
      <h1>Liste des rednez-vous:</h1>
     <table  id="customers">
 
      <tr>
    <article>
      <tr>
    <th>Nom du patient</th>
    <th>Date de consultation</th>
    <th>Heure de consultation</th>
     <th>jusqu'à</th>
    
      

   
     
  </tr>
   <?php
   $date=date("Y/m/d");
    $bdd = new PDO('mysql:host=localhost;dbname=psychologue;charset=utf8', 'root', '');
    $articles = $bdd->query("select daterdv,timerdv,timerdv1,Nom from rdv,patient WHERE rdv.idpatient=patient.idpatient AND rdv.daterdv>='$date'");
    foreach ($articles as $article): ?>
     
     
  <tr>  <td><p><?php echo $article['Nom'] ?></p></td>
        <td> <p><?php echo $article['daterdv'] ?></p></td>
        <td> <p><?php echo $article['timerdv'] ?></p></td>
         <td> <p><?php echo $article['timerdv1'] ?></p></td>
        
  </tr>
      
    </article>
    </tr>
 
    <?php endforeach ?>
</table>
      </div>
  
  
  
  
  
<br>
<br>
<br>
<br>
  
  
<?php include '../psy/footeradmin.php'; ?>

   
    
  </body>
</html>