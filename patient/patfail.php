<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../assets/img/logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psychologues X</title>
    <link href="../assets/css/main.css" rel="stylesheet">

   
  </head>
<?php include '../header.php';  ?>
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
	<h1 align="center">Espace Reservé Aux patients :</h1>
  <br>
				<div class="pnl">
          <span style="color: red">Votre Email ou Mot de passe est incorrecte</span>
  <form action="patientcheck.php" method="POST">
    <label for="login">Email:</label>
    <input type="text" id="fname" name="Email" placeholder="Ton login est.." required>

    <label for="pass">Mot de passe</label>
    <input type="password" id="lname" name="passe" placeholder="Ton mot de passe est.." required>

    
  
    <input type="submit" value="Submit" name="mit">
  </form>

	</div>
	
	
	
	
	
<br>
<br>
<br>
<br>
	
	

   

   <?php include '../footer.php'; ?>
    
  </body>
</html>
