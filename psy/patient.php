
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
    <a  class="active" href="patient.php">Patient</a>
    <a href="rdv.php">Rendez-vous</a>
    <a  href="logout.php">Déconnexion</a>
    
  </div>


 

</div>

  <body>
 



<div id="customers"><a href="ajouter.php"><a href="ajouter.php"><button>Ajouter un patient</button></a></div>
<br>
<br>
<br>

  
      <div  align="center" style="border-collapse: collapse;
  width: 100%;">
      <h1>Liste des Patients:</h1>
     <table  id="customers">
 
      <tr>
    <article>
      <tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Age</th>
       <th>Profession</th>
     <th>Email</th>
      <th>Date PC</th>
       <th>Type</th>
        <th>Moyen</th>
         <th>Anxiété</th>

   
     
  </tr>
   <?php
    $bdd = new PDO('mysql:host=localhost;dbname=psychologue;charset=utf8', 'root', '');
    $articles = $bdd->query('select * from patient order by idpatient');
    foreach ($articles as $article): ?>
  <tr>
    <td> <p><?php echo $article['idpatient'] ?></p></td>
         <td><p><?php echo $article['Nom'] ?></p></td>
        <td> <p><?php echo $article['Prenom'] ?></p></td>
        <td> <p><?php echo $article['Age'] ?></p></td>
        <td> <p><?php echo $article['Profession'] ?></p></td>
        <td> <p><?php echo $article['Email'] ?></p></td>
        <td> <p><?php echo $article['Datepc'] ?></p></td>
        <td> <p><?php echo $article['Type'] ?></p></td>





        <td> <?php if ($article['Moyen']==1) {
echo "Autre patient";        }
elseif ($article['Moyen']==2) {
echo "docteur";  } 
 elseif ($article['Moyen']==3) {
echo "Pages Jaunes";   }
elseif ($article['Moyen']==4) {
echo "Internet"; }
else
   echo "Autres" ?></td>









      <td>  <?php if ($article['Anxiete']==11) {
        ?> <p> <?php echo "Non Anxiéte"; ?></p><?php
        }
        elseif ($article['Anxiete']<11) {
           ?> <p><?php echo $article['Anxiete'] ?></p><?php
                      }  ?></td>
         
        <td><a href="modpatient.php?idpatient=<?= $article['idpatient'] ?>" style="'text-decoration: none; color: black;' "><button>modifier</button></a></td>
        <td><a  href="supprimerpatient.php?idpatient=<?= $article['idpatient']?>" style="'text-decoration: none; color: black;'" ><button>supprimer</button></a></td>
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