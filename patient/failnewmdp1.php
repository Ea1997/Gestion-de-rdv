
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

    <a  href="../patient/patientcheck.php">Acceuil</a>
     <a class="active" href="../patient/modpass.php">Modifier Mot de passe</a>
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
 <h1 align="center">Bienvenu <?php echo $str ;  ?></h1>

  </div>
  <br><br>
  <h4 align="center">Modifier votre mot de passe :</h4>
  <br>
  <br>
 <div id="ww">
      <div class="container">
      <div class="row">
     
        <div class="pnl">
           <span style="color: red;">Mot de passe incorrecte</span> 
  <form action="modpasse.php" method="POST">
    <label for="Ancien">Mot de passe actuel:</label>
    <input type="password" id="Ancien" name="Ancien"  required>
 
    <label for="nvmdp">Nouveau mot de passe</label>
    <input type="password" id="nvmdp" name="nvmdp" required>
    <label for="nvmdp1">Nouveau mot de passe</label>
    <input type="password" id="nvmdp1" name="nvmdp1" required>


    <input type="submit" name="Submit" value="Submit">
  </form>
</div>
      </div>
      </div> 
  </div>
  
  
  
  
  
  
<br>

<br>
<br>
<br>
  
  

   

   <?php include '../patient/footerpatient.php'; ?>
    
  </body>
</html>
