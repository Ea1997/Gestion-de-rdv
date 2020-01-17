

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
  <form action="patientreg.php" method="POST">
    <label for="fname">Nom:</label>
    <input type="text" id="fname" name="Nom" placeholder="Nom est.." required>

    <label for="lname">Prenom</label>
    <input type="text" id="lname" name="Prenom" placeholder="Prenom est.." required>


    
  
    <label for="Age">Age</label>
    <input type="text" id="Age" name="Age" placeholder="Age est.." required>
    <label for="email">Email</label>
    <input type="text" id="mail" name="Email" placeholder="Email est.."  required>
    <label for="Profession">Profession</label>
    <input type="text" id="Profession" name="Profession" placeholder="Profession est.."  required>
    <label for="Datepc">Date du premier Consultation</label>
    <input type="date" id="Datepc" name="Datepc"   required>
    <label>Type de consultation:</label>
    <select name="Type" required>
    <option value="enfant">Enfant</option>
    <option value="ado">Ado</option>
    <option value="femme">Femme</option>
    <option value="homme">Homme</option>
    <option value="couple">Couple</option>
  </select>
  <label>Par quel moyen:</label>
  <select name="Moyen" required>
    <option value="1">Autre patient</option>
    <option value="2">Docteur</option>
    <option value="3">Pages Jaunes</option>
    <option value="4">Internet</option>
    <option value="5">Autres</option>
  </select>
  <label>Indicateur Anxiete</label>
  
  <select name="Anxiete" required>
    <option value="11">Non</option>
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="5">6</option>
    <option value="5">7</option>
    <option value="5">8</option>
    <option value="5">9</option>
    <option value="5">10</option>
  </select>
    <input type="submit" name="mit" value="Submit">
  </form>
</div>
      </div>
      </div> 
  </div>
  
  
  
  
  
<br>
<br>
<br>
<br>
  
  
<?php include '../footer.php'; ?>


   
    
  </body>
</html>