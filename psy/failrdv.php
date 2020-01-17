

 <?php include '../psy/headeradmin.php'; ?>

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
<span>Créneau erroné</span>
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


    
  
    
   
  
    <input type="submit" name="mit" value="Submit">
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
  
  
<?php include '../footer.php'; ?>


   
    
  </body>
</html>