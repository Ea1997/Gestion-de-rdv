
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
  $_SESSION['Email']=$_POST['Email'];
  $_SESSION['passe']=$_POST['passe'];
  $reponse = $bdd->query('SELECT password FROM patient WHERE Email=\'' . $_SESSION['Email'] . '\'');
    while ($donnees = $reponse->fetch()){
      $Pass = $donnees['password'];
      }
    if ($Pass !=  $_SESSION['passe']) {
      $link = 'patfail.php';
      header('Location:' .$link);
    }

else{

$reponse2 = $bdd->query('SELECT * FROM patient WHERE Email=\'' . $_SESSION['Email'] . '\'');
        while ($donnees = $reponse2->fetch()){
           $_SESSION['idpatient'] = $donnees['idpatient'];
        $_SESSION['Nom'] = $donnees['Nom'];
        $_SESSION['Prenom'] = $donnees['Prenom'];
         $_SESSION['Age'] = $donnees['Age'];
          $_SESSION['Profession'] = $donnees['Profession'];
           $_SESSION['Anxiete'] = $donnees['Anxiete'];
        }
     
 }
 }

$str=$_SESSION['Nom'].' '.  $_SESSION['Prenom'] ;
$str=strtoupper($str);

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../assets/img/ensa1.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psychologues X</title>
    <link href="../assets/css/main.css" rel="stylesheet">

   
  </head>
<?php include '../patient/headerpatient.php';  ?>

    <a href="../patient/patientcheck.php">Acceuil</a>
     <a href="../patient/modpass.php">Modifier Mot de passe</a>
     <a class="active"  href="../patient/rdv.php">Vos Rendez Vous</a>
      <a href="../patient/logout.php">Déconnexion</a>
    
  </div>
</div>

  <body>

 <h1 align="center">Bienvenu <?php echo $str;  ?></h1>
  <!-- +++++ Welcome Section +++++ -->
 
  <br>
  
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
$patient=$_SESSION['idpatient'];
    $bdd = new PDO('mysql:host=localhost;dbname=psychologue;charset=utf8', 'root', '');
    $articles = $bdd->query("select daterdv,timerdv,timerdv1,Nom from rdv,patient WHERE rdv.idpatient=' $patient' AND rdv.daterdv<='$date'");
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
  
  

   

   <?php include '../patient/footerpatient.php'; ?>
    
  </body>
</html>
