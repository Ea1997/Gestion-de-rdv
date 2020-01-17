




 <?php
session_start();
        $result=false;
        if(isset($_POST['Submit'])){
        $amdp=$_POST['Ancien'];
        $nmdp=$_POST['nvmdp'];
        $vmdp=$_POST['nvmdp1'];
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "psychologue";

        $login=$_SESSION['Email'];
            if (($amdp!='')&&($nmdp!='')&&($vmdp!='')) {
                if ($amdp==$_SESSION['passe']){
                    if($nmdp==$vmdp){
                      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql="UPDATE patient SET password='$nmdp' WHERE Email='$login'";
                    $conn-> exec($sql);
                    echo 'Modification du mot de passe effectuee avec succes';
                    $_SESSION['Pass']=$nmdp;
                     $link = 'patientcheck.php';
      header('Location:' .$link);
                    } else {
                        $link = 'failnewmdp.php';
      header('Location:' .$link);
                    }
                } else {
                      $link = 'failnewmdp1.php';
      header('Location:' .$link);
                    }
            } else {
                echo 'Veuillez remplir tous les champs';
            }
        } 
                 
    ?>