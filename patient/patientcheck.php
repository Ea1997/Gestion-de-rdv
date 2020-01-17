
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

    <a class="active" href="../patient/patientcheck.php">Acceuil</a>
     <a href="../patient/modpass.php">Modifier Mot de passe</a>
     <a href="../patient/rdv.php">Vos Rendez Vous</a>
      <a href="../patient/logout.php">Déconnexion</a>
    
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
  <!-- +++++ Welcome Section +++++ -->
 
  <br>
        <div class="pnl">
 <h1 align="center">Bienvenu <?php echo $str;  ?></h1>

  </div>
  <br><br>
  <h4 align="center">Informations Personnels</h4>
  <br>
  <br>
  <table  id="customers">
    <tr>
  <th>
    Profession
  </th>
<td>
  <?php echo $_SESSION['Profession']; ?>
</td>
</tr>
<tr>
<th>
    Age
  </th>
<td>
  <?php echo $_SESSION['Age']; ?>
</td>
</tr>
<tr>
<th>
    Degrés d'Anxiéte
  </th>
<td>
  <?php echo $_SESSION['Anxiete']; ?>
</td>
</tr>
  </table>
  
  
  
<br>

<br>
<br>
<br>
  
  

   

   <?php include '../patient/footerpatient.php'; ?>
    
  </body>
</html>
