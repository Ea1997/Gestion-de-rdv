<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../assets/img/ensa1.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psychologues X</title>
    <link href="../assets/css/main.css" rel="stylesheet">

   
  </head>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../assets/img/logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psychologue X</title>
    <link href="../assets/css/main.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

   
  </head>

  <body>


    
  <div class="header">
  <a href="#default" class="logo">CompanyLogo</a>
  <div class="header-right">
    <a  href="../index.php">Acceuil</a>
    <a class="active" href="../patient/patient.php">Patient</a>
    
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
	<h1 align="center">Espace Reservé Aux patients :</h1>
  <br>
				<div class="pnl">
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
